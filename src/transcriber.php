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
					echo $code[$i][1];
					break;
				default:
					echo 'Unexpected code: ';
					self::debug(array($code[$i]));
			}
		}
	}
}

/* End of file src/transcriber.php */
