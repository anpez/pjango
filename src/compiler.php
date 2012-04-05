<?php

/***************************************************************
 * Licensed to Antonio Nicolás Pina under one
 * or more contributor license agreements.  See the NOTICE file
 * distributed with this work for additional information
 * regarding copyright ownership.  The ASF licenses this file
 * to you under the Apache License, Version 2.0 (the
 * "License"); you may not use this file except in compliance
 * with the License.  You may obtain a copy of the License at
 *
 *   http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing,
 * software distributed under the License is distributed on an
 * "AS IS" BASIS, WITHOUT WARRANTIES OR CONDITIONS OF ANY
 * KIND, either express or implied.  See the License for the
 * specific language governing permissions and limitations
 * under the License.
 **************************************************************/

require(__DIR__.'/parser.php');
require(__DIR__.'/optimizer.php');
require(__DIR__.'/transcriber.php');

class Pjango_compiler
{
	const CODE_HTML		= 0;
	const CODE_VARIABLE	= 1;

	private $_parser;
	private $_expressions;
	private $_expression_level;
	private $_function;
	private $_parameters;
	private $_code;
	private $_errors;

 	public function __construct()
	{
		$this->_parser = new Pjango_parser();
	}

	private function _next()
	{
		return $this->_parser->yylex();
	}

	private function _code($type, $_ = NULL)
	{
		$this->_code[] = func_get_args();
	}

	private function _error($msg)
	{
		$this->_errors[] = array($this->_parser->lineno, $this->_parser->token_type, $this->_parser->value, $msg);
	}

	private function _print_code()
	{
		if ($this->_errors)
		{
			foreach($this->_errors as $error)
			{
				printf("On line %d, with input '%s': %s\n", $error[0], $error[2], $error[3]);
			}
		}

		$code = Pjango_optimizer::optimize($this->_code);
//		echo "code\n";
//		Pjango_transcriber::debug($this->_code);
//		echo "optimized code\n";
//		Pjango_transcriber::debug($code);
		Pjango_transcriber::transcribe($code);
	}

	public function compile($file)
	{
		$this->_code = array();
		$this->_errors = array();
		$this->_expressions = array();
		$this->_expression_level = -1;

		try
		{
			$continue = $this->_parser->init(file_get_contents($file));
			while($continue)
			{
				switch($this->_parser->token_type)
				{
					case Pjango_parser::T_HTML:
						$this->_code(self::CODE_HTML, $this->_parser->value);
						$continue = $this->_next();
						break;
					case Pjango_parser::T_VARIABLE_START:
						$continue = $this->_parse_variable();
						break;
					case Pjango_parser::T_BLOCK_START:
						$continue = $this->_parse_block();
						break;
					default:
						// Skip to the next token.
						$continue = $this->_next();
				}
			}
			$this->_print_code();
		}
		catch(Exception $e)
		{
			print_r($e);
		}
	}

	private function _parse_expression()
	{
		$code = '';

		$res = FALSE;
		switch($this->_parser->token_type)
		{
			case Pjango_parser::T_LEFT_PAREN:
				$code .= '(';
				$res = $this->_next();
				if (!$res)
				{
					$this->_error('Unexpected EOF');
					return FALSE;
				}

				++$this->_expression_level;
				$this->_expressions[] = '';
				$res = $this->_parse_expression();
				if (!$res)
				{
					return FALSE;
				}
				$code .= array_pop($this->_expressions);
				--$this->_expression_level;
				if (Pjango_parser::T_RIGHT_PAREN != $this->_parser->token_type)
				{
					$this->_error('Expecting )');
					return FALSE;
				}
				$code .= ')';

				$res = $this->_next();
				if (!$res)
				{
					return FALSE;
				}
				break;
			case Pjango_parser::T_ID:
				++$this->_expression_level;
				$this->_expressions[] = '';
				$res = $this->_parse_variable_name();
				if (!$res)
				{
					return FALSE;
				}
				$code .= array_pop($this->_expressions);
				--$this->_expression_level;
				break;
			case Pjango_parser::T_SINGLE_QUOTED_STRING:
			case Pjango_parser::T_DOUBLE_QUOTED_STRING:
			case Pjango_parser::T_NUMBER:
				$code .= $this->_parser->value;
				$res = $this->_next();
				if (!$res)
				{
					$this->_error('Unexpected EOF');
					return FALSE;
				}
				break;
			default:
				$this->_error('Expecting expression');
				return FALSE;
		}

		switch($this->_parser->token_type)
		{
			case Pjango_parser::T_PLUS:
			case Pjango_parser::T_MINUS:
			case Pjango_parser::T_MULTIPLICATION:
			case Pjango_parser::T_DIVISION:
				$code .= $this->_parser->value;

				$res = $this->_next();
				if (!$res)
				{
					$this->_error('Unexpected EOF');
					return FALSE;
				}

				++$this->_expression_level;
				$this->_expressions[] = '';
				$res = $this->_parse_expression();
				if (!$res)
				{
					return FALSE;
				}
				$code .= array_pop($this->_expressions);
				--$this->_expression_level;
				break;
		}

		$this->_expressions[$this->_expression_level] .= $code;

		return $res;
	}

