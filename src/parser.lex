<?php

class Pjango_parser
{
	const TOKEN_VARIABLE_START = 1;
	const TOKEN_VARIABLE_END = 2;
	const TOKEN_BLOCK_START = 3;
	const TOKEN_BLOCK_END = 4;

	const TOKEN_HTML = 5;

	const TOKEN_ID = 6;
	const TOKEN_PIPE = 7;
	const TOKEN_COLON = 8;
	const TOKEN_LEFT_BRACKET = 9;
	const TOKEN_RIGHT_BRACKET = 10;
	const TOKEN_LEFT_BRACE = 11;
	const TOKEN_RIGHT_BRACE = 12;
	const TOKEN_DOT = 13;
	const TOKEN_ARROW = 14;

	const TOKEN_SINGLE_QUOTED_STRING = 15;
	const TOKEN_DOUBLE_QUOTED_STRING = 16;
	const TOKEN_NUMBER = 17;

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

		variable_start			{$this->token_type = self::TOKEN_VARIABLE_START; $this->yypushstate(self::VARIABLE);}
		block_start				{$this->token_type = self::TOKEN_BLOCK_START; $this->yypushstate(self::BLOCK);}
		comment					{return FALSE;}

		html					{$this->token_type = self::TOKEN_HTML;}
	*/

	/*!lex2php
		// Print variables with filters.
		%statename VARIABLE

		whitespace				{return FALSE;}

		variable_end			{$this->token_type = self::TOKEN_VARIABLE_END; $this->yypopstate();}

		id						{$this->token_type = self::TOKEN_ID;}
		pipe					{$this->token_type = self::TOKEN_PIPE;}
		colon					{$this->token_type = self::TOKEN_COLON;}
		left_bracket			{$this->token_type = self::TOKEN_LEFT_BRACKET;}
		right_bracket			{$this->token_type = self::TOKEN_RIGHT_BRACKET;}
		dot						{$this->token_type = self::TOKEN_DOT;}
		arrow					{$this->token_type = self::TOKEN_ARROW;}
		left_brace				{$this->token_type = self::TOKEN_LEFT_BRACE;}
		right_brace				{$this->token_type = self::TOKEN_RIGHT_BRACE;}

		single_quoted_string	{$this->token_type = self::TOKEN_SINGLE_QUOTED_STRING;}
		double_quoted_string	{$this->token_type = self::TOKEN_DOUBLE_QUOTED_STRING;}
		number					{$this->token_type = self::TOKEN_NUMBER;}
	*/

	/*!lex2php
		// Code blocks.
		%statename BLOCK

		whitespace				{return FALSE;}

		single_quoted_string	{$this->token_type = self::TOKEN_SINGLE_QUOTED_STRING;}
		double_quoted_string	{$this->token_type = self::TOKEN_DOUBLE_QUOTED_STRING;}

		block_end				{$this->token_type = self::TOKEN_BLOCK_END; $this->yypopstate();}

		whatever				{return FALSE;}
	*/
}

/* End of file src/parser.php */
