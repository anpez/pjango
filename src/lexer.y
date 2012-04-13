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

class Pjango_lexer
{
	const T_HTML					= 1;

	const T_VARIABLE_START			= 100;
	const T_VARIABLE_END			= 101;
	const T_BLOCK_START				= 102;
	const T_BLOCK_END				= 103;
	const T_BLOCK					= 104;
	const T_ENDBLOCK				= 105;

	const T_PLUS					= 200;
	const T_MINUS					= 201;
	const T_MULTIPLICATION			= 202;
	const T_DIVISION				= 203;
	const T_MODULUS					= 204;

	const T_AND						= 300;
	const T_OR						= 301;
	const T_XOR						= 302;
	const T_NOT_INX					= 303;
	const T_NOT_IN					= 304;
	const T_NOT						= 305;
	const T_INX						= 306;
	const T_IN						= 307;
	const T_QUESTION				= 308;

	const T_LT						= 400;
	const T_LE						= 401;
	const T_GT						= 402;
	const T_GE						= 403;
	const T_EQ						= 404;
	const T_NE						= 405;
	const T_EX						= 406;
	const T_NX						= 407;

	const T_ID						= 500;
	const T_PIPE					= 501;
	const T_COLON					= 502;
	const T_LEFT_BRACKET			= 503;
	const T_RIGHT_BRACKET			= 504;
	const T_LEFT_BRACE				= 505;
	const T_RIGHT_BRACE				= 506;
	const T_LEFT_PAREN				= 507;
	const T_RIGHT_PAREN				= 508;
	const T_DOT						= 509;
	const T_ARROW					= 510;

	const T_SINGLE_QUOTED_STRING	= 600;
	const T_DOUBLE_QUOTED_STRING	= 601;
	const T_NUMBER					= 602;

	const T_EXTENDS					= 700;
	const T_COMMENT					= 701;
	const T_ENDCOMMENT				= 702;
	const T_IF						= 703;
	const T_ELSE					= 704;
	const T_ENDIF					= 705;

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
		%counter				{$this->_counter}
		%input					{$this->_data}
		%token					{$this->_token}
		%value					{$this->value}
		%line					{$this->lineno}

		// Blocks
		variable_start			= '{{'
		variable_end			= '}}'
		block_start				= '{%'
		block_end				= '%}'
		comment_block			= /\{#(\\#\}|.|[\r\n])*?#\}/

		// Logic operators
		and						= /(&&|and|AND)/
		or						= /(\|\||or|OR)/
		xor						= /(xor|XOR)/
		not_inx					= /(not inx|NOT INX)/
		not_in					= /(not in|NOT IN)/
		not						= /(!|not|NOT)/
		inx						= /(inx|INX)/
		in						= /(in|IN)/

		question				= '?'

		pipe					= '|'
		colon					= ':'
		left_bracket			= '['
		right_bracket			= ']'
		dot						= '.'
		arrow					= '->'
		left_brace				= '{'
		right_brace				= '}'
		left_paren				= '('
		right_paren				= ')'

		// Operators
		plus					= '+'
		minus					= '-'
		multiplication			= '*'
		division				= '/'
		modulus					= '%'

		// Comparators
		lt						= '<'
		le						= '<='
		gt						= '>'
		ge						= '>='
		eq						= '=='
		ne						= /<>|!=/
		ex						= '==='
		nx						= '!=='

		single_quoted_string	= /\x27(\\\\|\\\x27|.|[\r\n])*?\x27/
		double_quoted_string	= /"(\\\\|\\"|.|[\r\n])*?"/

		number					= /[0-9]+(\.[0-9]+)?/

		whitespace				= /[ \t\n\r]+/

		// Blocks
		block					= 'block'
		endblock				= 'endblock'
		extends					= 'extends'
		comment					= 'comment'
		endcomment				= 'endcomment'
		if						= 'if'
		else					= 'else'
		endif					= 'endif'

		id						= @[a-zA-Z_\x7f-\xff][a-zA-Z0-9_\x7f-\xff]*@

