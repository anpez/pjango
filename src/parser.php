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

require(__DIR__.'/base_parser.php');

class Pjango_parser extends Pjango_base_parser
{
	const T_OR = -100;
	const T_XOR = -101;
	const T_AND = -102;
	const T_TERNARY_IF = -103;
	const T_OR_SYMBOL = 4;
	const T_AND_SYMBOL = 5;
	const T_EQ = 6;
	const T_NE = 7;
	const T_EX = 8;
	const T_NX = 9;
	const T_LT = 10;
	const T_LE = 11;
	const T_GT = 12;
	const T_GE = 13;
	const T_IN = 14;
	const T_NOT_IN = 15;
	const T_INX = 16;
	const T_NOT_INX = 17;
	const T_PLUS = 18;
	const T_MINUS = 19;
	const T_MULTIPLICATION = 20;
	const T_DIVISION = 21;
	const T_MODULUS = 22;
	const T_NOT = 23;
	const T_UNARY_MINUS = 24;
	const T_PARENS = 25;
	const T_VARIABLE = 26;
	const T_NUMBER = 27;
	const T_SINGLE_QUOTED_STRING = 28;
	const T_DOUBLE_QUOTED_STRING = 29;
	const T_TRUE = 30;
	const T_FALSE = 31;
	const T_ARRAY = 32;
	const T_BRACED_OBJECT = 33;
	const T_OBJECT = 34;

	private $_compiler;
	private $_escape;

	public function __construct(&$compiler)
	{
		$this->_compiler = & $compiler;
		$this->reset();
	}

	public function reset()
	{
		$this->_escape = array(TRUE);
	}

	protected function _code_line($type, $parameters = array())
	{
		return array('name' => $type, 'parameters' => $parameters);
	}

	protected function _code($program)
	{
		foreach($program as $code)
		{
			call_user_func_array(array($this->_compiler, 'code_'.$code['name']), $code['parameters'] );
		}
	}
}

/* End of file src/parser.php */