	private function _parse_variable_name()
	{
		if (Pjango_parser::T_ID != $this->_parser->token_type)
		{
			$this->_error('Expecting ID');
			return FALSE;
		}

		$code = '$'.$this->_parser->value;
		$res = $this->_next();
		if (!$res)
		{
			$this->_error('Unexpected EOF');
			return FALSE;
		}

		while($res)
		{
			switch($this->_parser->token_type)
			{
				case Pjango_parser::T_LEFT_BRACKET:
					$code .= '[';

					if (!$this->_next())
					{
						$this->_error('Expecting expression');
						return FALSE;
					}

					++$this->_expression_level;
					$this->_expressions[] = '';
					if (!$this->_parse_expression())
					{
						return FALSE;
					}
					$code .= array_pop($this->_expressions);
					--$this->_expression_level;

					if (Pjango_parser::T_RIGHT_BRACKET != $this->_parser->token_type)
					{
						$this->_error('Expecting ]');
						return FALSE;
					}
					$code .= ']';
					break;
				case Pjango_parser::T_LEFT_BRACE:
					$code .= '{';

					if (!$this->_next())
					{
						$this->_error('Expecting expression');
						return FALSE;
					}

					++$this->_expression_level;
					$this->_expressions[] = '';
					if (!$this->_parse_expression())
					{
						return FALSE;
					}
					$code .= array_pop($this->_expressions);
					--$this->_expression_level;

					if (Pjango_parser::T_RIGHT_BRACE != $this->_parser->token_type)
					{
						$this->_error('Expecting }');
						return FALSE;
					}

					$code .= '}';
					break;
				case Pjango_parser::T_DOT:
				case Pjango_parser::T_ARROW:
					$code .= '->';

					if (!$this->_next())
					{
						$this->_error('Expecting id');
						return FALSE;
					}

					if (Pjango_parser::T_ID != $this->_parser->token_type)
					{
						$this->_error('Expecting id');
						return FALSE;
					}

					$code .= $this->_parser->value;
					break;
				default:
					break(2);
			}
			$res = $this->_next();
		}

		$this->_expressions[$this->_expression_level] .= $code;

		return $res;
	}

	private function _parse_parameters()
	{
		if (Pjango_parser::T_COLON != $this->_parser->token_type)
		{
			return TRUE;
		}

		if (!$this->_next())
		{
			$this->_error('Unexpected EOF, expecting parameter');
			return FALSE;
		}

		++$this->_expression_level;
		$this->_expressions[] = '';
		if (!$this->_parse_expression())
		{
			return FALSE;
		}
		$this->_parameters[] = array_pop($this->_expressions);
		--$this->_expression_level;

		return $this->_parse_parameters();
	}

	private function _parse_function_call()
	{
		if (Pjango_parser::T_ID != $this->_parser->token_type)
		{
			$this->_error('Expecting ID');
			return FALSE;
		}

		$this->_function = $this->_parser->value;
		if (!$this->_next())
		{
			$this->_error('Unexpected EOF');
			return FALSE;
		}

		$this->_parameters = array();
		return $this->_parse_parameters();
	}

	private function _parse_variable()
	{
		if (!$this->_next())
		{
			$this->_error('Unexpected EOF');
			return FALSE;
		}

		++$this->_expression_level;
		$this->_expressions[] = '';
		if (!$this->_parse_variable_name())
		{
			return FALSE;
		}
		$var = array_pop($this->_expressions);
		--$this->_expression_level;

		$functions = array();
		while(Pjango_parser::T_VARIABLE_END != $this->_parser->token_type)
		{
			if (Pjango_parser::T_PIPE != $this->_parser->token_type)
			{
				$this->_error('Expecting |');
				return FALSE;
			}

			if (!$this->_next())
			{
				$this->_error('Unexpected EOF, expecting function');
				return FALSE;
			}

			$this->_function = '';
			if (!$this->_parse_function_call())
			{
				return FALSE;
			}
			$functions[] = array('name' => $this->_function, 'params' => $this->_parameters);
		}

		$this->_code(self::CODE_VARIABLE, $var, $functions);

		return TRUE;
	}

	private function _parse_block()
	{
		return $this->_next();
	}
}

/* End of file src/compiler.php */
