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
$this->token_type = self::TOKEN_VARIABLE_START; $this->yypushstate(self::VARIABLE);    }
    function yy_r1_2($yy_subpatterns)
    {
$this->token_type = self::TOKEN_BLOCK_START; $this->yypushstate(self::BLOCK);    }
    function yy_r1_3($yy_subpatterns)
    {
return FALSE;    }
    function yy_r1_5($yy_subpatterns)
    {
$this->token_type = self::TOKEN_HTML;    }


	
    function yylex2()
    {
        $tokenMap = array (
              1 => 0,
              2 => 0,
              3 => 0,
              4 => 0,
              5 => 0,
              6 => 0,
              7 => 0,
              8 => 0,
              9 => 0,
              10 => 0,
              11 => 0,
              12 => 1,
              14 => 1,
              16 => 1,
            );
        if ($this->_counter >= strlen($this->_data)) {
            return false; // end of input
        }
        $yy_global_pattern = '/\G([ \t\n\r]+)|\G(\\}\\})|\G([a-zA-Z_\x7f-\xff][a-zA-Z0-9_\x7f-\xff]*)|\G(\\|)|\G(:)|\G(\\[)|\G(\\])|\G(\\.)|\G(->)|\G(\\{)|\G(\\})|\G(\x27(\\\\\\\\|\\\\\x27|.|[\r\n])*?\x27)|\G(\"(\\\\\\\\|\\\\\"|.|[\r\n])*?\")|\G([0-9]+(\\.[0-9]+)?)/';

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
        1 => array(0, "\G(\\}\\})|\G([a-zA-Z_\x7f-\xff][a-zA-Z0-9_\x7f-\xff]*)|\G(\\|)|\G(:)|\G(\\[)|\G(\\])|\G(\\.)|\G(->)|\G(\\{)|\G(\\})|\G(\x27(\\\\\\\\|\\\\\x27|.|[\r\n])*?\x27)|\G(\"(\\\\\\\\|\\\\\"|.|[\r\n])*?\")|\G([0-9]+(\\.[0-9]+)?)"),
        2 => array(0, "\G([a-zA-Z_\x7f-\xff][a-zA-Z0-9_\x7f-\xff]*)|\G(\\|)|\G(:)|\G(\\[)|\G(\\])|\G(\\.)|\G(->)|\G(\\{)|\G(\\})|\G(\x27(\\\\\\\\|\\\\\x27|.|[\r\n])*?\x27)|\G(\"(\\\\\\\\|\\\\\"|.|[\r\n])*?\")|\G([0-9]+(\\.[0-9]+)?)"),
        3 => array(0, "\G(\\|)|\G(:)|\G(\\[)|\G(\\])|\G(\\.)|\G(->)|\G(\\{)|\G(\\})|\G(\x27(\\\\\\\\|\\\\\x27|.|[\r\n])*?\x27)|\G(\"(\\\\\\\\|\\\\\"|.|[\r\n])*?\")|\G([0-9]+(\\.[0-9]+)?)"),
        4 => array(0, "\G(:)|\G(\\[)|\G(\\])|\G(\\.)|\G(->)|\G(\\{)|\G(\\})|\G(\x27(\\\\\\\\|\\\\\x27|.|[\r\n])*?\x27)|\G(\"(\\\\\\\\|\\\\\"|.|[\r\n])*?\")|\G([0-9]+(\\.[0-9]+)?)"),
        5 => array(0, "\G(\\[)|\G(\\])|\G(\\.)|\G(->)|\G(\\{)|\G(\\})|\G(\x27(\\\\\\\\|\\\\\x27|.|[\r\n])*?\x27)|\G(\"(\\\\\\\\|\\\\\"|.|[\r\n])*?\")|\G([0-9]+(\\.[0-9]+)?)"),
        6 => array(0, "\G(\\])|\G(\\.)|\G(->)|\G(\\{)|\G(\\})|\G(\x27(\\\\\\\\|\\\\\x27|.|[\r\n])*?\x27)|\G(\"(\\\\\\\\|\\\\\"|.|[\r\n])*?\")|\G([0-9]+(\\.[0-9]+)?)"),
        7 => array(0, "\G(\\.)|\G(->)|\G(\\{)|\G(\\})|\G(\x27(\\\\\\\\|\\\\\x27|.|[\r\n])*?\x27)|\G(\"(\\\\\\\\|\\\\\"|.|[\r\n])*?\")|\G([0-9]+(\\.[0-9]+)?)"),
        8 => array(0, "\G(->)|\G(\\{)|\G(\\})|\G(\x27(\\\\\\\\|\\\\\x27|.|[\r\n])*?\x27)|\G(\"(\\\\\\\\|\\\\\"|.|[\r\n])*?\")|\G([0-9]+(\\.[0-9]+)?)"),
        9 => array(0, "\G(\\{)|\G(\\})|\G(\x27(\\\\\\\\|\\\\\x27|.|[\r\n])*?\x27)|\G(\"(\\\\\\\\|\\\\\"|.|[\r\n])*?\")|\G([0-9]+(\\.[0-9]+)?)"),
        10 => array(0, "\G(\\})|\G(\x27(\\\\\\\\|\\\\\x27|.|[\r\n])*?\x27)|\G(\"(\\\\\\\\|\\\\\"|.|[\r\n])*?\")|\G([0-9]+(\\.[0-9]+)?)"),
        11 => array(0, "\G(\x27(\\\\\\\\|\\\\\x27|.|[\r\n])*?\x27)|\G(\"(\\\\\\\\|\\\\\"|.|[\r\n])*?\")|\G([0-9]+(\\.[0-9]+)?)"),
        12 => array(1, "\G(\"(\\\\\\\\|\\\\\"|.|[\r\n])*?\")|\G([0-9]+(\\.[0-9]+)?)"),
        14 => array(2, "\G([0-9]+(\\.[0-9]+)?)"),
        16 => array(3, ""),
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
$this->token_type = self::TOKEN_VARIABLE_END; $this->yypopstate();    }
    function yy_r2_3($yy_subpatterns)
    {
$this->token_type = self::TOKEN_ID;    }
    function yy_r2_4($yy_subpatterns)
    {
$this->token_type = self::TOKEN_PIPE;    }
    function yy_r2_5($yy_subpatterns)
    {
$this->token_type = self::TOKEN_COLON;    }
    function yy_r2_6($yy_subpatterns)
    {
$this->token_type = self::TOKEN_LEFT_BRACKET;    }
    function yy_r2_7($yy_subpatterns)
    {
$this->token_type = self::TOKEN_RIGHT_BRACKET;    }
    function yy_r2_8($yy_subpatterns)
    {
$this->token_type = self::TOKEN_DOT;    }
    function yy_r2_9($yy_subpatterns)
    {
$this->token_type = self::TOKEN_ARROW;    }
    function yy_r2_10($yy_subpatterns)
    {
$this->token_type = self::TOKEN_LEFT_BRACE;    }
    function yy_r2_11($yy_subpatterns)
    {
$this->token_type = self::TOKEN_RIGHT_BRACE;    }
    function yy_r2_12($yy_subpatterns)
    {
$this->token_type = self::TOKEN_SINGLE_QUOTED_STRING;    }
    function yy_r2_14($yy_subpatterns)
    {
$this->token_type = self::TOKEN_DOUBLE_QUOTED_STRING;    }
    function yy_r2_16($yy_subpatterns)
    {
$this->token_type = self::TOKEN_NUMBER;    }


	
    function yylex3()
    {
        $tokenMap = array (
              1 => 0,
              2 => 1,
              4 => 1,
              6 => 0,
              7 => 0,
            );
        if ($this->_counter >= strlen($this->_data)) {
            return false; // end of input
        }
        $yy_global_pattern = '/\G([ \t\n\r]+)|\G(\x27(\\\\\\\\|\\\\\x27|.|[\r\n])*?\x27)|\G(\"(\\\\\\\\|\\\\\"|.|[\r\n])*?\")|\G(%\\})|\G([\x00-\xff])/';

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
        1 => array(0, "\G(\x27(\\\\\\\\|\\\\\x27|.|[\r\n])*?\x27)|\G(\"(\\\\\\\\|\\\\\"|.|[\r\n])*?\")|\G(%\\})|\G([\x00-\xff])"),
        2 => array(1, "\G(\"(\\\\\\\\|\\\\\"|.|[\r\n])*?\")|\G(%\\})|\G([\x00-\xff])"),
        4 => array(2, "\G(%\\})|\G([\x00-\xff])"),
        6 => array(2, "\G([\x00-\xff])"),
        7 => array(2, ""),
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
$this->token_type = self::TOKEN_SINGLE_QUOTED_STRING;    }
    function yy_r3_4($yy_subpatterns)
    {
$this->token_type = self::TOKEN_DOUBLE_QUOTED_STRING;    }
    function yy_r3_6($yy_subpatterns)
    {
$this->token_type = self::TOKEN_BLOCK_END; $this->yypopstate();    }
    function yy_r3_7($yy_subpatterns)
    {
return FALSE;    }

}

/* End of file src/parser.php */
