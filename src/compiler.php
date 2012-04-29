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

require(__DIR__.'/lexer.php');
require(__DIR__.'/parser.php');
require(__DIR__.'/optimizer.php');
require(__DIR__.'/transcriber.php');

class Pjango_compiler
{
	const CODE_HTML			= 0;
	const CODE_VARIABLE		= 1;

	const CODE_START_BLOCK	= 2;
	const CODE_END_BLOCK	= 3;

	const CODE_IF			= 4;
	const CODE_ELSE_IF		= 5;
	const CODE_ELSE			= 6;
	const CODE_ENDIF		= 7;

	const CODE_EXTENDS		= 8;
	const CODE_EXTENDS_VAR	= 9;

	const CODE_FOR			= 10;
	const CODE_FOR_EMPTY	= 11;
	const CODE_EMPTY		= 12;
	const CODE_ENDFOR		= 13;

	private $_lexer;
	private $_parser;
	private $_parse_engine;
	private $_lexer_consts;
	private $_code;
	private $_errors;

 	public function __construct()
	{
		$this->_lexer = new Pjango_lexer();
		$this->_parser = new Pjango_parser($this);
		$this->_parse_engine = new parse_engine($this->_parser);

		$reflection = new ReflectionClass('Pjango_lexer');
		$this->_lexer_consts = array();
		foreach($reflection->getConstants() as $const => $value)
		{
			if (0 === strpos($const, 'T_'))
			{
				$this->_lexer_consts[$value] = $const;
			}
		}
	}

	private function _code($type, $_ = NULL)
	{
		$this->_code[] = func_get_args();
	}

	private function _error($msg)
	{
		$this->_errors[] = array($this->_lexer->lineno, $this->_lexer->token_type, $this->_lexer->value, $msg);
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

		try
		{
			$continue = $this->_lexer->init(file_get_contents($file));
			$this->_parse_engine->reset();
			$this->_parser->reset();
			while($continue)
			{
//				echo $this->_lexer->value;
//				var_dump($this->_lexer_consts[$this->_lexer->token_type], $this->_lexer->value);
				$this->_parse_engine->eat($this->_lexer_consts[$this->_lexer->token_type], $this->_lexer->value);
				$continue = $this->_lexer->yylex();
			}
			$this->_parse_engine->eat_eof();
			$this->_print_code();
		}
		catch(parse_error $e)
		{
			print_r($e);
		}
		catch(Exception $e)
		{
			print_r($e);
		}
	}

	public function code_html($html)
	{
		$this->_code(self::CODE_HTML, $html);
	}

	public function code_variable($expression)
	{
		$this->_code(self::CODE_VARIABLE, $expression);
	}

	public function code_if($expression)
	{
		$this->_code(self::CODE_IF, $expression);
	}

	public function code_else_if($expression)
	{
		$this->_code(self::CODE_ELSE_IF, $expression);
	}

	public function code_else()
	{
		$this->_code(self::CODE_ELSE);
	}

	public function code_end_if()
	{
		$this->_code(self::CODE_ENDIF);
	}

	public function code_start_block($name)
	{
		$this->_code(self::CODE_START_BLOCK, $name);
	}

	public function code_end_block($name)
	{
		$this->_code(self::CODE_END_BLOCK, $name);
	}

	public function code_for($id, $expression)
	{
		$this->_code(self::CODE_FOR, $id, $expression);
	}

	public function code_for_empty($id, $expression)
	{
		$this->_code(self::CODE_FOR_EMPTY, $id, $expression);
	}

	public function code_empty()
	{
		$this->_code(self::CODE_EMPTY);
	}

	public function code_end_for()
	{
		$this->_code(self::CODE_ENDFOR);
	}

	public function code_extends($base)
	{
		$this->_code(self::CODE_EXTENDS, $base);
	}

	public function code_extends_var($base)
	{
		$this->_code(self::CODE_EXTENDS_VAR, $base);
	}
}

/* End of file src/compiler.php */
