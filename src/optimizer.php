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

class Pjango_optimizer
{
	public static function optimize($code)
	{
		$optimized = array();

		$count = count($code);
		for ($i = 0; $i < $count; ++$i)
		{
			$line = $code[$i];
			switch($line[0])
			{
				case Pjango_compiler::CODE_HTML:
					$tmp = $line[1];
					++$i;
					while($i < $count && Pjango_compiler::CODE_HTML == $code[$i][0])
					{
						$tmp .= $code[$i][1];
						++$i;
					}
					--$i;
					$optimized[] = array(Pjango_compiler::CODE_HTML, $tmp, NULL, NULL);
					break;
				default:	// By default, just copy the line as is.
					$optimized[] = $line;
			}
		}

		return $optimized;
	}
}

/* End of file src/optimizer.php */
