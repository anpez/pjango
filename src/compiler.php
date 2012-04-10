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
	const CODE_HTML		= 0;
	const CODE_VARIABLE	= 1;

	private $_lexer;
	private $_parser;
	private $_lexer_consts;
	private $_code;
	private $_errors;

 	public function __construct()
	{
		$this->_lexer = new Pjango_lexer();
		$this->_parser = new parse_engine(new Pjango_parser($this));

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
			$this->_parser->reset();
			while($continue)
			{
				$this->_parser->eat($this->_lexer_consts[$this->_lexer->token_type], $this->_lexer->value);
				$continue = $this->_lexer->yylex();
			}
			$this->_parser->eat_eof();
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
}

/* End of file src/compiler.php */
