<?php

class Pjango_parser
{
	const TOKEN_WHITESPACE = 1;

	const TOKEN_COMMENT_START = 2;
	const TOKEN_COMMENT_TEXT = 3;
	const TOKEN_COMMENT_END = 4;

	const TOKEN_VARIABLE_START = 5;
	const TOKEN_VARIABLE_END = 6;
	const TOKEN_BLOCK_START = 7;
	const TOKEN_BLOCK_END = 8;

	const TOKEN_HTML = 9;

	const TOKEN_ID = 10;
	const TOKEN_PIPE = 11;
	const TOKEN_COLON = 12;

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
		comment_start = '{#'
		comment_end = '#}'
		pipe = '|'
		colon = ':'
		single_quote = /\x27/
		double_quote = '"'

		escaped_single_quote = /\\\x27/
		escaped_double_quote = '\\"'
		escaped_char = /\\[\x00-\xff]/

		whitespace = /[ \t\n\r]+/

		id = @[a-zA-Z_\x7f-\xff][a-zA-Z0-9_\x7f-\xff]*@

		whatever = /[\x00-\xff]/
	*/

	/*!lex2php
		// In initial state we prompt whatever until something is found.
		%statename INITIAL

		whitespace		{$this->token_type = self::TOKEN_WHITESPACE;}

		variable_start	{$this->token_type = self::TOKEN_VARIABLE_START; $this->yypushstate(self::VARIABLE);}
		block_start		{$this->token_type = self::TOKEN_BLOCK_START; $this->yypushstate(self::BLOCK);}
		comment_start	{$this->token_type = self::TOKEN_COMMENT_START; $this->yypushstate(self::COMMENT);}

		whatever		{$this->token_type = self::TOKEN_HTML;}
	*/

	/*!lex2php
		// Skip all comments.
		%statename COMMENT

		comment_end		{$this->token_type = self::TOKEN_COMMENT_END; $this->yypopstate();}
		whatever		{$this->token_type = self::TOKEN_COMMENT_TEXT;}
	*/

	/*!lex2php
		// Print variables with filters.
		%statename VARIABLE

		whitespace		{return FALSE;}

		id				{$this->token_type = self::TOKEN_ID;}
		pipe			{$this->token_type = self::TOKEN_PIPE;}
		colon			{$this->token_type = self::TOKEN_COLON;}

		single_quote	{$this->yypushstate(self::SINGLE_QUOTED_STRING);}
		double_quote	{$this->yypushstate(self::DOUBLE_QUOTED_STRING);}

		variable_end	{$this->yypopstate();}

		whatever		{return FALSE;}
	*/

	/*!lex2php
		// Code blocks.
		%statename BLOCK

		whitespace		{return FALSE;}

		single_quote	{$this->yypushstate(self::SINGLE_QUOTED_STRING);}
		double_quote	{$this->yypushstate(self::DOUBLE_QUOTED_STRING);}

		block_end		{$this->yypopstate();}

		whatever		{return FALSE;}
	*/

	/*!lex2php
		// Single-quoted strings.
		%statename SINGLE_QUOTED_STRING

		escaped_single_quote	{}
		single_quote			{$this->yypopstate();}

		whatever				{return FALSE;}
	*/

	/*!lex2php
		// Double-quoted strings.
		%statename DOUBLE_QUOTED_STRING

		escaped_double_quote	{}
		double_quote			{$this->yypopstate();}

		whatever				{return FALSE;}
	*/
}

/* End of file src/parser.php */
