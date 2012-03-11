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
	public static function debug($quads)
	{
		$reflection = new ReflectionClass('Pjango_compiler');

		$consts = array();
		foreach($reflection->getConstants() as $const => $value)
		{
			if (0 === strpos($const, 'QUAD_'))
			{
				$consts[$value] = $const;
			}
		}
		foreach($quads as $quad)
		{
			printf("%-20s%20s%20s%20s\n", $consts[$quad[0]], var_export($quad[1], TRUE), var_export($quad[2], TRUE), var_export($quad[3], TRUE));
		}
	}

	public static function transcribe($quads)
	{
		$count = count($quads);
		for ($i = 0; $i < $count; ++$i)
		{
			switch($quads[$i][0])
			{
				case Pjango_compiler::QUAD_HTML:
					echo $quads[$i][1];
					break;
				case Pjango_compiler::QUAD_VARIABLE_START:
					$tmp = '';
					$var = '$'.$quads[++$i][1];
					while(++$i < $count)
					{
						switch($quads[$i][0])
						{
							case Pjango_compiler::QUAD_DOT:
								$var .= '->';
								break;
							case Pjango_compiler::QUAD_LEFT_BRACKET:
								$var .= '[';
								break;
							case Pjango_compiler::QUAD_RIGHT_BRACKET:
								$var .= ']';
								break;
							case Pjango_compiler::QUAD_STRING:
							case Pjango_compiler::QUAD_NUMBER:
							case Pjango_compiler::QUAD_MEMBER:
								$var .= $quads[$i][1];
								break;
							case Pjango_compiler::QUAD_VAR:
								$var .= '$'.$quads[$i][1];
								break;
							default:
								break(2);
						}
					}
					$tmp = $var;
					while(Pjango_compiler::QUAD_FUNCTION == $quads[$i][0])
					{
						$tmp = $quads[$i][1].'('.$tmp;
						$params = array();
						while(++$i < $count)
						{
							if (Pjango_compiler::QUAD_PARAMETER_START != $quads[$i][0])
							{
								break;
							}
							++$i;
							$var = '';
							while(Pjango_compiler::QUAD_PARAMETER_END != $quads[$i][0])
							{
								switch($quads[$i][0])
								{
									case Pjango_compiler::QUAD_DOT:
										$var .= '->';
										break;
									case Pjango_compiler::QUAD_LEFT_BRACKET:
										$var .= '[';
										break;
									case Pjango_compiler::QUAD_RIGHT_BRACKET:
										$var .= ']';
										break;
									case Pjango_compiler::QUAD_NUMBER:
									case Pjango_compiler::QUAD_STRING:
									case Pjango_compiler::QUAD_MEMBER:
										$var .= $quads[$i][1];
										break;
									case Pjango_compiler::QUAD_VAR:
										$var .= '$'.$quads[$i][1];
										break;
									default:
										break(2);
								}
								++$i;
							}
							if ('' != $var)
							{
								$params[] = $var;
							}
						}
						if ($params) $tmp .= ', '.implode(', ', $params);
						$tmp .= ')';
					}
					echo $tmp;
					break;
				default:
					echo 'Unexpected quad: ';
					self::debug(array($quads[$i]));
			}
		}
	}
}

/* End of file src/transcriber.php */
