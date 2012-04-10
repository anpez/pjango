<?php

require(__DIR__.'/base_parser.php');

class Pjango_parser extends Pjango_base_parser
{
	private $_compiler;

	public function __construct(&$compiler)
	{
		$this->_compiler = & $compiler;
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