		html					= /(\{[^%#\{]|[^\{])+/
		whatever				= /[\x00-\xff]/
	*/

	/*!lex2php
		// In initial state we prompt whatever until something is found.
		%statename INITIAL

		variable_start			{$this->token_type = self::T_VARIABLE_START; $this->yypushstate(self::VARIABLE);}
		block_start				{$this->token_type = self::T_BLOCK_START; $this->yypushstate(self::BLOCK);}
		comment_block			{return FALSE;}

		html					{$this->token_type = self::T_HTML;}
	*/

	/*!lex2php
		// Print variables with filters.
		%statename VARIABLE

		whitespace				{return FALSE;}

		variable_end			{$this->token_type = self::T_VARIABLE_END; $this->yypopstate();}

		// Expressions.
		and						{$this->token_type = self::T_AND;}
		or						{$this->token_type = self::T_OR;}
		xor						{$this->token_type = self::T_XOR;}
		not_inx					{$this->token_type = self::T_NOT_INX;}
		not_in					{$this->token_type = self::T_NOT_IN;}
		not						{$this->token_type = self::T_NOT;}
		inx						{$this->token_type = self::T_INX;}
		in						{$this->token_type = self::T_IN;}

		question				{$this->token_type = self::T_QUESTION;}

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
		modulus					{$this->token_type = self::T_MODULUS;}

		le						{$this->token_type = self::T_LE;}
		lt						{$this->token_type = self::T_LT;}
		ge						{$this->token_type = self::T_GE;}
		gt						{$this->token_type = self::T_GT;}
		ex						{$this->token_type = self::T_EX;}
		nx						{$this->token_type = self::T_NX;}
		eq						{$this->token_type = self::T_EQ;}
		ne						{$this->token_type = self::T_NE;}

		single_quoted_string	{$this->token_type = self::T_SINGLE_QUOTED_STRING;}
		double_quoted_string	{$this->token_type = self::T_DOUBLE_QUOTED_STRING;}
		number					{$this->token_type = self::T_NUMBER;}

		id						{$this->token_type = self::T_ID;}
	*/

	/*!lex2php
		// Code blocks.
		%statename BLOCK

		whitespace				{return FALSE;}

		block_end				{$this->token_type = self::T_BLOCK_END; $this->yypopstate();}

		single_quoted_string	{$this->token_type = self::T_SINGLE_QUOTED_STRING;}
		double_quoted_string	{$this->token_type = self::T_DOUBLE_QUOTED_STRING;}

		block					{$this->token_type = self::T_BLOCK;}
		endblock				{$this->token_type = self::T_ENDBLOCK;}
		extends					{$this->token_type = self::T_EXTENDS;}
		comment					{$this->token_type = self::T_COMMENT;}
		endcomment				{$this->token_type = self::T_ENDCOMMENT;}

		if						{$this->token_type = self::T_IF;}
		else					{$this->token_type = self::T_ELSE;}
		endif					{$this->token_type = self::T_ENDIF;}

		// Expressions.
		and						{$this->token_type = self::T_AND;}
		or						{$this->token_type = self::T_OR;}
		xor						{$this->token_type = self::T_XOR;}
		not_inx					{$this->token_type = self::T_NOT_INX;}
		not_in					{$this->token_type = self::T_NOT_IN;}
		not						{$this->token_type = self::T_NOT;}
		inx						{$this->token_type = self::T_INX;}
		in						{$this->token_type = self::T_IN;}

		question				{$this->token_type = self::T_QUESTION;}

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
		modulus					{$this->token_type = self::T_MODULUS;}

		le						{$this->token_type = self::T_LE;}
		lt						{$this->token_type = self::T_LT;}
		ge						{$this->token_type = self::T_GE;}
		gt						{$this->token_type = self::T_GT;}
		ex						{$this->token_type = self::T_EX;}
		nx						{$this->token_type = self::T_NX;}
		eq						{$this->token_type = self::T_EQ;}
		ne						{$this->token_type = self::T_NE;}

		single_quoted_string	{$this->token_type = self::T_SINGLE_QUOTED_STRING;}
		double_quoted_string	{$this->token_type = self::T_DOUBLE_QUOTED_STRING;}
		number					{$this->token_type = self::T_NUMBER;}

		id						{$this->token_type = self::T_ID;}
	*/
}

/* End of file src/lexer.php */
