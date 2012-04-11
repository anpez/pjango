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

	protected function _parse_filtered_expression($expression, $filters)
	{
		foreach($filters as $filter)
		{
			array_unshift($filter['parameters'], $expression);
			$expression = $filter['name'].'('.implode(', ', $filter['parameters']).')';
		}

		return $expression;
	}
}

/* End of file src/parser.php */
