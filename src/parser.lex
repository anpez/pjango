<?php

class Pjango_parser
{
	const T_VARIABLE_START = 1;
	const T_VARIABLE_END = 2;
	const T_BLOCK_START = 3;
	const T_BLOCK_END = 4;

	const T_HTML = 5;

	const T_ID = 6;
	const T_PIPE = 7;
	const T_COLON = 8;
	const T_LEFT_BRACKET = 9;
	const T_RIGHT_BRACKET = 10;
	const T_LEFT_BRACE = 11;
	const T_RIGHT_BRACE = 12;
	const T_LEFT_PAREN = 13;
	const T_RIGHT_PAREN = 14;
	const T_DOT = 15;
	const T_ARROW = 16;

	const T_SINGLE_QUOTED_STRING = 17;
	const T_DOUBLE_QUOTED_STRING = 18;
	const T_NUMBER = 19;

	const T_PLUS = 20;
	const T_MINUS = 21;
	const T_MULTIPLICATION = 22;
	const T_DIVISION = 23;

	private $_counter;
	private $_data;
	private $_token;

	public $value;
	public $lineno;

	public $token_type;

	public function init($data)
	{
		$this->_data = $data;
		$this->token_type = NULL;
		return $this->yylex();
	}

	/*!lex2php
		%counter {$this->_counter}
		%input {$this->_data}
		%token {$this->_token}
		%value {$this->value}
		%line {$this->lineno}

		// Tokens
		variable_start = '{{'
		variable_end = '}}'
		block_start = '{%'
		block_end = '%}'
		comment = /\{#(\\#\}|.|[\r\n])*?#\}/
		pipe = '|'
		colon = ':'
		left_bracket = '['
		right_bracket = ']'
		dot = '.'
		arrow = '->'
		left_brace = '{'
		right_brace = '}'
		left_paren = '('
		right_paren = ')'
		plus = '+'
		minus = '-'
		multiplication = '*'
		division = '/'
		single_quoted_string = /\x27(\\\\|\\\x27|.|[\r\n])*?\x27/
		double_quoted_string = /"(\\\\|\\"|.|[\r\n])*?"/

		number = /[0-9]+(\.[0-9]+)?/

		whitespace = /[ \t\n\r]+/

		id = @[a-zA-Z_\x7f-\xff][a-zA-Z0-9_\x7f-\xff]*@

		html = /(\{[^%#\{]|[^\{])+/
		whatever = /[\x00-\xff]/
	*/

	/*!lex2php
		// In initial state we prompt whatever until something is found.
		%statename INITIAL

		variable_start			{$this->token_type = self::T_VARIABLE_START; $this->yypushstate(self::VARIABLE);}
		block_start				{$this->token_type = self::T_BLOCK_START; $this->yypushstate(self::BLOCK);}
		comment					{return FALSE;}

		html					{$this->token_type = self::T_HTML;}
	*/

	/*!lex2php
		// Print variables with filters.
		%statename VARIABLE

		whitespace				{return FALSE;}

		variable_end			{$this->token_type = self::T_VARIABLE_END; $this->yypopstate();}

		id						{$this->token_type = self::T_ID;}
		pipe					{$this->token_type = self::T_PIPE;}
		colon					{$this->token_type = self::T_COLON;}
		left_bracket			{$this->token_type = self::T_LEFT_BRACKET;}
		right_bracket			{$this->token_type = self::T_RIGHT_BRACKET;}
		dot						{$this->token_type = self::T_DOT;}
		arrow					{$this->token_type = self::T_ARROW;}
		left_brace				{$this->token_type = self::T_LEFT_BRACE;}
		right_brace				{$this->token_type = self::T_RIGHT_BRACE;}
		left_paren				{$this->token_type = self::T_LEFT_PAREN;}
		right_paren				{$this->token_type = self::T_RIGHT_PAREN;}
		plus					{$this->token_type = self::T_PLUS;}
		minus					{$this->token_type = self::T_MINUS;}
		multiplication			{$this->token_type = self::T_MULTIPLICATION;}
		division				{$this->token_type = self::T_DIVISION;}

		single_quoted_string	{$this->token_type = self::T_SINGLE_QUOTED_STRING;}
		double_quoted_string	{$this->token_type = self::T_DOUBLE_QUOTED_STRING;}
		number					{$this->token_type = self::T_NUMBER;}
	*/

	/*!lex2php
		// Code blocks.
		%statename BLOCK

		whitespace				{return FALSE;}

		single_quoted_string	{$this->token_type = self::T_SINGLE_QUOTED_STRING;}
		double_quoted_string	{$this->token_type = self::T_DOUBLE_QUOTED_STRING;}

		block_end				{$this->token_type = self::T_BLOCK_END; $this->yypopstate();}

		whatever				{return FALSE;}
	*/
}

/* End of file src/parser.php */
