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

class Pjango_transcriber
{
	public static function debug($code)
	{
		$reflection = new ReflectionClass('Pjango_compiler');

		$consts = array();
		foreach($reflection->getConstants() as $const => $value)
		{
			if (0 === strpos($const, 'CODE_'))
			{
				$consts[$value] = $const;
			}
		}
		foreach($code as $line)
		{
			printf("%-20s%20s%20s%20s\n", $consts[$line[0]], var_export($line[1], TRUE), var_export($line[2], TRUE), var_export($line[3], TRUE));
		}
	}

	public static function transcribe($code)
	{
		$count = count($code);
		for ($i = 0; $i < $count; ++$i)
		{
			switch($code[$i][0])
			{
				case Pjango_compiler::CODE_HTML:
					echo $code[$i][1];
					break;
				case Pjango_compiler::CODE_VARIABLE:
					echo self::_transcribe_filtered_expression($code[$i][1]);
					break;
				case Pjango_compiler::CODE_IF:
					echo 'if ('.self::_transcribe_filtered_expression($code[$i][1]).') {';
					break;
				case Pjango_compiler::CODE_ELSE_IF:
					echo '} else if ('.self::_transcribe_filtered_expression($code[$i][1]).') {';
					break;
				case Pjango_compiler::CODE_ELSE:
					echo '} else {';
					break;
				case Pjango_compiler::CODE_ENDIF:
					echo '}';
					break;
				case Pjango_compiler::CODE_START_BLOCK:
					echo 'function block_'.$code[$i][1].'() {';
					break;
				case Pjango_compiler::CODE_END_BLOCK:
					echo '}';
					break;
				case Pjango_compiler::CODE_FOR:
					$tmp = '$'.$code[$i][1][0];
					if (isset($code[$i][1][1])) $tmp .= '=>$'.$code[$i][1][1];

					echo 'foreach('.self::_transcribe_filtered_expression($code[$i][2]).' as '.$tmp.') {';
					break;
				case Pjango_compiler::CODE_FOR_EMPTY:
					$tmp = '$'.$code[$i][1][0];
					if (isset($code[$i][1][1])) $tmp .= '=>$'.$code[$i][1][1];

					echo '$_tmp = '.self::_transcribe_filtered_expression($code[$i][2]).'; if ($_tmp) {foreach($_tmp as '.$tmp.') {';
					break;
				case Pjango_compiler::CODE_EMPTY:
					echo '} else {';
					break;
				case Pjango_compiler::CODE_ENDFOR:
					echo '}';
					break;
				default:
					echo 'Unexpected code: ';
					self::debug(array($code[$i]));
			}
		}
	}

	private static function _transcribe_filtered_expression($filtered_expression)
	{
		$expression = self::_transcribe_expression($filtered_expression[0]);
		$filters = $filtered_expression[1];

		foreach($filters as $filter)
		{
			$parameters = array();
			foreach($filter['parameters'] as $param)
			{
				$parameters[] = self::_transcribe_expression($param);
			}
			array_unshift($parameters, $expression);
			$expression = $filter['name'].'('.implode(', ', $parameters).')';
		}

		return $expression;
	}

