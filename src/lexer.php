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

	
    private $_yy_state = 1;
    private $_yy_stack = array();

    function yylex()
    {
        return $this->{'yylex' . $this->_yy_state}();
    }

    function yypushstate($state)
    {
        array_push($this->_yy_stack, $this->_yy_state);
        $this->_yy_state = $state;
    }

    function yypopstate()
    {
        $this->_yy_state = array_pop($this->_yy_stack);
    }

    function yybegin($state)
    {
        $this->_yy_state = $state;
    }



	
    function yylex1()
    {
        $tokenMap = array (
              1 => 0,
              2 => 0,
              3 => 1,
              5 => 1,
            );
        if ($this->_counter >= strlen($this->_data)) {
            return false; // end of input
        }
        $yy_global_pattern = '/\G(\\{\\{)|\G(\\{%)|\G(\\{#(\\\\#\\}|.|[\r\n])*?#\\})|\G((\\{[^%#{]|[^{])+)/';

        do {
            if (preg_match($yy_global_pattern,$this->_data, $yymatches, null, $this->_counter)) {
                $yysubmatches = $yymatches;
                $yymatches = array_filter($yymatches, 'strlen'); // remove empty sub-patterns
                if (!count($yymatches)) {
                    throw new Exception('Error: lexing failed because a rule matched' .
                        ' an empty string.  Input "' . substr($this->_data,
                        $this->_counter, 5) . '... state INITIAL');
                }
                next($yymatches); // skip global match
                $this->_token = key($yymatches); // token number
                if ($tokenMap[$this->_token]) {
                    // extract sub-patterns for passing to lex function
                    $yysubmatches = array_slice($yysubmatches, $this->_token + 1,
                        $tokenMap[$this->_token]);
                } else {
                    $yysubmatches = array();
                }
                $this->value = current($yymatches); // token value
                $r = $this->{'yy_r1_' . $this->_token}($yysubmatches);
                if ($r === null) {
                    $this->_counter += strlen($this->value);
                    $this->lineno += substr_count($this->value, "\n");
                    // accept this token
                    return true;
                } elseif ($r === true) {
                    // we have changed state
                    // process this token in the new state
                    return $this->yylex();
                } elseif ($r === false) {
                    $this->_counter += strlen($this->value);
                    $this->lineno += substr_count($this->value, "\n");
                    if ($this->_counter >= strlen($this->_data)) {
                        return false; // end of input
                    }
                    // skip this token
                    continue;
                } else {
                    $yy_yymore_patterns = array(
        1 => array(0, "\G(\\{%)|\G(\\{#(\\\\#\\}|.|[\r\n])*?#\\})|\G((\\{[^%#{]|[^{])+)"),
        2 => array(0, "\G(\\{#(\\\\#\\}|.|[\r\n])*?#\\})|\G((\\{[^%#{]|[^{])+)"),
        3 => array(1, "\G((\\{[^%#{]|[^{])+)"),
        5 => array(2, ""),
    );

                    // yymore is needed
                    do {
                        if (!strlen($yy_yymore_patterns[$this->_token][1])) {
                            throw new Exception('cannot do yymore for the last token');
                        }
                        $yysubmatches = array();
                        if (preg_match('/' . $yy_yymore_patterns[$this->_token][1] . '/',
                              $this->_data, $yymatches, null, $this->_counter)) {
                            $yysubmatches = $yymatches;
                            $yymatches = array_filter($yymatches, 'strlen'); // remove empty sub-patterns
                            next($yymatches); // skip global match
                            $this->_token += key($yymatches) + $yy_yymore_patterns[$this->_token][0]; // token number
                            $this->value = current($yymatches); // token value
                            $this->lineno = substr_count($this->value, "\n");
                            if ($tokenMap[$this->_token]) {
                                // extract sub-patterns for passing to lex function
                                $yysubmatches = array_slice($yysubmatches, $this->_token + 1,
                                    $tokenMap[$this->_token]);
                            } else {
                                $yysubmatches = array();
                            }
                        }
                        $r = $this->{'yy_r1_' . $this->_token}($yysubmatches);
                    } while ($r !== null && !is_bool($r));
                    if ($r === true) {
                        // we have changed state
                        // process this token in the new state
                        return $this->yylex();
                    } elseif ($r === false) {
                        $this->_counter += strlen($this->value);
                        $this->lineno += substr_count($this->value, "\n");
                        if ($this->_counter >= strlen($this->_data)) {
                            return false; // end of input
                        }
                        // skip this token
                        continue;
                    } else {
                        // accept
                        $this->_counter += strlen($this->value);
                        $this->lineno += substr_count($this->value, "\n");
                        return true;
                    }
                }
            } else {
                throw new Exception('Unexpected input at line' . $this->lineno .
                    ': ' . $this->_data[$this->_counter]);
            }
            break;
        } while (true);

    } // end function


    const INITIAL = 1;
    function yy_r1_1($yy_subpatterns)
    {
$this->token_type = self::T_VARIABLE_START; $this->yypushstate(self::VARIABLE);    }
    function yy_r1_2($yy_subpatterns)
    {
$this->token_type = self::T_BLOCK_START; $this->yypushstate(self::BLOCK);    }
    function yy_r1_3($yy_subpatterns)
    {
return FALSE;    }
    function yy_r1_5($yy_subpatterns)
    {
$this->token_type = self::T_HTML;    }


	
    function yylex2()
    {
        $tokenMap = array (
              1 => 0,
              2 => 0,
              3 => 1,
              5 => 1,
              7 => 1,
              9 => 1,
              11 => 1,
              13 => 1,
              15 => 1,
              17 => 1,
              19 => 0,
              20 => 0,
              21 => 0,
              22 => 0,
              23 => 0,
              24 => 0,
              25 => 0,
              26 => 0,
              27 => 0,
              28 => 0,
              29 => 0,
              30 => 0,
              31 => 0,
              32 => 0,
              33 => 0,
              34 => 0,
              35 => 0,
              36 => 0,
              37 => 0,
              38 => 0,
              39 => 0,
              40 => 0,
              41 => 0,
              42 => 0,
              43 => 1,
              45 => 1,
              47 => 1,
              49 => 0,
            );
        if ($this->_counter >= strlen($this->_data)) {
            return false; // end of input
        }
        $yy_global_pattern = '/\G([ \t\n\r]+)|\G(\\}\\})|\G((&&|and|AND))|\G((\\|\\||or|OR))|\G((xor|XOR))|\G((not inx|NOT INX))|\G((not in|NOT IN))|\G((!|not|NOT))|\G((inx|INX))|\G((in|IN))|\G(\\?)|\G(\\|)|\G(:)|\G(\\[)|\G(\\])|\G(\\.)|\G(->)|\G(\\{)|\G(\\})|\G(\\()|\G(\\))|\G(\\+)|\G(-)|\G(\\*)|\G(\/)|\G(%)|\G(<=)|\G(<)|\G(>=)|\G(>)|\G(===)|\G(!==)|\G(==)|\G(<>|!=)|\G(\x27(\\\\\\\\|\\\\\x27|.|[\r\n])*?\x27)|\G(\"(\\\\\\\\|\\\\\"|.|[\r\n])*?\")|\G([0-9]+(\\.[0-9]+)?)|\G([a-zA-Z_\x7f-\xff][a-zA-Z0-9_\x7f-\xff]*)/';

        do {
            if (preg_match($yy_global_pattern,$this->_data, $yymatches, null, $this->_counter)) {
                $yysubmatches = $yymatches;
                $yymatches = array_filter($yymatches, 'strlen'); // remove empty sub-patterns
                if (!count($yymatches)) {
                    throw new Exception('Error: lexing failed because a rule matched' .
                        ' an empty string.  Input "' . substr($this->_data,
                        $this->_counter, 5) . '... state VARIABLE');
                }
                next($yymatches); // skip global match
                $this->_token = key($yymatches); // token number
                if ($tokenMap[$this->_token]) {
                    // extract sub-patterns for passing to lex function
                    $yysubmatches = array_slice($yysubmatches, $this->_token + 1,
                        $tokenMap[$this->_token]);
                } else {
                    $yysubmatches = array();
                }
                $this->value = current($yymatches); // token value
                $r = $this->{'yy_r2_' . $this->_token}($yysubmatches);
                if ($r === null) {
                    $this->_counter += strlen($this->value);
                    $this->lineno += substr_count($this->value, "\n");
                    // accept this token
                    return true;
                } elseif ($r === true) {
                    // we have changed state
                    // process this token in the new state
                    return $this->yylex();
                } elseif ($r === false) {
                    $this->_counter += strlen($this->value);
                    $this->lineno += substr_count($this->value, "\n");
                    if ($this->_counter >= strlen($this->_data)) {
                        return false; // end of input
                    }
                    // skip this token
                    continue;
                } else {
                    $yy_yymore_patterns = array(
        1 => array(0, "\G(\\}\\})|\G((&&|and|AND))|\G((\\|\\||or|OR))|\G((xor|XOR))|\G((not inx|NOT INX))|\G((not in|NOT IN))|\G((!|not|NOT))|\G((inx|INX))|\G((in|IN))|\G(\\?)|\G(\\|)|\G(:)|\G(\\[)|\G(\\])|\G(\\.)|\G(->)|\G(\\{)|\G(\\})|\G(\\()|\G(\\))|\G(\\+)|\G(-)|\G(\\*)|\G(\/)|\G(%)|\G(<=)|\G(<)|\G(>=)|\G(>)|\G(===)|\G(!==)|\G(==)|\G(<>|!=)|\G(\x27(\\\\\\\\|\\\\\x27|.|[\r\n])*?\x27)|\G(\"(\\\\\\\\|\\\\\"|.|[\r\n])*?\")|\G([0-9]+(\\.[0-9]+)?)|\G([a-zA-Z_\x7f-\xff][a-zA-Z0-9_\x7f-\xff]*)"),
        2 => array(0, "\G((&&|and|AND))|\G((\\|\\||or|OR))|\G((xor|XOR))|\G((not inx|NOT INX))|\G((not in|NOT IN))|\G((!|not|NOT))|\G((inx|INX))|\G((in|IN))|\G(\\?)|\G(\\|)|\G(:)|\G(\\[)|\G(\\])|\G(\\.)|\G(->)|\G(\\{)|\G(\\})|\G(\\()|\G(\\))|\G(\\+)|\G(-)|\G(\\*)|\G(\/)|\G(%)|\G(<=)|\G(<)|\G(>=)|\G(>)|\G(===)|\G(!==)|\G(==)|\G(<>|!=)|\G(\x27(\\\\\\\\|\\\\\x27|.|[\r\n])*?\x27)|\G(\"(\\\\\\\\|\\\\\"|.|[\r\n])*?\")|\G([0-9]+(\\.[0-9]+)?)|\G([a-zA-Z_\x7f-\xff][a-zA-Z0-9_\x7f-\xff]*)"),
        3 => array(1, "\G((\\|\\||or|OR))|\G((xor|XOR))|\G((not inx|NOT INX))|\G((not in|NOT IN))|\G((!|not|NOT))|\G((inx|INX))|\G((in|IN))|\G(\\?)|\G(\\|)|\G(:)|\G(\\[)|\G(\\])|\G(\\.)|\G(->)|\G(\\{)|\G(\\})|\G(\\()|\G(\\))|\G(\\+)|\G(-)|\G(\\*)|\G(\/)|\G(%)|\G(<=)|\G(<)|\G(>=)|\G(>)|\G(===)|\G(!==)|\G(==)|\G(<>|!=)|\G(\x27(\\\\\\\\|\\\\\x27|.|[\r\n])*?\x27)|\G(\"(\\\\\\\\|\\\\\"|.|[\r\n])*?\")|\G([0-9]+(\\.[0-9]+)?)|\G([a-zA-Z_\x7f-\xff][a-zA-Z0-9_\x7f-\xff]*)"),
        5 => array(2, "\G((xor|XOR))|\G((not inx|NOT INX))|\G((not in|NOT IN))|\G((!|not|NOT))|\G((inx|INX))|\G((in|IN))|\G(\\?)|\G(\\|)|\G(:)|\G(\\[)|\G(\\])|\G(\\.)|\G(->)|\G(\\{)|\G(\\})|\G(\\()|\G(\\))|\G(\\+)|\G(-)|\G(\\*)|\G(\/)|\G(%)|\G(<=)|\G(<)|\G(>=)|\G(>)|\G(===)|\G(!==)|\G(==)|\G(<>|!=)|\G(\x27(\\\\\\\\|\\\\\x27|.|[\r\n])*?\x27)|\G(\"(\\\\\\\\|\\\\\"|.|[\r\n])*?\")|\G([0-9]+(\\.[0-9]+)?)|\G([a-zA-Z_\x7f-\xff][a-zA-Z0-9_\x7f-\xff]*)"),
        7 => array(3, "\G((not inx|NOT INX))|\G((not in|NOT IN))|\G((!|not|NOT))|\G((inx|INX))|\G((in|IN))|\G(\\?)|\G(\\|)|\G(:)|\G(\\[)|\G(\\])|\G(\\.)|\G(->)|\G(\\{)|\G(\\})|\G(\\()|\G(\\))|\G(\\+)|\G(-)|\G(\\*)|\G(\/)|\G(%)|\G(<=)|\G(<)|\G(>=)|\G(>)|\G(===)|\G(!==)|\G(==)|\G(<>|!=)|\G(\x27(\\\\\\\\|\\\\\x27|.|[\r\n])*?\x27)|\G(\"(\\\\\\\\|\\\\\"|.|[\r\n])*?\")|\G([0-9]+(\\.[0-9]+)?)|\G([a-zA-Z_\x7f-\xff][a-zA-Z0-9_\x7f-\xff]*)"),
        9 => array(4, "\G((not in|NOT IN))|\G((!|not|NOT))|\G((inx|INX))|\G((in|IN))|\G(\\?)|\G(\\|)|\G(:)|\G(\\[)|\G(\\])|\G(\\.)|\G(->)|\G(\\{)|\G(\\})|\G(\\()|\G(\\))|\G(\\+)|\G(-)|\G(\\*)|\G(\/)|\G(%)|\G(<=)|\G(<)|\G(>=)|\G(>)|\G(===)|\G(!==)|\G(==)|\G(<>|!=)|\G(\x27(\\\\\\\\|\\\\\x27|.|[\r\n])*?\x27)|\G(\"(\\\\\\\\|\\\\\"|.|[\r\n])*?\")|\G([0-9]+(\\.[0-9]+)?)|\G([a-zA-Z_\x7f-\xff][a-zA-Z0-9_\x7f-\xff]*)"),
        11 => array(5, "\G((!|not|NOT))|\G((inx|INX))|\G((in|IN))|\G(\\?)|\G(\\|)|\G(:)|\G(\\[)|\G(\\])|\G(\\.)|\G(->)|\G(\\{)|\G(\\})|\G(\\()|\G(\\))|\G(\\+)|\G(-)|\G(\\*)|\G(\/)|\G(%)|\G(<=)|\G(<)|\G(>=)|\G(>)|\G(===)|\G(!==)|\G(==)|\G(<>|!=)|\G(\x27(\\\\\\\\|\\\\\x27|.|[\r\n])*?\x27)|\G(\"(\\\\\\\\|\\\\\"|.|[\r\n])*?\")|\G([0-9]+(\\.[0-9]+)?)|\G([a-zA-Z_\x7f-\xff][a-zA-Z0-9_\x7f-\xff]*)"),
        13 => array(6, "\G((inx|INX))|\G((in|IN))|\G(\\?)|\G(\\|)|\G(:)|\G(\\[)|\G(\\])|\G(\\.)|\G(->)|\G(\\{)|\G(\\})|\G(\\()|\G(\\))|\G(\\+)|\G(-)|\G(\\*)|\G(\/)|\G(%)|\G(<=)|\G(<)|\G(>=)|\G(>)|\G(===)|\G(!==)|\G(==)|\G(<>|!=)|\G(\x27(\\\\\\\\|\\\\\x27|.|[\r\n])*?\x27)|\G(\"(\\\\\\\\|\\\\\"|.|[\r\n])*?\")|\G([0-9]+(\\.[0-9]+)?)|\G([a-zA-Z_\x7f-\xff][a-zA-Z0-9_\x7f-\xff]*)"),
        15 => array(7, "\G((in|IN))|\G(\\?)|\G(\\|)|\G(:)|\G(\\[)|\G(\\])|\G(\\.)|\G(->)|\G(\\{)|\G(\\})|\G(\\()|\G(\\))|\G(\\+)|\G(-)|\G(\\*)|\G(\/)|\G(%)|\G(<=)|\G(<)|\G(>=)|\G(>)|\G(===)|\G(!==)|\G(==)|\G(<>|!=)|\G(\x27(\\\\\\\\|\\\\\x27|.|[\r\n])*?\x27)|\G(\"(\\\\\\\\|\\\\\"|.|[\r\n])*?\")|\G([0-9]+(\\.[0-9]+)?)|\G([a-zA-Z_\x7f-\xff][a-zA-Z0-9_\x7f-\xff]*)"),
        17 => array(8, "\G(\\?)|\G(\\|)|\G(:)|\G(\\[)|\G(\\])|\G(\\.)|\G(->)|\G(\\{)|\G(\\})|\G(\\()|\G(\\))|\G(\\+)|\G(-)|\G(\\*)|\G(\/)|\G(%)|\G(<=)|\G(<)|\G(>=)|\G(>)|\G(===)|\G(!==)|\G(==)|\G(<>|!=)|\G(\x27(\\\\\\\\|\\\\\x27|.|[\r\n])*?\x27)|\G(\"(\\\\\\\\|\\\\\"|.|[\r\n])*?\")|\G([0-9]+(\\.[0-9]+)?)|\G([a-zA-Z_\x7f-\xff][a-zA-Z0-9_\x7f-\xff]*)"),
        19 => array(8, "\G(\\|)|\G(:)|\G(\\[)|\G(\\])|\G(\\.)|\G(->)|\G(\\{)|\G(\\})|\G(\\()|\G(\\))|\G(\\+)|\G(-)|\G(\\*)|\G(\/)|\G(%)|\G(<=)|\G(<)|\G(>=)|\G(>)|\G(===)|\G(!==)|\G(==)|\G(<>|!=)|\G(\x27(\\\\\\\\|\\\\\x27|.|[\r\n])*?\x27)|\G(\"(\\\\\\\\|\\\\\"|.|[\r\n])*?\")|\G([0-9]+(\\.[0-9]+)?)|\G([a-zA-Z_\x7f-\xff][a-zA-Z0-9_\x7f-\xff]*)"),
        20 => array(8, "\G(:)|\G(\\[)|\G(\\])|\G(\\.)|\G(->)|\G(\\{)|\G(\\})|\G(\\()|\G(\\))|\G(\\+)|\G(-)|\G(\\*)|\G(\/)|\G(%)|\G(<=)|\G(<)|\G(>=)|\G(>)|\G(===)|\G(!==)|\G(==)|\G(<>|!=)|\G(\x27(\\\\\\\\|\\\\\x27|.|[\r\n])*?\x27)|\G(\"(\\\\\\\\|\\\\\"|.|[\r\n])*?\")|\G([0-9]+(\\.[0-9]+)?)|\G([a-zA-Z_\x7f-\xff][a-zA-Z0-9_\x7f-\xff]*)"),
        21 => array(8, "\G(\\[)|\G(\\])|\G(\\.)|\G(->)|\G(\\{)|\G(\\})|\G(\\()|\G(\\))|\G(\\+)|\G(-)|\G(\\*)|\G(\/)|\G(%)|\G(<=)|\G(<)|\G(>=)|\G(>)|\G(===)|\G(!==)|\G(==)|\G(<>|!=)|\G(\x27(\\\\\\\\|\\\\\x27|.|[\r\n])*?\x27)|\G(\"(\\\\\\\\|\\\\\"|.|[\r\n])*?\")|\G([0-9]+(\\.[0-9]+)?)|\G([a-zA-Z_\x7f-\xff][a-zA-Z0-9_\x7f-\xff]*)"),
        22 => array(8, "\G(\\])|\G(\\.)|\G(->)|\G(\\{)|\G(\\})|\G(\\()|\G(\\))|\G(\\+)|\G(-)|\G(\\*)|\G(\/)|\G(%)|\G(<=)|\G(<)|\G(>=)|\G(>)|\G(===)|\G(!==)|\G(==)|\G(<>|!=)|\G(\x27(\\\\\\\\|\\\\\x27|.|[\r\n])*?\x27)|\G(\"(\\\\\\\\|\\\\\"|.|[\r\n])*?\")|\G([0-9]+(\\.[0-9]+)?)|\G([a-zA-Z_\x7f-\xff][a-zA-Z0-9_\x7f-\xff]*)"),
        23 => array(8, "\G(\\.)|\G(->)|\G(\\{)|\G(\\})|\G(\\()|\G(\\))|\G(\\+)|\G(-)|\G(\\*)|\G(\/)|\G(%)|\G(<=)|\G(<)|\G(>=)|\G(>)|\G(===)|\G(!==)|\G(==)|\G(<>|!=)|\G(\x27(\\\\\\\\|\\\\\x27|.|[\r\n])*?\x27)|\G(\"(\\\\\\\\|\\\\\"|.|[\r\n])*?\")|\G([0-9]+(\\.[0-9]+)?)|\G([a-zA-Z_\x7f-\xff][a-zA-Z0-9_\x7f-\xff]*)"),
        24 => array(8, "\G(->)|\G(\\{)|\G(\\})|\G(\\()|\G(\\))|\G(\\+)|\G(-)|\G(\\*)|\G(\/)|\G(%)|\G(<=)|\G(<)|\G(>=)|\G(>)|\G(===)|\G(!==)|\G(==)|\G(<>|!=)|\G(\x27(\\\\\\\\|\\\\\x27|.|[\r\n])*?\x27)|\G(\"(\\\\\\\\|\\\\\"|.|[\r\n])*?\")|\G([0-9]+(\\.[0-9]+)?)|\G([a-zA-Z_\x7f-\xff][a-zA-Z0-9_\x7f-\xff]*)"),
        25 => array(8, "\G(\\{)|\G(\\})|\G(\\()|\G(\\))|\G(\\+)|\G(-)|\G(\\*)|\G(\/)|\G(%)|\G(<=)|\G(<)|\G(>=)|\G(>)|\G(===)|\G(!==)|\G(==)|\G(<>|!=)|\G(\x27(\\\\\\\\|\\\\\x27|.|[\r\n])*?\x27)|\G(\"(\\\\\\\\|\\\\\"|.|[\r\n])*?\")|\G([0-9]+(\\.[0-9]+)?)|\G([a-zA-Z_\x7f-\xff][a-zA-Z0-9_\x7f-\xff]*)"),
        26 => array(8, "\G(\\})|\G(\\()|\G(\\))|\G(\\+)|\G(-)|\G(\\*)|\G(\/)|\G(%)|\G(<=)|\G(<)|\G(>=)|\G(>)|\G(===)|\G(!==)|\G(==)|\G(<>|!=)|\G(\x27(\\\\\\\\|\\\\\x27|.|[\r\n])*?\x27)|\G(\"(\\\\\\\\|\\\\\"|.|[\r\n])*?\")|\G([0-9]+(\\.[0-9]+)?)|\G([a-zA-Z_\x7f-\xff][a-zA-Z0-9_\x7f-\xff]*)"),
        27 => array(8, "\G(\\()|\G(\\))|\G(\\+)|\G(-)|\G(\\*)|\G(\/)|\G(%)|\G(<=)|\G(<)|\G(>=)|\G(>)|\G(===)|\G(!==)|\G(==)|\G(<>|!=)|\G(\x27(\\\\\\\\|\\\\\x27|.|[\r\n])*?\x27)|\G(\"(\\\\\\\\|\\\\\"|.|[\r\n])*?\")|\G([0-9]+(\\.[0-9]+)?)|\G([a-zA-Z_\x7f-\xff][a-zA-Z0-9_\x7f-\xff]*)"),
        28 => array(8, "\G(\\))|\G(\\+)|\G(-)|\G(\\*)|\G(\/)|\G(%)|\G(<=)|\G(<)|\G(>=)|\G(>)|\G(===)|\G(!==)|\G(==)|\G(<>|!=)|\G(\x27(\\\\\\\\|\\\\\x27|.|[\r\n])*?\x27)|\G(\"(\\\\\\\\|\\\\\"|.|[\r\n])*?\")|\G([0-9]+(\\.[0-9]+)?)|\G([a-zA-Z_\x7f-\xff][a-zA-Z0-9_\x7f-\xff]*)"),
        29 => array(8, "\G(\\+)|\G(-)|\G(\\*)|\G(\/)|\G(%)|\G(<=)|\G(<)|\G(>=)|\G(>)|\G(===)|\G(!==)|\G(==)|\G(<>|!=)|\G(\x27(\\\\\\\\|\\\\\x27|.|[\r\n])*?\x27)|\G(\"(\\\\\\\\|\\\\\"|.|[\r\n])*?\")|\G([0-9]+(\\.[0-9]+)?)|\G([a-zA-Z_\x7f-\xff][a-zA-Z0-9_\x7f-\xff]*)"),
        30 => array(8, "\G(-)|\G(\\*)|\G(\/)|\G(%)|\G(<=)|\G(<)|\G(>=)|\G(>)|\G(===)|\G(!==)|\G(==)|\G(<>|!=)|\G(\x27(\\\\\\\\|\\\\\x27|.|[\r\n])*?\x27)|\G(\"(\\\\\\\\|\\\\\"|.|[\r\n])*?\")|\G([0-9]+(\\.[0-9]+)?)|\G([a-zA-Z_\x7f-\xff][a-zA-Z0-9_\x7f-\xff]*)"),
        31 => array(8, "\G(\\*)|\G(\/)|\G(%)|\G(<=)|\G(<)|\G(>=)|\G(>)|\G(===)|\G(!==)|\G(==)|\G(<>|!=)|\G(\x27(\\\\\\\\|\\\\\x27|.|[\r\n])*?\x27)|\G(\"(\\\\\\\\|\\\\\"|.|[\r\n])*?\")|\G([0-9]+(\\.[0-9]+)?)|\G([a-zA-Z_\x7f-\xff][a-zA-Z0-9_\x7f-\xff]*)"),
        32 => array(8, "\G(\/)|\G(%)|\G(<=)|\G(<)|\G(>=)|\G(>)|\G(===)|\G(!==)|\G(==)|\G(<>|!=)|\G(\x27(\\\\\\\\|\\\\\x27|.|[\r\n])*?\x27)|\G(\"(\\\\\\\\|\\\\\"|.|[\r\n])*?\")|\G([0-9]+(\\.[0-9]+)?)|\G([a-zA-Z_\x7f-\xff][a-zA-Z0-9_\x7f-\xff]*)"),
        33 => array(8, "\G(%)|\G(<=)|\G(<)|\G(>=)|\G(>)|\G(===)|\G(!==)|\G(==)|\G(<>|!=)|\G(\x27(\\\\\\\\|\\\\\x27|.|[\r\n])*?\x27)|\G(\"(\\\\\\\\|\\\\\"|.|[\r\n])*?\")|\G([0-9]+(\\.[0-9]+)?)|\G([a-zA-Z_\x7f-\xff][a-zA-Z0-9_\x7f-\xff]*)"),
        34 => array(8, "\G(<=)|\G(<)|\G(>=)|\G(>)|\G(===)|\G(!==)|\G(==)|\G(<>|!=)|\G(\x27(\\\\\\\\|\\\\\x27|.|[\r\n])*?\x27)|\G(\"(\\\\\\\\|\\\\\"|.|[\r\n])*?\")|\G([0-9]+(\\.[0-9]+)?)|\G([a-zA-Z_\x7f-\xff][a-zA-Z0-9_\x7f-\xff]*)"),
        35 => array(8, "\G(<)|\G(>=)|\G(>)|\G(===)|\G(!==)|\G(==)|\G(<>|!=)|\G(\x27(\\\\\\\\|\\\\\x27|.|[\r\n])*?\x27)|\G(\"(\\\\\\\\|\\\\\"|.|[\r\n])*?\")|\G([0-9]+(\\.[0-9]+)?)|\G([a-zA-Z_\x7f-\xff][a-zA-Z0-9_\x7f-\xff]*)"),
        36 => array(8, "\G(>=)|\G(>)|\G(===)|\G(!==)|\G(==)|\G(<>|!=)|\G(\x27(\\\\\\\\|\\\\\x27|.|[\r\n])*?\x27)|\G(\"(\\\\\\\\|\\\\\"|.|[\r\n])*?\")|\G([0-9]+(\\.[0-9]+)?)|\G([a-zA-Z_\x7f-\xff][a-zA-Z0-9_\x7f-\xff]*)"),
        37 => array(8, "\G(>)|\G(===)|\G(!==)|\G(==)|\G(<>|!=)|\G(\x27(\\\\\\\\|\\\\\x27|.|[\r\n])*?\x27)|\G(\"(\\\\\\\\|\\\\\"|.|[\r\n])*?\")|\G([0-9]+(\\.[0-9]+)?)|\G([a-zA-Z_\x7f-\xff][a-zA-Z0-9_\x7f-\xff]*)"),
        38 => array(8, "\G(===)|\G(!==)|\G(==)|\G(<>|!=)|\G(\x27(\\\\\\\\|\\\\\x27|.|[\r\n])*?\x27)|\G(\"(\\\\\\\\|\\\\\"|.|[\r\n])*?\")|\G([0-9]+(\\.[0-9]+)?)|\G([a-zA-Z_\x7f-\xff][a-zA-Z0-9_\x7f-\xff]*)"),
        39 => array(8, "\G(!==)|\G(==)|\G(<>|!=)|\G(\x27(\\\\\\\\|\\\\\x27|.|[\r\n])*?\x27)|\G(\"(\\\\\\\\|\\\\\"|.|[\r\n])*?\")|\G([0-9]+(\\.[0-9]+)?)|\G([a-zA-Z_\x7f-\xff][a-zA-Z0-9_\x7f-\xff]*)"),
        40 => array(8, "\G(==)|\G(<>|!=)|\G(\x27(\\\\\\\\|\\\\\x27|.|[\r\n])*?\x27)|\G(\"(\\\\\\\\|\\\\\"|.|[\r\n])*?\")|\G([0-9]+(\\.[0-9]+)?)|\G([a-zA-Z_\x7f-\xff][a-zA-Z0-9_\x7f-\xff]*)"),
        41 => array(8, "\G(<>|!=)|\G(\x27(\\\\\\\\|\\\\\x27|.|[\r\n])*?\x27)|\G(\"(\\\\\\\\|\\\\\"|.|[\r\n])*?\")|\G([0-9]+(\\.[0-9]+)?)|\G([a-zA-Z_\x7f-\xff][a-zA-Z0-9_\x7f-\xff]*)"),
        42 => array(8, "\G(\x27(\\\\\\\\|\\\\\x27|.|[\r\n])*?\x27)|\G(\"(\\\\\\\\|\\\\\"|.|[\r\n])*?\")|\G([0-9]+(\\.[0-9]+)?)|\G([a-zA-Z_\x7f-\xff][a-zA-Z0-9_\x7f-\xff]*)"),
        43 => array(9, "\G(\"(\\\\\\\\|\\\\\"|.|[\r\n])*?\")|\G([0-9]+(\\.[0-9]+)?)|\G([a-zA-Z_\x7f-\xff][a-zA-Z0-9_\x7f-\xff]*)"),
        45 => array(10, "\G([0-9]+(\\.[0-9]+)?)|\G([a-zA-Z_\x7f-\xff][a-zA-Z0-9_\x7f-\xff]*)"),
        47 => array(11, "\G([a-zA-Z_\x7f-\xff][a-zA-Z0-9_\x7f-\xff]*)"),
        49 => array(11, ""),
    );

                    // yymore is needed
                    do {
                        if (!strlen($yy_yymore_patterns[$this->_token][1])) {
                            throw new Exception('cannot do yymore for the last token');
                        }
                        $yysubmatches = array();
                        if (preg_match('/' . $yy_yymore_patterns[$this->_token][1] . '/',
                              $this->_data, $yymatches, null, $this->_counter)) {
                            $yysubmatches = $yymatches;
                            $yymatches = array_filter($yymatches, 'strlen'); // remove empty sub-patterns
                            next($yymatches); // skip global match
                            $this->_token += key($yymatches) + $yy_yymore_patterns[$this->_token][0]; // token number
                            $this->value = current($yymatches); // token value
                            $this->lineno = substr_count($this->value, "\n");
                            if ($tokenMap[$this->_token]) {
                                // extract sub-patterns for passing to lex function
                                $yysubmatches = array_slice($yysubmatches, $this->_token + 1,
                                    $tokenMap[$this->_token]);
                            } else {
                                $yysubmatches = array();
                            }
                        }
                        $r = $this->{'yy_r2_' . $this->_token}($yysubmatches);
                    } while ($r !== null && !is_bool($r));
                    if ($r === true) {
                        // we have changed state
                        // process this token in the new state
                        return $this->yylex();
                    } elseif ($r === false) {
                        $this->_counter += strlen($this->value);
                        $this->lineno += substr_count($this->value, "\n");
                        if ($this->_counter >= strlen($this->_data)) {
                            return false; // end of input
                        }
                        // skip this token
                        continue;
                    } else {
                        // accept
                        $this->_counter += strlen($this->value);
                        $this->lineno += substr_count($this->value, "\n");
                        return true;
                    }
                }
            } else {
                throw new Exception('Unexpected input at line' . $this->lineno .
                    ': ' . $this->_data[$this->_counter]);
            }
            break;
        } while (true);

    } // end function


    const VARIABLE = 2;
    function yy_r2_1($yy_subpatterns)
    {
return FALSE;    }
    function yy_r2_2($yy_subpatterns)
    {
$this->token_type = self::T_VARIABLE_END; $this->yypopstate();    }
    function yy_r2_3($yy_subpatterns)
    {
$this->token_type = self::T_AND;    }
    function yy_r2_5($yy_subpatterns)
    {
$this->token_type = self::T_OR;    }
    function yy_r2_7($yy_subpatterns)
    {
$this->token_type = self::T_XOR;    }
    function yy_r2_9($yy_subpatterns)
    {
$this->token_type = self::T_NOT_INX;    }
    function yy_r2_11($yy_subpatterns)
    {
$this->token_type = self::T_NOT_IN;    }
    function yy_r2_13($yy_subpatterns)
    {
$this->token_type = self::T_NOT;    }
    function yy_r2_15($yy_subpatterns)
    {
$this->token_type = self::T_INX;    }
    function yy_r2_17($yy_subpatterns)
    {
$this->token_type = self::T_IN;    }
    function yy_r2_19($yy_subpatterns)
    {
$this->token_type = self::T_QUESTION;    }
    function yy_r2_20($yy_subpatterns)
    {
$this->token_type = self::T_PIPE;    }
    function yy_r2_21($yy_subpatterns)
    {
$this->token_type = self::T_COLON;    }
    function yy_r2_22($yy_subpatterns)
    {
$this->token_type = self::T_LEFT_BRACKET;    }
    function yy_r2_23($yy_subpatterns)
    {
$this->token_type = self::T_RIGHT_BRACKET;    }
    function yy_r2_24($yy_subpatterns)
    {
$this->token_type = self::T_DOT;    }
    function yy_r2_25($yy_subpatterns)
    {
$this->token_type = self::T_ARROW;    }
    function yy_r2_26($yy_subpatterns)
    {
$this->token_type = self::T_LEFT_BRACE;    }
    function yy_r2_27($yy_subpatterns)
    {
$this->token_type = self::T_RIGHT_BRACE;    }
    function yy_r2_28($yy_subpatterns)
    {
$this->token_type = self::T_LEFT_PAREN;    }
    function yy_r2_29($yy_subpatterns)
    {
$this->token_type = self::T_RIGHT_PAREN;    }
    function yy_r2_30($yy_subpatterns)
    {
$this->token_type = self::T_PLUS;    }
    function yy_r2_31($yy_subpatterns)
    {
$this->token_type = self::T_MINUS;    }
    function yy_r2_32($yy_subpatterns)
    {
$this->token_type = self::T_MULTIPLICATION;    }
    function yy_r2_33($yy_subpatterns)
    {
$this->token_type = self::T_DIVISION;    }
    function yy_r2_34($yy_subpatterns)
    {
$this->token_type = self::T_MODULUS;    }
    function yy_r2_35($yy_subpatterns)
    {
$this->token_type = self::T_LE;    }
    function yy_r2_36($yy_subpatterns)
    {
$this->token_type = self::T_LT;    }
    function yy_r2_37($yy_subpatterns)
    {
$this->token_type = self::T_GE;    }
    function yy_r2_38($yy_subpatterns)
    {
$this->token_type = self::T_GT;    }
    function yy_r2_39($yy_subpatterns)
    {
$this->token_type = self::T_EX;    }
    function yy_r2_40($yy_subpatterns)
    {
$this->token_type = self::T_NX;    }
    function yy_r2_41($yy_subpatterns)
    {
$this->token_type = self::T_EQ;    }
    function yy_r2_42($yy_subpatterns)
    {
$this->token_type = self::T_NE;    }
    function yy_r2_43($yy_subpatterns)
    {
$this->token_type = self::T_SINGLE_QUOTED_STRING;    }
    function yy_r2_45($yy_subpatterns)
    {
$this->token_type = self::T_DOUBLE_QUOTED_STRING;    }
    function yy_r2_47($yy_subpatterns)
    {
$this->token_type = self::T_NUMBER;    }
    function yy_r2_49($yy_subpatterns)
    {
$this->token_type = self::T_ID;    }


	
    function yylex3()
    {
        $tokenMap = array (
              1 => 0,
              2 => 0,
              3 => 1,
              5 => 1,
              7 => 0,
              8 => 0,
              9 => 0,
              10 => 0,
              11 => 0,
              12 => 0,
              13 => 0,
              14 => 0,
              15 => 1,
              17 => 1,
              19 => 1,
              21 => 1,
              23 => 1,
              25 => 1,
              27 => 1,
              29 => 1,
              31 => 0,
              32 => 0,
              33 => 0,
              34 => 0,
              35 => 0,
              36 => 0,
              37 => 0,
              38 => 0,
              39 => 0,
              40 => 0,
              41 => 0,
              42 => 0,
              43 => 0,
              44 => 0,
              45 => 0,
              46 => 0,
              47 => 0,
              48 => 0,
              49 => 0,
              50 => 0,
              51 => 0,
              52 => 0,
              53 => 0,
              54 => 0,
              55 => 1,
              57 => 1,
              59 => 1,
              61 => 0,
            );
        if ($this->_counter >= strlen($this->_data)) {
            return false; // end of input
        }
        $yy_global_pattern = '/\G([ \t\n\r]+)|\G(%\\})|\G(\x27(\\\\\\\\|\\\\\x27|.|[\r\n])*?\x27)|\G(\"(\\\\\\\\|\\\\\"|.|[\r\n])*?\")|\G([bB][lL][oO][cC][kK])|\G([eE][nN][dD][bB][lL][oO][cC][kK])|\G([eE][xX][tT][eE][nN][dD][sS])|\G([cC][oO][mM][mM][eE][nN][tT])|\G([eE][nN][dD][cC][oO][mM][mM][eE][nN][tT])|\G([iI][fF])|\G([eE][lL][sS][eE])|\G([eE][nN][dD][iI][fF])|\G((&&|and|AND))|\G((\\|\\||or|OR))|\G((xor|XOR))|\G((not inx|NOT INX))|\G((not in|NOT IN))|\G((!|not|NOT))|\G((inx|INX))|\G((in|IN))|\G(\\?)|\G(\\|)|\G(:)|\G(\\[)|\G(\\])|\G(\\.)|\G(->)|\G(\\{)|\G(\\})|\G(\\()|\G(\\))|\G(\\+)|\G(-)|\G(\\*)|\G(\/)|\G(%)|\G(<=)|\G(<)|\G(>=)|\G(>)|\G(===)|\G(!==)|\G(==)|\G(<>|!=)|\G(\x27(\\\\\\\\|\\\\\x27|.|[\r\n])*?\x27)|\G(\"(\\\\\\\\|\\\\\"|.|[\r\n])*?\")|\G([0-9]+(\\.[0-9]+)?)|\G([a-zA-Z_\x7f-\xff][a-zA-Z0-9_\x7f-\xff]*)/';

        do {
            if (preg_match($yy_global_pattern,$this->_data, $yymatches, null, $this->_counter)) {
                $yysubmatches = $yymatches;
                $yymatches = array_filter($yymatches, 'strlen'); // remove empty sub-patterns
                if (!count($yymatches)) {
                    throw new Exception('Error: lexing failed because a rule matched' .
                        ' an empty string.  Input "' . substr($this->_data,
                        $this->_counter, 5) . '... state BLOCK');
                }
                next($yymatches); // skip global match
                $this->_token = key($yymatches); // token number
                if ($tokenMap[$this->_token]) {
                    // extract sub-patterns for passing to lex function
                    $yysubmatches = array_slice($yysubmatches, $this->_token + 1,
                        $tokenMap[$this->_token]);
                } else {
                    $yysubmatches = array();
                }
                $this->value = current($yymatches); // token value
                $r = $this->{'yy_r3_' . $this->_token}($yysubmatches);
                if ($r === null) {
                    $this->_counter += strlen($this->value);
                    $this->lineno += substr_count($this->value, "\n");
                    // accept this token
                    return true;
                } elseif ($r === true) {
                    // we have changed state
                    // process this token in the new state
                    return $this->yylex();
                } elseif ($r === false) {
                    $this->_counter += strlen($this->value);
                    $this->lineno += substr_count($this->value, "\n");
                    if ($this->_counter >= strlen($this->_data)) {
                        return false; // end of input
                    }
                    // skip this token
                    continue;
                } else {
                    $yy_yymore_patterns = array(
        1 => array(0, "\G(%\\})|\G(\x27(\\\\\\\\|\\\\\x27|.|[\r\n])*?\x27)|\G(\"(\\\\\\\\|\\\\\"|.|[\r\n])*?\")|\G([bB][lL][oO][cC][kK])|\G([eE][nN][dD][bB][lL][oO][cC][kK])|\G([eE][xX][tT][eE][nN][dD][sS])|\G([cC][oO][mM][mM][eE][nN][tT])|\G([eE][nN][dD][cC][oO][mM][mM][eE][nN][tT])|\G([iI][fF])|\G([eE][lL][sS][eE])|\G([eE][nN][dD][iI][fF])|\G((&&|and|AND))|\G((\\|\\||or|OR))|\G((xor|XOR))|\G((not inx|NOT INX))|\G((not in|NOT IN))|\G((!|not|NOT))|\G((inx|INX))|\G((in|IN))|\G(\\?)|\G(\\|)|\G(:)|\G(\\[)|\G(\\])|\G(\\.)|\G(->)|\G(\\{)|\G(\\})|\G(\\()|\G(\\))|\G(\\+)|\G(-)|\G(\\*)|\G(\/)|\G(%)|\G(<=)|\G(<)|\G(>=)|\G(>)|\G(===)|\G(!==)|\G(==)|\G(<>|!=)|\G(\x27(\\\\\\\\|\\\\\x27|.|[\r\n])*?\x27)|\G(\"(\\\\\\\\|\\\\\"|.|[\r\n])*?\")|\G([0-9]+(\\.[0-9]+)?)|\G([a-zA-Z_\x7f-\xff][a-zA-Z0-9_\x7f-\xff]*)"),
        2 => array(0, "\G(\x27(\\\\\\\\|\\\\\x27|.|[\r\n])*?\x27)|\G(\"(\\\\\\\\|\\\\\"|.|[\r\n])*?\")|\G([bB][lL][oO][cC][kK])|\G([eE][nN][dD][bB][lL][oO][cC][kK])|\G([eE][xX][tT][eE][nN][dD][sS])|\G([cC][oO][mM][mM][eE][nN][tT])|\G([eE][nN][dD][cC][oO][mM][mM][eE][nN][tT])|\G([iI][fF])|\G([eE][lL][sS][eE])|\G([eE][nN][dD][iI][fF])|\G((&&|and|AND))|\G((\\|\\||or|OR))|\G((xor|XOR))|\G((not inx|NOT INX))|\G((not in|NOT IN))|\G((!|not|NOT))|\G((inx|INX))|\G((in|IN))|\G(\\?)|\G(\\|)|\G(:)|\G(\\[)|\G(\\])|\G(\\.)|\G(->)|\G(\\{)|\G(\\})|\G(\\()|\G(\\))|\G(\\+)|\G(-)|\G(\\*)|\G(\/)|\G(%)|\G(<=)|\G(<)|\G(>=)|\G(>)|\G(===)|\G(!==)|\G(==)|\G(<>|!=)|\G(\x27(\\\\\\\\|\\\\\x27|.|[\r\n])*?\x27)|\G(\"(\\\\\\\\|\\\\\"|.|[\r\n])*?\")|\G([0-9]+(\\.[0-9]+)?)|\G([a-zA-Z_\x7f-\xff][a-zA-Z0-9_\x7f-\xff]*)"),
        3 => array(1, "\G(\"(\\\\\\\\|\\\\\"|.|[\r\n])*?\")|\G([bB][lL][oO][cC][kK])|\G([eE][nN][dD][bB][lL][oO][cC][kK])|\G([eE][xX][tT][eE][nN][dD][sS])|\G([cC][oO][mM][mM][eE][nN][tT])|\G([eE][nN][dD][cC][oO][mM][mM][eE][nN][tT])|\G([iI][fF])|\G([eE][lL][sS][eE])|\G([eE][nN][dD][iI][fF])|\G((&&|and|AND))|\G((\\|\\||or|OR))|\G((xor|XOR))|\G((not inx|NOT INX))|\G((not in|NOT IN))|\G((!|not|NOT))|\G((inx|INX))|\G((in|IN))|\G(\\?)|\G(\\|)|\G(:)|\G(\\[)|\G(\\])|\G(\\.)|\G(->)|\G(\\{)|\G(\\})|\G(\\()|\G(\\))|\G(\\+)|\G(-)|\G(\\*)|\G(\/)|\G(%)|\G(<=)|\G(<)|\G(>=)|\G(>)|\G(===)|\G(!==)|\G(==)|\G(<>|!=)|\G(\x27(\\\\\\\\|\\\\\x27|.|[\r\n])*?\x27)|\G(\"(\\\\\\\\|\\\\\"|.|[\r\n])*?\")|\G([0-9]+(\\.[0-9]+)?)|\G([a-zA-Z_\x7f-\xff][a-zA-Z0-9_\x7f-\xff]*)"),
        5 => array(2, "\G([bB][lL][oO][cC][kK])|\G([eE][nN][dD][bB][lL][oO][cC][kK])|\G([eE][xX][tT][eE][nN][dD][sS])|\G([cC][oO][mM][mM][eE][nN][tT])|\G([eE][nN][dD][cC][oO][mM][mM][eE][nN][tT])|\G([iI][fF])|\G([eE][lL][sS][eE])|\G([eE][nN][dD][iI][fF])|\G((&&|and|AND))|\G((\\|\\||or|OR))|\G((xor|XOR))|\G((not inx|NOT INX))|\G((not in|NOT IN))|\G((!|not|NOT))|\G((inx|INX))|\G((in|IN))|\G(\\?)|\G(\\|)|\G(:)|\G(\\[)|\G(\\])|\G(\\.)|\G(->)|\G(\\{)|\G(\\})|\G(\\()|\G(\\))|\G(\\+)|\G(-)|\G(\\*)|\G(\/)|\G(%)|\G(<=)|\G(<)|\G(>=)|\G(>)|\G(===)|\G(!==)|\G(==)|\G(<>|!=)|\G(\x27(\\\\\\\\|\\\\\x27|.|[\r\n])*?\x27)|\G(\"(\\\\\\\\|\\\\\"|.|[\r\n])*?\")|\G([0-9]+(\\.[0-9]+)?)|\G([a-zA-Z_\x7f-\xff][a-zA-Z0-9_\x7f-\xff]*)"),
        7 => array(2, "\G([eE][nN][dD][bB][lL][oO][cC][kK])|\G([eE][xX][tT][eE][nN][dD][sS])|\G([cC][oO][mM][mM][eE][nN][tT])|\G([eE][nN][dD][cC][oO][mM][mM][eE][nN][tT])|\G([iI][fF])|\G([eE][lL][sS][eE])|\G([eE][nN][dD][iI][fF])|\G((&&|and|AND))|\G((\\|\\||or|OR))|\G((xor|XOR))|\G((not inx|NOT INX))|\G((not in|NOT IN))|\G((!|not|NOT))|\G((inx|INX))|\G((in|IN))|\G(\\?)|\G(\\|)|\G(:)|\G(\\[)|\G(\\])|\G(\\.)|\G(->)|\G(\\{)|\G(\\})|\G(\\()|\G(\\))|\G(\\+)|\G(-)|\G(\\*)|\G(\/)|\G(%)|\G(<=)|\G(<)|\G(>=)|\G(>)|\G(===)|\G(!==)|\G(==)|\G(<>|!=)|\G(\x27(\\\\\\\\|\\\\\x27|.|[\r\n])*?\x27)|\G(\"(\\\\\\\\|\\\\\"|.|[\r\n])*?\")|\G([0-9]+(\\.[0-9]+)?)|\G([a-zA-Z_\x7f-\xff][a-zA-Z0-9_\x7f-\xff]*)"),
        8 => array(2, "\G([eE][xX][tT][eE][nN][dD][sS])|\G([cC][oO][mM][mM][eE][nN][tT])|\G([eE][nN][dD][cC][oO][mM][mM][eE][nN][tT])|\G([iI][fF])|\G([eE][lL][sS][eE])|\G([eE][nN][dD][iI][fF])|\G((&&|and|AND))|\G((\\|\\||or|OR))|\G((xor|XOR))|\G((not inx|NOT INX))|\G((not in|NOT IN))|\G((!|not|NOT))|\G((inx|INX))|\G((in|IN))|\G(\\?)|\G(\\|)|\G(:)|\G(\\[)|\G(\\])|\G(\\.)|\G(->)|\G(\\{)|\G(\\})|\G(\\()|\G(\\))|\G(\\+)|\G(-)|\G(\\*)|\G(\/)|\G(%)|\G(<=)|\G(<)|\G(>=)|\G(>)|\G(===)|\G(!==)|\G(==)|\G(<>|!=)|\G(\x27(\\\\\\\\|\\\\\x27|.|[\r\n])*?\x27)|\G(\"(\\\\\\\\|\\\\\"|.|[\r\n])*?\")|\G([0-9]+(\\.[0-9]+)?)|\G([a-zA-Z_\x7f-\xff][a-zA-Z0-9_\x7f-\xff]*)"),
        9 => array(2, "\G([cC][oO][mM][mM][eE][nN][tT])|\G([eE][nN][dD][cC][oO][mM][mM][eE][nN][tT])|\G([iI][fF])|\G([eE][lL][sS][eE])|\G([eE][nN][dD][iI][fF])|\G((&&|and|AND))|\G((\\|\\||or|OR))|\G((xor|XOR))|\G((not inx|NOT INX))|\G((not in|NOT IN))|\G((!|not|NOT))|\G((inx|INX))|\G((in|IN))|\G(\\?)|\G(\\|)|\G(:)|\G(\\[)|\G(\\])|\G(\\.)|\G(->)|\G(\\{)|\G(\\})|\G(\\()|\G(\\))|\G(\\+)|\G(-)|\G(\\*)|\G(\/)|\G(%)|\G(<=)|\G(<)|\G(>=)|\G(>)|\G(===)|\G(!==)|\G(==)|\G(<>|!=)|\G(\x27(\\\\\\\\|\\\\\x27|.|[\r\n])*?\x27)|\G(\"(\\\\\\\\|\\\\\"|.|[\r\n])*?\")|\G([0-9]+(\\.[0-9]+)?)|\G([a-zA-Z_\x7f-\xff][a-zA-Z0-9_\x7f-\xff]*)"),
        10 => array(2, "\G([eE][nN][dD][cC][oO][mM][mM][eE][nN][tT])|\G([iI][fF])|\G([eE][lL][sS][eE])|\G([eE][nN][dD][iI][fF])|\G((&&|and|AND))|\G((\\|\\||or|OR))|\G((xor|XOR))|\G((not inx|NOT INX))|\G((not in|NOT IN))|\G((!|not|NOT))|\G((inx|INX))|\G((in|IN))|\G(\\?)|\G(\\|)|\G(:)|\G(\\[)|\G(\\])|\G(\\.)|\G(->)|\G(\\{)|\G(\\})|\G(\\()|\G(\\))|\G(\\+)|\G(-)|\G(\\*)|\G(\/)|\G(%)|\G(<=)|\G(<)|\G(>=)|\G(>)|\G(===)|\G(!==)|\G(==)|\G(<>|!=)|\G(\x27(\\\\\\\\|\\\\\x27|.|[\r\n])*?\x27)|\G(\"(\\\\\\\\|\\\\\"|.|[\r\n])*?\")|\G([0-9]+(\\.[0-9]+)?)|\G([a-zA-Z_\x7f-\xff][a-zA-Z0-9_\x7f-\xff]*)"),
        11 => array(2, "\G([iI][fF])|\G([eE][lL][sS][eE])|\G([eE][nN][dD][iI][fF])|\G((&&|and|AND))|\G((\\|\\||or|OR))|\G((xor|XOR))|\G((not inx|NOT INX))|\G((not in|NOT IN))|\G((!|not|NOT))|\G((inx|INX))|\G((in|IN))|\G(\\?)|\G(\\|)|\G(:)|\G(\\[)|\G(\\])|\G(\\.)|\G(->)|\G(\\{)|\G(\\})|\G(\\()|\G(\\))|\G(\\+)|\G(-)|\G(\\*)|\G(\/)|\G(%)|\G(<=)|\G(<)|\G(>=)|\G(>)|\G(===)|\G(!==)|\G(==)|\G(<>|!=)|\G(\x27(\\\\\\\\|\\\\\x27|.|[\r\n])*?\x27)|\G(\"(\\\\\\\\|\\\\\"|.|[\r\n])*?\")|\G([0-9]+(\\.[0-9]+)?)|\G([a-zA-Z_\x7f-\xff][a-zA-Z0-9_\x7f-\xff]*)"),
        12 => array(2, "\G([eE][lL][sS][eE])|\G([eE][nN][dD][iI][fF])|\G((&&|and|AND))|\G((\\|\\||or|OR))|\G((xor|XOR))|\G((not inx|NOT INX))|\G((not in|NOT IN))|\G((!|not|NOT))|\G((inx|INX))|\G((in|IN))|\G(\\?)|\G(\\|)|\G(:)|\G(\\[)|\G(\\])|\G(\\.)|\G(->)|\G(\\{)|\G(\\})|\G(\\()|\G(\\))|\G(\\+)|\G(-)|\G(\\*)|\G(\/)|\G(%)|\G(<=)|\G(<)|\G(>=)|\G(>)|\G(===)|\G(!==)|\G(==)|\G(<>|!=)|\G(\x27(\\\\\\\\|\\\\\x27|.|[\r\n])*?\x27)|\G(\"(\\\\\\\\|\\\\\"|.|[\r\n])*?\")|\G([0-9]+(\\.[0-9]+)?)|\G([a-zA-Z_\x7f-\xff][a-zA-Z0-9_\x7f-\xff]*)"),
        13 => array(2, "\G([eE][nN][dD][iI][fF])|\G((&&|and|AND))|\G((\\|\\||or|OR))|\G((xor|XOR))|\G((not inx|NOT INX))|\G((not in|NOT IN))|\G((!|not|NOT))|\G((inx|INX))|\G((in|IN))|\G(\\?)|\G(\\|)|\G(:)|\G(\\[)|\G(\\])|\G(\\.)|\G(->)|\G(\\{)|\G(\\})|\G(\\()|\G(\\))|\G(\\+)|\G(-)|\G(\\*)|\G(\/)|\G(%)|\G(<=)|\G(<)|\G(>=)|\G(>)|\G(===)|\G(!==)|\G(==)|\G(<>|!=)|\G(\x27(\\\\\\\\|\\\\\x27|.|[\r\n])*?\x27)|\G(\"(\\\\\\\\|\\\\\"|.|[\r\n])*?\")|\G([0-9]+(\\.[0-9]+)?)|\G([a-zA-Z_\x7f-\xff][a-zA-Z0-9_\x7f-\xff]*)"),
        14 => array(2, "\G((&&|and|AND))|\G((\\|\\||or|OR))|\G((xor|XOR))|\G((not inx|NOT INX))|\G((not in|NOT IN))|\G((!|not|NOT))|\G((inx|INX))|\G((in|IN))|\G(\\?)|\G(\\|)|\G(:)|\G(\\[)|\G(\\])|\G(\\.)|\G(->)|\G(\\{)|\G(\\})|\G(\\()|\G(\\))|\G(\\+)|\G(-)|\G(\\*)|\G(\/)|\G(%)|\G(<=)|\G(<)|\G(>=)|\G(>)|\G(===)|\G(!==)|\G(==)|\G(<>|!=)|\G(\x27(\\\\\\\\|\\\\\x27|.|[\r\n])*?\x27)|\G(\"(\\\\\\\\|\\\\\"|.|[\r\n])*?\")|\G([0-9]+(\\.[0-9]+)?)|\G([a-zA-Z_\x7f-\xff][a-zA-Z0-9_\x7f-\xff]*)"),
        15 => array(3, "\G((\\|\\||or|OR))|\G((xor|XOR))|\G((not inx|NOT INX))|\G((not in|NOT IN))|\G((!|not|NOT))|\G((inx|INX))|\G((in|IN))|\G(\\?)|\G(\\|)|\G(:)|\G(\\[)|\G(\\])|\G(\\.)|\G(->)|\G(\\{)|\G(\\})|\G(\\()|\G(\\))|\G(\\+)|\G(-)|\G(\\*)|\G(\/)|\G(%)|\G(<=)|\G(<)|\G(>=)|\G(>)|\G(===)|\G(!==)|\G(==)|\G(<>|!=)|\G(\x27(\\\\\\\\|\\\\\x27|.|[\r\n])*?\x27)|\G(\"(\\\\\\\\|\\\\\"|.|[\r\n])*?\")|\G([0-9]+(\\.[0-9]+)?)|\G([a-zA-Z_\x7f-\xff][a-zA-Z0-9_\x7f-\xff]*)"),
        17 => array(4, "\G((xor|XOR))|\G((not inx|NOT INX))|\G((not in|NOT IN))|\G((!|not|NOT))|\G((inx|INX))|\G((in|IN))|\G(\\?)|\G(\\|)|\G(:)|\G(\\[)|\G(\\])|\G(\\.)|\G(->)|\G(\\{)|\G(\\})|\G(\\()|\G(\\))|\G(\\+)|\G(-)|\G(\\*)|\G(\/)|\G(%)|\G(<=)|\G(<)|\G(>=)|\G(>)|\G(===)|\G(!==)|\G(==)|\G(<>|!=)|\G(\x27(\\\\\\\\|\\\\\x27|.|[\r\n])*?\x27)|\G(\"(\\\\\\\\|\\\\\"|.|[\r\n])*?\")|\G([0-9]+(\\.[0-9]+)?)|\G([a-zA-Z_\x7f-\xff][a-zA-Z0-9_\x7f-\xff]*)"),
        19 => array(5, "\G((not inx|NOT INX))|\G((not in|NOT IN))|\G((!|not|NOT))|\G((inx|INX))|\G((in|IN))|\G(\\?)|\G(\\|)|\G(:)|\G(\\[)|\G(\\])|\G(\\.)|\G(->)|\G(\\{)|\G(\\})|\G(\\()|\G(\\))|\G(\\+)|\G(-)|\G(\\*)|\G(\/)|\G(%)|\G(<=)|\G(<)|\G(>=)|\G(>)|\G(===)|\G(!==)|\G(==)|\G(<>|!=)|\G(\x27(\\\\\\\\|\\\\\x27|.|[\r\n])*?\x27)|\G(\"(\\\\\\\\|\\\\\"|.|[\r\n])*?\")|\G([0-9]+(\\.[0-9]+)?)|\G([a-zA-Z_\x7f-\xff][a-zA-Z0-9_\x7f-\xff]*)"),
        21 => array(6, "\G((not in|NOT IN))|\G((!|not|NOT))|\G((inx|INX))|\G((in|IN))|\G(\\?)|\G(\\|)|\G(:)|\G(\\[)|\G(\\])|\G(\\.)|\G(->)|\G(\\{)|\G(\\})|\G(\\()|\G(\\))|\G(\\+)|\G(-)|\G(\\*)|\G(\/)|\G(%)|\G(<=)|\G(<)|\G(>=)|\G(>)|\G(===)|\G(!==)|\G(==)|\G(<>|!=)|\G(\x27(\\\\\\\\|\\\\\x27|.|[\r\n])*?\x27)|\G(\"(\\\\\\\\|\\\\\"|.|[\r\n])*?\")|\G([0-9]+(\\.[0-9]+)?)|\G([a-zA-Z_\x7f-\xff][a-zA-Z0-9_\x7f-\xff]*)"),
        23 => array(7, "\G((!|not|NOT))|\G((inx|INX))|\G((in|IN))|\G(\\?)|\G(\\|)|\G(:)|\G(\\[)|\G(\\])|\G(\\.)|\G(->)|\G(\\{)|\G(\\})|\G(\\()|\G(\\))|\G(\\+)|\G(-)|\G(\\*)|\G(\/)|\G(%)|\G(<=)|\G(<)|\G(>=)|\G(>)|\G(===)|\G(!==)|\G(==)|\G(<>|!=)|\G(\x27(\\\\\\\\|\\\\\x27|.|[\r\n])*?\x27)|\G(\"(\\\\\\\\|\\\\\"|.|[\r\n])*?\")|\G([0-9]+(\\.[0-9]+)?)|\G([a-zA-Z_\x7f-\xff][a-zA-Z0-9_\x7f-\xff]*)"),
        25 => array(8, "\G((inx|INX))|\G((in|IN))|\G(\\?)|\G(\\|)|\G(:)|\G(\\[)|\G(\\])|\G(\\.)|\G(->)|\G(\\{)|\G(\\})|\G(\\()|\G(\\))|\G(\\+)|\G(-)|\G(\\*)|\G(\/)|\G(%)|\G(<=)|\G(<)|\G(>=)|\G(>)|\G(===)|\G(!==)|\G(==)|\G(<>|!=)|\G(\x27(\\\\\\\\|\\\\\x27|.|[\r\n])*?\x27)|\G(\"(\\\\\\\\|\\\\\"|.|[\r\n])*?\")|\G([0-9]+(\\.[0-9]+)?)|\G([a-zA-Z_\x7f-\xff][a-zA-Z0-9_\x7f-\xff]*)"),
        27 => array(9, "\G((in|IN))|\G(\\?)|\G(\\|)|\G(:)|\G(\\[)|\G(\\])|\G(\\.)|\G(->)|\G(\\{)|\G(\\})|\G(\\()|\G(\\))|\G(\\+)|\G(-)|\G(\\*)|\G(\/)|\G(%)|\G(<=)|\G(<)|\G(>=)|\G(>)|\G(===)|\G(!==)|\G(==)|\G(<>|!=)|\G(\x27(\\\\\\\\|\\\\\x27|.|[\r\n])*?\x27)|\G(\"(\\\\\\\\|\\\\\"|.|[\r\n])*?\")|\G([0-9]+(\\.[0-9]+)?)|\G([a-zA-Z_\x7f-\xff][a-zA-Z0-9_\x7f-\xff]*)"),
        29 => array(10, "\G(\\?)|\G(\\|)|\G(:)|\G(\\[)|\G(\\])|\G(\\.)|\G(->)|\G(\\{)|\G(\\})|\G(\\()|\G(\\))|\G(\\+)|\G(-)|\G(\\*)|\G(\/)|\G(%)|\G(<=)|\G(<)|\G(>=)|\G(>)|\G(===)|\G(!==)|\G(==)|\G(<>|!=)|\G(\x27(\\\\\\\\|\\\\\x27|.|[\r\n])*?\x27)|\G(\"(\\\\\\\\|\\\\\"|.|[\r\n])*?\")|\G([0-9]+(\\.[0-9]+)?)|\G([a-zA-Z_\x7f-\xff][a-zA-Z0-9_\x7f-\xff]*)"),
        31 => array(10, "\G(\\|)|\G(:)|\G(\\[)|\G(\\])|\G(\\.)|\G(->)|\G(\\{)|\G(\\})|\G(\\()|\G(\\))|\G(\\+)|\G(-)|\G(\\*)|\G(\/)|\G(%)|\G(<=)|\G(<)|\G(>=)|\G(>)|\G(===)|\G(!==)|\G(==)|\G(<>|!=)|\G(\x27(\\\\\\\\|\\\\\x27|.|[\r\n])*?\x27)|\G(\"(\\\\\\\\|\\\\\"|.|[\r\n])*?\")|\G([0-9]+(\\.[0-9]+)?)|\G([a-zA-Z_\x7f-\xff][a-zA-Z0-9_\x7f-\xff]*)"),
        32 => array(10, "\G(:)|\G(\\[)|\G(\\])|\G(\\.)|\G(->)|\G(\\{)|\G(\\})|\G(\\()|\G(\\))|\G(\\+)|\G(-)|\G(\\*)|\G(\/)|\G(%)|\G(<=)|\G(<)|\G(>=)|\G(>)|\G(===)|\G(!==)|\G(==)|\G(<>|!=)|\G(\x27(\\\\\\\\|\\\\\x27|.|[\r\n])*?\x27)|\G(\"(\\\\\\\\|\\\\\"|.|[\r\n])*?\")|\G([0-9]+(\\.[0-9]+)?)|\G([a-zA-Z_\x7f-\xff][a-zA-Z0-9_\x7f-\xff]*)"),
        33 => array(10, "\G(\\[)|\G(\\])|\G(\\.)|\G(->)|\G(\\{)|\G(\\})|\G(\\()|\G(\\))|\G(\\+)|\G(-)|\G(\\*)|\G(\/)|\G(%)|\G(<=)|\G(<)|\G(>=)|\G(>)|\G(===)|\G(!==)|\G(==)|\G(<>|!=)|\G(\x27(\\\\\\\\|\\\\\x27|.|[\r\n])*?\x27)|\G(\"(\\\\\\\\|\\\\\"|.|[\r\n])*?\")|\G([0-9]+(\\.[0-9]+)?)|\G([a-zA-Z_\x7f-\xff][a-zA-Z0-9_\x7f-\xff]*)"),
        34 => array(10, "\G(\\])|\G(\\.)|\G(->)|\G(\\{)|\G(\\})|\G(\\()|\G(\\))|\G(\\+)|\G(-)|\G(\\*)|\G(\/)|\G(%)|\G(<=)|\G(<)|\G(>=)|\G(>)|\G(===)|\G(!==)|\G(==)|\G(<>|!=)|\G(\x27(\\\\\\\\|\\\\\x27|.|[\r\n])*?\x27)|\G(\"(\\\\\\\\|\\\\\"|.|[\r\n])*?\")|\G([0-9]+(\\.[0-9]+)?)|\G([a-zA-Z_\x7f-\xff][a-zA-Z0-9_\x7f-\xff]*)"),
        35 => array(10, "\G(\\.)|\G(->)|\G(\\{)|\G(\\})|\G(\\()|\G(\\))|\G(\\+)|\G(-)|\G(\\*)|\G(\/)|\G(%)|\G(<=)|\G(<)|\G(>=)|\G(>)|\G(===)|\G(!==)|\G(==)|\G(<>|!=)|\G(\x27(\\\\\\\\|\\\\\x27|.|[\r\n])*?\x27)|\G(\"(\\\\\\\\|\\\\\"|.|[\r\n])*?\")|\G([0-9]+(\\.[0-9]+)?)|\G([a-zA-Z_\x7f-\xff][a-zA-Z0-9_\x7f-\xff]*)"),
        36 => array(10, "\G(->)|\G(\\{)|\G(\\})|\G(\\()|\G(\\))|\G(\\+)|\G(-)|\G(\\*)|\G(\/)|\G(%)|\G(<=)|\G(<)|\G(>=)|\G(>)|\G(===)|\G(!==)|\G(==)|\G(<>|!=)|\G(\x27(\\\\\\\\|\\\\\x27|.|[\r\n])*?\x27)|\G(\"(\\\\\\\\|\\\\\"|.|[\r\n])*?\")|\G([0-9]+(\\.[0-9]+)?)|\G([a-zA-Z_\x7f-\xff][a-zA-Z0-9_\x7f-\xff]*)"),
        37 => array(10, "\G(\\{)|\G(\\})|\G(\\()|\G(\\))|\G(\\+)|\G(-)|\G(\\*)|\G(\/)|\G(%)|\G(<=)|\G(<)|\G(>=)|\G(>)|\G(===)|\G(!==)|\G(==)|\G(<>|!=)|\G(\x27(\\\\\\\\|\\\\\x27|.|[\r\n])*?\x27)|\G(\"(\\\\\\\\|\\\\\"|.|[\r\n])*?\")|\G([0-9]+(\\.[0-9]+)?)|\G([a-zA-Z_\x7f-\xff][a-zA-Z0-9_\x7f-\xff]*)"),
        38 => array(10, "\G(\\})|\G(\\()|\G(\\))|\G(\\+)|\G(-)|\G(\\*)|\G(\/)|\G(%)|\G(<=)|\G(<)|\G(>=)|\G(>)|\G(===)|\G(!==)|\G(==)|\G(<>|!=)|\G(\x27(\\\\\\\\|\\\\\x27|.|[\r\n])*?\x27)|\G(\"(\\\\\\\\|\\\\\"|.|[\r\n])*?\")|\G([0-9]+(\\.[0-9]+)?)|\G([a-zA-Z_\x7f-\xff][a-zA-Z0-9_\x7f-\xff]*)"),
        39 => array(10, "\G(\\()|\G(\\))|\G(\\+)|\G(-)|\G(\\*)|\G(\/)|\G(%)|\G(<=)|\G(<)|\G(>=)|\G(>)|\G(===)|\G(!==)|\G(==)|\G(<>|!=)|\G(\x27(\\\\\\\\|\\\\\x27|.|[\r\n])*?\x27)|\G(\"(\\\\\\\\|\\\\\"|.|[\r\n])*?\")|\G([0-9]+(\\.[0-9]+)?)|\G([a-zA-Z_\x7f-\xff][a-zA-Z0-9_\x7f-\xff]*)"),
        40 => array(10, "\G(\\))|\G(\\+)|\G(-)|\G(\\*)|\G(\/)|\G(%)|\G(<=)|\G(<)|\G(>=)|\G(>)|\G(===)|\G(!==)|\G(==)|\G(<>|!=)|\G(\x27(\\\\\\\\|\\\\\x27|.|[\r\n])*?\x27)|\G(\"(\\\\\\\\|\\\\\"|.|[\r\n])*?\")|\G([0-9]+(\\.[0-9]+)?)|\G([a-zA-Z_\x7f-\xff][a-zA-Z0-9_\x7f-\xff]*)"),
        41 => array(10, "\G(\\+)|\G(-)|\G(\\*)|\G(\/)|\G(%)|\G(<=)|\G(<)|\G(>=)|\G(>)|\G(===)|\G(!==)|\G(==)|\G(<>|!=)|\G(\x27(\\\\\\\\|\\\\\x27|.|[\r\n])*?\x27)|\G(\"(\\\\\\\\|\\\\\"|.|[\r\n])*?\")|\G([0-9]+(\\.[0-9]+)?)|\G([a-zA-Z_\x7f-\xff][a-zA-Z0-9_\x7f-\xff]*)"),
        42 => array(10, "\G(-)|\G(\\*)|\G(\/)|\G(%)|\G(<=)|\G(<)|\G(>=)|\G(>)|\G(===)|\G(!==)|\G(==)|\G(<>|!=)|\G(\x27(\\\\\\\\|\\\\\x27|.|[\r\n])*?\x27)|\G(\"(\\\\\\\\|\\\\\"|.|[\r\n])*?\")|\G([0-9]+(\\.[0-9]+)?)|\G([a-zA-Z_\x7f-\xff][a-zA-Z0-9_\x7f-\xff]*)"),
        43 => array(10, "\G(\\*)|\G(\/)|\G(%)|\G(<=)|\G(<)|\G(>=)|\G(>)|\G(===)|\G(!==)|\G(==)|\G(<>|!=)|\G(\x27(\\\\\\\\|\\\\\x27|.|[\r\n])*?\x27)|\G(\"(\\\\\\\\|\\\\\"|.|[\r\n])*?\")|\G([0-9]+(\\.[0-9]+)?)|\G([a-zA-Z_\x7f-\xff][a-zA-Z0-9_\x7f-\xff]*)"),
        44 => array(10, "\G(\/)|\G(%)|\G(<=)|\G(<)|\G(>=)|\G(>)|\G(===)|\G(!==)|\G(==)|\G(<>|!=)|\G(\x27(\\\\\\\\|\\\\\x27|.|[\r\n])*?\x27)|\G(\"(\\\\\\\\|\\\\\"|.|[\r\n])*?\")|\G([0-9]+(\\.[0-9]+)?)|\G([a-zA-Z_\x7f-\xff][a-zA-Z0-9_\x7f-\xff]*)"),
        45 => array(10, "\G(%)|\G(<=)|\G(<)|\G(>=)|\G(>)|\G(===)|\G(!==)|\G(==)|\G(<>|!=)|\G(\x27(\\\\\\\\|\\\\\x27|.|[\r\n])*?\x27)|\G(\"(\\\\\\\\|\\\\\"|.|[\r\n])*?\")|\G([0-9]+(\\.[0-9]+)?)|\G([a-zA-Z_\x7f-\xff][a-zA-Z0-9_\x7f-\xff]*)"),
        46 => array(10, "\G(<=)|\G(<)|\G(>=)|\G(>)|\G(===)|\G(!==)|\G(==)|\G(<>|!=)|\G(\x27(\\\\\\\\|\\\\\x27|.|[\r\n])*?\x27)|\G(\"(\\\\\\\\|\\\\\"|.|[\r\n])*?\")|\G([0-9]+(\\.[0-9]+)?)|\G([a-zA-Z_\x7f-\xff][a-zA-Z0-9_\x7f-\xff]*)"),
        47 => array(10, "\G(<)|\G(>=)|\G(>)|\G(===)|\G(!==)|\G(==)|\G(<>|!=)|\G(\x27(\\\\\\\\|\\\\\x27|.|[\r\n])*?\x27)|\G(\"(\\\\\\\\|\\\\\"|.|[\r\n])*?\")|\G([0-9]+(\\.[0-9]+)?)|\G([a-zA-Z_\x7f-\xff][a-zA-Z0-9_\x7f-\xff]*)"),
        48 => array(10, "\G(>=)|\G(>)|\G(===)|\G(!==)|\G(==)|\G(<>|!=)|\G(\x27(\\\\\\\\|\\\\\x27|.|[\r\n])*?\x27)|\G(\"(\\\\\\\\|\\\\\"|.|[\r\n])*?\")|\G([0-9]+(\\.[0-9]+)?)|\G([a-zA-Z_\x7f-\xff][a-zA-Z0-9_\x7f-\xff]*)"),
        49 => array(10, "\G(>)|\G(===)|\G(!==)|\G(==)|\G(<>|!=)|\G(\x27(\\\\\\\\|\\\\\x27|.|[\r\n])*?\x27)|\G(\"(\\\\\\\\|\\\\\"|.|[\r\n])*?\")|\G([0-9]+(\\.[0-9]+)?)|\G([a-zA-Z_\x7f-\xff][a-zA-Z0-9_\x7f-\xff]*)"),
        50 => array(10, "\G(===)|\G(!==)|\G(==)|\G(<>|!=)|\G(\x27(\\\\\\\\|\\\\\x27|.|[\r\n])*?\x27)|\G(\"(\\\\\\\\|\\\\\"|.|[\r\n])*?\")|\G([0-9]+(\\.[0-9]+)?)|\G([a-zA-Z_\x7f-\xff][a-zA-Z0-9_\x7f-\xff]*)"),
        51 => array(10, "\G(!==)|\G(==)|\G(<>|!=)|\G(\x27(\\\\\\\\|\\\\\x27|.|[\r\n])*?\x27)|\G(\"(\\\\\\\\|\\\\\"|.|[\r\n])*?\")|\G([0-9]+(\\.[0-9]+)?)|\G([a-zA-Z_\x7f-\xff][a-zA-Z0-9_\x7f-\xff]*)"),
        52 => array(10, "\G(==)|\G(<>|!=)|\G(\x27(\\\\\\\\|\\\\\x27|.|[\r\n])*?\x27)|\G(\"(\\\\\\\\|\\\\\"|.|[\r\n])*?\")|\G([0-9]+(\\.[0-9]+)?)|\G([a-zA-Z_\x7f-\xff][a-zA-Z0-9_\x7f-\xff]*)"),
        53 => array(10, "\G(<>|!=)|\G(\x27(\\\\\\\\|\\\\\x27|.|[\r\n])*?\x27)|\G(\"(\\\\\\\\|\\\\\"|.|[\r\n])*?\")|\G([0-9]+(\\.[0-9]+)?)|\G([a-zA-Z_\x7f-\xff][a-zA-Z0-9_\x7f-\xff]*)"),
        54 => array(10, "\G(\x27(\\\\\\\\|\\\\\x27|.|[\r\n])*?\x27)|\G(\"(\\\\\\\\|\\\\\"|.|[\r\n])*?\")|\G([0-9]+(\\.[0-9]+)?)|\G([a-zA-Z_\x7f-\xff][a-zA-Z0-9_\x7f-\xff]*)"),
        55 => array(11, "\G(\"(\\\\\\\\|\\\\\"|.|[\r\n])*?\")|\G([0-9]+(\\.[0-9]+)?)|\G([a-zA-Z_\x7f-\xff][a-zA-Z0-9_\x7f-\xff]*)"),
        57 => array(12, "\G([0-9]+(\\.[0-9]+)?)|\G([a-zA-Z_\x7f-\xff][a-zA-Z0-9_\x7f-\xff]*)"),
        59 => array(13, "\G([a-zA-Z_\x7f-\xff][a-zA-Z0-9_\x7f-\xff]*)"),
        61 => array(13, ""),
    );

                    // yymore is needed
                    do {
                        if (!strlen($yy_yymore_patterns[$this->_token][1])) {
                            throw new Exception('cannot do yymore for the last token');
                        }
                        $yysubmatches = array();
                        if (preg_match('/' . $yy_yymore_patterns[$this->_token][1] . '/',
                              $this->_data, $yymatches, null, $this->_counter)) {
                            $yysubmatches = $yymatches;
                            $yymatches = array_filter($yymatches, 'strlen'); // remove empty sub-patterns
                            next($yymatches); // skip global match
                            $this->_token += key($yymatches) + $yy_yymore_patterns[$this->_token][0]; // token number
                            $this->value = current($yymatches); // token value
                            $this->lineno = substr_count($this->value, "\n");
                            if ($tokenMap[$this->_token]) {
                                // extract sub-patterns for passing to lex function
                                $yysubmatches = array_slice($yysubmatches, $this->_token + 1,
                                    $tokenMap[$this->_token]);
                            } else {
                                $yysubmatches = array();
                            }
                        }
                        $r = $this->{'yy_r3_' . $this->_token}($yysubmatches);
                    } while ($r !== null && !is_bool($r));
                    if ($r === true) {
                        // we have changed state
                        // process this token in the new state
                        return $this->yylex();
                    } elseif ($r === false) {
                        $this->_counter += strlen($this->value);
                        $this->lineno += substr_count($this->value, "\n");
                        if ($this->_counter >= strlen($this->_data)) {
                            return false; // end of input
                        }
                        // skip this token
                        continue;
                    } else {
                        // accept
                        $this->_counter += strlen($this->value);
                        $this->lineno += substr_count($this->value, "\n");
                        return true;
                    }
                }
            } else {
                throw new Exception('Unexpected input at line' . $this->lineno .
                    ': ' . $this->_data[$this->_counter]);
            }
            break;
        } while (true);

    } // end function


    const BLOCK = 3;
    function yy_r3_1($yy_subpatterns)
    {
return FALSE;    }
    function yy_r3_2($yy_subpatterns)
    {
$this->token_type = self::T_BLOCK_END; $this->yypopstate();    }
    function yy_r3_3($yy_subpatterns)
    {
$this->token_type = self::T_SINGLE_QUOTED_STRING;    }
    function yy_r3_5($yy_subpatterns)
    {
$this->token_type = self::T_DOUBLE_QUOTED_STRING;    }
    function yy_r3_7($yy_subpatterns)
    {
$this->token_type = self::T_BLOCK;    }
    function yy_r3_8($yy_subpatterns)
    {
$this->token_type = self::T_ENDBLOCK;    }
    function yy_r3_9($yy_subpatterns)
    {
$this->token_type = self::T_EXTENDS;    }
    function yy_r3_10($yy_subpatterns)
    {
$this->token_type = self::T_COMMENT;    }
    function yy_r3_11($yy_subpatterns)
    {
$this->token_type = self::T_ENDCOMMENT;    }
    function yy_r3_12($yy_subpatterns)
    {
$this->token_type = self::T_IF;    }
    function yy_r3_13($yy_subpatterns)
    {
$this->token_type = self::T_ELSE;    }
    function yy_r3_14($yy_subpatterns)
    {
$this->token_type = self::T_ENDIF;    }
    function yy_r3_15($yy_subpatterns)
    {
$this->token_type = self::T_AND;    }
    function yy_r3_17($yy_subpatterns)
    {
$this->token_type = self::T_OR;    }
    function yy_r3_19($yy_subpatterns)
    {
$this->token_type = self::T_XOR;    }
    function yy_r3_21($yy_subpatterns)
    {
$this->token_type = self::T_NOT_INX;    }
    function yy_r3_23($yy_subpatterns)
    {
$this->token_type = self::T_NOT_IN;    }
    function yy_r3_25($yy_subpatterns)
    {
$this->token_type = self::T_NOT;    }
    function yy_r3_27($yy_subpatterns)
    {
$this->token_type = self::T_INX;    }
    function yy_r3_29($yy_subpatterns)
    {
$this->token_type = self::T_IN;    }
    function yy_r3_31($yy_subpatterns)
    {
$this->token_type = self::T_QUESTION;    }
    function yy_r3_32($yy_subpatterns)
    {
$this->token_type = self::T_PIPE;    }
    function yy_r3_33($yy_subpatterns)
    {
$this->token_type = self::T_COLON;    }
    function yy_r3_34($yy_subpatterns)
    {
$this->token_type = self::T_LEFT_BRACKET;    }
    function yy_r3_35($yy_subpatterns)
    {
$this->token_type = self::T_RIGHT_BRACKET;    }
    function yy_r3_36($yy_subpatterns)
    {
$this->token_type = self::T_DOT;    }
    function yy_r3_37($yy_subpatterns)
    {
$this->token_type = self::T_ARROW;    }
    function yy_r3_38($yy_subpatterns)
    {
$this->token_type = self::T_LEFT_BRACE;    }
    function yy_r3_39($yy_subpatterns)
    {
$this->token_type = self::T_RIGHT_BRACE;    }
    function yy_r3_40($yy_subpatterns)
    {
$this->token_type = self::T_LEFT_PAREN;    }
    function yy_r3_41($yy_subpatterns)
    {
$this->token_type = self::T_RIGHT_PAREN;    }
    function yy_r3_42($yy_subpatterns)
    {
$this->token_type = self::T_PLUS;    }
    function yy_r3_43($yy_subpatterns)
    {
$this->token_type = self::T_MINUS;    }
    function yy_r3_44($yy_subpatterns)
    {
$this->token_type = self::T_MULTIPLICATION;    }
    function yy_r3_45($yy_subpatterns)
    {
$this->token_type = self::T_DIVISION;    }
    function yy_r3_46($yy_subpatterns)
    {
$this->token_type = self::T_MODULUS;    }
    function yy_r3_47($yy_subpatterns)
    {
$this->token_type = self::T_LE;    }
    function yy_r3_48($yy_subpatterns)
    {
$this->token_type = self::T_LT;    }
    function yy_r3_49($yy_subpatterns)
    {
$this->token_type = self::T_GE;    }
    function yy_r3_50($yy_subpatterns)
    {
$this->token_type = self::T_GT;    }
    function yy_r3_51($yy_subpatterns)
    {
$this->token_type = self::T_EX;    }
    function yy_r3_52($yy_subpatterns)
    {
$this->token_type = self::T_NX;    }
    function yy_r3_53($yy_subpatterns)
    {
$this->token_type = self::T_EQ;    }
    function yy_r3_54($yy_subpatterns)
    {
$this->token_type = self::T_NE;    }
    function yy_r3_55($yy_subpatterns)
    {
$this->token_type = self::T_SINGLE_QUOTED_STRING;    }
    function yy_r3_57($yy_subpatterns)
    {
$this->token_type = self::T_DOUBLE_QUOTED_STRING;    }
    function yy_r3_59($yy_subpatterns)
    {
$this->token_type = self::T_NUMBER;    }
    function yy_r3_61($yy_subpatterns)
    {
$this->token_type = self::T_ID;    }

}

/* End of file src/lexer.php */
