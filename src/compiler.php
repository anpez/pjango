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

class Pjango_compiler
{
	private $_parser;

	private function _skip_whitespaces()
	{
		while($res = $this->_parser->yylex())
		{
			if (Pjango_parser::TOKEN_WHITESPACE != $this->_parser->token_type)
			{
				break;
			}
		}
		return $res;
	}

	public function __construct()
	{
		$this->_parser = new Pjango_parser();
	}

	public function compile($file)
	{
		$this->_parser->init(file_get_contents($file));
		try
		{
			$continue = $this->_parser->yylex();
			while($continue)
			{
				switch($this->_parser->token_type)
				{
					case Pjango_parser::TOKEN_WHITESPACE:
						echo $this->_parser->value;
						$continue = $this->_parser->yylex();
						break;
					case Pjango_parser::TOKEN_HTML:
						echo $this->_parser->value;
						$continue = $this->_parser->yylex();
						break;
					case Pjango_parser::TOKEN_VARIABLE_START:
						$continue = $this->_variable();
						break;
					case Pjango_parser::TOKEN_BLOCK_START:
						$continue = $this->_block();
						break;
					default:
						// Skip to the next token.
						$continue = $this->_parser->yylex();
				}
			}
		}
		catch(Exception $e)
		{
			print_r($e);
		}
	}

	private function _variable()
	{
		if (!$this->_skip_whitespaces())
		{
			// Error.
			return FALSE;
		}

		if (Pjango_parser::TOKEN_ID != $this->_parser->token_type)
		{
			// Error.
			echo 'ERROR: expecting ID';
			return TRUE;
		}

		$var = $this->_parser->value;
		if (!$this->_skip_whitespaces())
		{
			// Error.
			return FALSE;
		}

		if (Pjango_parser::TOKEN_VARIABLE_END == $this->_parser->token_type)
		{
			return TRUE;
		}
		if (Pjango_parser::TOKEN_PIPE != $this->_parser->token_type)
		{
			// Error.
			echo 'ERROR: expecting |';
			return TRUE;
		}

		return $res;
	}

	private function _block()
	{
		return $this->_parser->yylex();
	}
}

/* End of file src/compiler.php */