	private static function _transcribe_expression(&$expression)
	{
		$value = reset($expression);
		$key = key($expression);
		switch($key)
		{
			case Pjango_parser::T_OR:
				return self::_transcribe_expression($value[0]).' OR '.self::_transcribe_expression($value[1]);
			case Pjango_parser::T_XOR:
				return self::_transcribe_expression($value[0]).' XOR '.self::_transcribe_expression($value[1]);
			case Pjango_parser::T_AND:
				return self::_transcribe_expression($value[0]).' AND '.self::_transcribe_expression($value[1]);
			case Pjango_parser::T_TERNARY_IF:
				return self::_transcribe_expression($value[0]).'?'.self::_transcribe_expression($value[1]).':'.self::_transcribe_expression($value[2]);
			case Pjango_parser::T_OR_SYMBOL:
				return self::_transcribe_expression($value[0]).'||'.self::_transcribe_expression($value[1]);
			case Pjango_parser::T_AND_SYMBOL:
				return self::_transcribe_expression($value[0]).'&&'.self::_transcribe_expression($value[1]);
			case Pjango_parser::T_EQ:
				return self::_transcribe_expression($value[0]).'=='.self::_transcribe_expression($value[1]);
			case Pjango_parser::T_NE:
				return self::_transcribe_expression($value[0]).'!='.self::_transcribe_expression($value[1]);
			case Pjango_parser::T_EX:
				return self::_transcribe_expression($value[0]).'==='.self::_transcribe_expression($value[1]);
			case Pjango_parser::T_NX:
				return self::_transcribe_expression($value[0]).'!=='.self::_transcribe_expression($value[1]);
			case Pjango_parser::T_LT:
				return self::_transcribe_expression($value[0]).'<'.self::_transcribe_expression($value[1]);
			case Pjango_parser::T_LE:
				return self::_transcribe_expression($value[0]).'<='.self::_transcribe_expression($value[1]);
			case Pjango_parser::T_GT:
				return self::_transcribe_expression($value[0]).'>'.self::_transcribe_expression($value[1]);
			case Pjango_parser::T_GE:
				return self::_transcribe_expression($value[0]).'>='.self::_transcribe_expression($value[1]);
			case Pjango_parser::T_IN:
				// TODO: What happens if 'haystack' contains function calls? Optimize!
				$needle = self::_transcribe_expression($value[0]);
				$haystack = self::_transcribe_expression($value[1]);
				return '(('.$haystack.'===(array)'.$haystack.')?in_array('.$needle.', '.$haystack.'):FALSE!==strpos('.$haystack.', '.$needle.'))';
			case Pjango_parser::T_NOT_IN:
				// TODO: What happens if 'haystack' contains function calls? Optimize!
				$needle = self::_transcribe_expression($value[0]);
				$haystack = self::_transcribe_expression($value[1]);
				return '(('.$haystack.'===(array)'.$haystack.')?!in_array('.$needle.', '.$haystack.'):FALSE===strpos('.$haystack.', '.$needle.'))';
			case Pjango_parser::T_INX:
				// TODO: What happens if 'haystack' contains function calls? Optimize!
				$needle = self::_transcribe_expression($value[0]);
				$haystack = self::_transcribe_expression($value[1]);
				return '(('.$haystack.'===(array)'.$haystack.')?in_array('.$needle.', '.$haystack.', TRUE):FALSE!==strpos('.$haystack.', '.$needle.'))';
			case Pjango_parser::T_NOT_INX:
				// TODO: What happens if 'haystack' contains function calls? Optimize!
				$needle = self::_transcribe_expression($value[0]);
				$haystack = self::_transcribe_expression($value[1]);
				return '(('.$haystack.'===(array)'.$haystack.')?!in_array('.$needle.', '.$haystack.', TRUE):FALSE===strpos('.$haystack.', '.$needle.'))';
			case Pjango_parser::T_PLUS:
				return self::_transcribe_expression($value[0]).'+'.self::_transcribe_expression($value[1]);
			case Pjango_parser::T_MINUS:
				return self::_transcribe_expression($value[0]).'-'.self::_transcribe_expression($value[1]);
			case Pjango_parser::T_MULTIPLICATION:
				return self::_transcribe_expression($value[0]).'*'.self::_transcribe_expression($value[1]);
			case Pjango_parser::T_DIVISION:
				return self::_transcribe_expression($value[0]).'/'.self::_transcribe_expression($value[1]);
			case Pjango_parser::T_MODULUS:
				return self::_transcribe_expression($value[0]).'%'.self::_transcribe_expression($value[1]);
			case Pjango_parser::T_NOT:
				return '!'.self::_transcribe_expression($value);
			case Pjango_parser::T_UNARY_MINUS:
				return '-'.self::_transcribe_expression($value);
			case Pjango_parser::T_PARENS:
				return '('.self::_transcribe_filtered_expression($value).')';
			case Pjango_parser::T_VARIABLE:
				$code = '$'.$value[0];
				foreach($value[1] as $obj)
				{
					$code .= self::_transcribe_expression($obj);
				}
				return $code;
			case Pjango_parser::T_NUMBER:
				return $value;
			case Pjango_parser::T_SINGLE_QUOTED_STRING:
				return $value;
			case Pjango_parser::T_DOUBLE_QUOTED_STRING:
				return $value;
			case Pjango_parser::T_TRUE:
				return 'TRUE';
			case Pjango_parser::T_FALSE:
				return 'FALSE';
			case Pjango_parser::T_ARRAY:
				return '['.self:: _transcribe_filtered_expression($value).']';
			case Pjango_parser::T_BRACED_OBJECT:
				return '->{'.self:: _transcribe_filtered_expression($value).'}';
			case Pjango_parser::T_OBJECT:
				return '->'.$value;
		}
	}
}

/* End of file src/transcriber.php */
