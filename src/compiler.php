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
	const QUAD_HTML				= 0;
	const QUAD_VARIABLE_START	= 1;
	const QUAD_VARIABLE_END		= 2;
	const QUAD_VAR				= 3;
	const QUAD_LEFT_BRACKET		= 4;
	const QUAD_RIGHT_BRACKET	= 5;
	const QUAD_DOT				= 6;
	const QUAD_LEFT_BRACE		= 7;
	const QUAD_RIGHT_BRACE		= 8;

	const QUAD_STRING			= 9;
	const QUAD_NUMBER			= 10;
	const QUAD_MEMBER			= 11;
	const QUAD_FUNCTION			= 12;
	const QUAD_PARAMETER_START	= 13;
	const QUAD_PARAMETER_END	= 14;

	const QUAD_EOF				= 20;

	private $_parser;
	private $_quads;
	private $_errors;

 	public function __construct()
	{
		$this->_parser = new Pjango_parser();
	}

	private function _next()
	{
		return $this->_parser->yylex();
	}

	private function _quad($type, $arg1 = NULL, $arg2 = NULL, $res = NULL)
	{
		$this->_quads[] = array($type, $arg1, $arg2, $res);
	}

	private function _error($msg)
	{
		$this->_errors[] = array($this->_parser->lineno, $this->_parser->token_type, $this->_parser->value, $msg);
	}

	private function _print_quads()
	{
		if ($this->_errors)
		{
			foreach($this->_errors as $error)
			{
				printf("On line %d, with input '%s': %s\n", $error[0], $error[2], $error[3]);
			}
		}

		$quads = Pjango_optimizer::optimize($this->_quads);
//		echo "quads\n";
//		Pjango_transcriber::debug($this->_quads);
//		echo "optimized quads\n";
//		Pjango_transcriber::debug($quads);
		Pjango_transcriber::transcribe($quads);
	}

	public function compile($file)
	{
		$this->_quads = array();
		$this->_errors = array();

		try
		{
			$continue = $this->_parser->init(file_get_contents($file));
			while($continue)
			{
				switch($this->_parser->token_type)
				{
					case Pjango_parser::TOKEN_HTML:
						$this->_quad(self::QUAD_HTML, $this->_parser->value);
						$continue = $this->_next();
						break;
					case Pjango_parser::TOKEN_VARIABLE_START:
						$continue = $this->_parse_variable();
						break;
					case Pjango_parser::TOKEN_BLOCK_START:
						$continue = $this->_parse_block();
						break;
					default:
						// Skip to the next token.
						$continue = $this->_next();
				}
			}
			$this->_print_quads();
		}
		catch(Exception $e)
		{
			print_r($e);
		}
	}

	private function _parse_expression()
	{
		switch($this->_parser->token_type)
		{
			case Pjango_parser::TOKEN_ID:
				return $this->_parse_variable_name();
			case Pjango_parser::TOKEN_SINGLE_QUOTED_STRING:
			case Pjango_parser::TOKEN_DOUBLE_QUOTED_STRING:
				$this->_quad(self::QUAD_STRING, $this->_parser->value);
				break;
			case Pjango_parser::TOKEN_NUMBER:
				$this->_quad(self::QUAD_NUMBER, $this->_parser->value);
				break;
			default:
				$this->_error('Expecting expression');
		}
		return $this->_next();
	}

	private function _parse_variable_name()
	{
		if (Pjango_parser::TOKEN_ID != $this->_parser->token_type)
		{
			$this->_error('Expecting ID');
			return FALSE;
		}

		$this->_quad(self::QUAD_VAR, $this->_parser->value);
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
				case Pjango_parser::TOKEN_LEFT_BRACKET:
					$this->_quad(self::QUAD_LEFT_BRACKET);
					if (!$this->_next())
					{
						$this->_error('Expecting expression');
						return FALSE;
					}

					if (!$this->_parse_expression())
					{
						return FALSE;
					}

					if (Pjango_parser::TOKEN_RIGHT_BRACKET != $this->_parser->token_type)
					{
						$this->_error('Expecting ]');
						return FALSE;
					}

					$this->_quad(self::QUAD_RIGHT_BRACKET);
					break;
				case Pjango_parser::TOKEN_LEFT_BRACE:
					$this->_quad(self::QUAD_LEFT_BRACE);
					if (!$this->_next())
					{
						$this->_error('Expecting expression');
						return FALSE;
					}

					if (!$this->_parse_expression())
					{
						return FALSE;
					}

					if (Pjango_parser::TOKEN_RIGHT_BRACE != $this->_parser->token_type)
					{
						$this->_error('Expecting }');
						return FALSE;
					}

					$this->_quad(self::QUAD_RIGHT_BRACE);
					break;
				case Pjango_parser::TOKEN_DOT:
				case Pjango_parser::TOKEN_ARROW:
					$this->_quad(self::QUAD_DOT);
					if (!$this->_next())
					{
						$this->_error('Expecting id');
						return FALSE;
					}

					if (Pjango_parser::TOKEN_ID != $this->_parser->token_type)
					{
						$this->_error('Expecting id');
						return FALSE;
					}

					$this->_quad(self::QUAD_MEMBER, $this->_parser->value);
					break;
				default:
					break(2);
			}
			$res = $this->_next();
		}

		return $res;
	}

	private function _parse_parameters()
	{
		if (Pjango_parser::TOKEN_COLON != $this->_parser->token_type)
		{
			return TRUE;
		}

		if (!$this->_next())
		{
			$this->_error('Unexpected EOF, expecting parameter');
			return FALSE;
		}

		$this->_quad(self::QUAD_PARAMETER_START);

		if (!$this->_parse_expression())
		{
			return FALSE;
		}

		$this->_quad(self::QUAD_PARAMETER_END);

		return $this->_parse_parameters();
	}

	private function _parse_function_call()
	{
		if (Pjango_parser::TOKEN_ID != $this->_parser->token_type)
		{
			$this->_error('Expecting ID');
			return FALSE;
		}

		$this->_quad(self::QUAD_FUNCTION, $this->_parser->value);

		if (!$this->_next())
		{
			$this->_error('Unexpected EOF');
			return FALSE;
		}

		return $this->_parse_parameters();
	}

	private function _parse_variable()
	{
		$this->_quad(self::QUAD_VARIABLE_START);

		if (!$this->_next())
		{
			$this->_error('Unexpected EOF');
			return FALSE;
		}

		if (!$this->_parse_variable_name())
		{
			return FALSE;
		}

		while(Pjango_parser::TOKEN_VARIABLE_END != $this->_parser->token_type)
		{
			if (Pjango_parser::TOKEN_PIPE != $this->_parser->token_type)
			{
				$this->_error('Expecting |');
				return FALSE;
			}

			if (!$this->_next())
			{
				$this->_error('Unexpected EOF, expecting function');
				return FALSE;
			}

			if (!$this->_parse_function_call())
			{
				return FALSE;
			}
		}

		$this->_quad(self::QUAD_VARIABLE_END);

		return TRUE;
	}

	private function _parse_block()
	{
		return $this->_next();
	}
}

/* End of file src/compiler.php */
