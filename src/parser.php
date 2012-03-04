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
              3 => 0,
              4 => 0,
              5 => 0,
            );
        if ($this->_counter >= strlen($this->_data)) {
            return false; // end of input
        }
        $yy_global_pattern = '/\G([ \t\n\r]+)|\G(\\{\\{)|\G(\\{%)|\G(\\{#)|\G([\x00-\xff])/';

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
        1 => array(0, "\G(\\{\\{)|\G(\\{%)|\G(\\{#)|\G([\x00-\xff])"),
        2 => array(0, "\G(\\{%)|\G(\\{#)|\G([\x00-\xff])"),
        3 => array(0, "\G(\\{#)|\G([\x00-\xff])"),
        4 => array(0, "\G([\x00-\xff])"),
        5 => array(0, ""),
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
$this->token_type = self::TOKEN_WHITESPACE;    }
    function yy_r1_2($yy_subpatterns)
    {
$this->token_type = self::TOKEN_VARIABLE_START; $this->yypushstate(self::VARIABLE);    }
    function yy_r1_3($yy_subpatterns)
    {
$this->token_type = self::TOKEN_BLOCK_START; $this->yypushstate(self::BLOCK);    }
    function yy_r1_4($yy_subpatterns)
    {
$this->token_type = self::TOKEN_COMMENT_START; $this->yypushstate(self::COMMENT);    }
    function yy_r1_5($yy_subpatterns)
    {
$this->token_type = self::TOKEN_HTML;    }


	
    function yylex2()
    {
        $tokenMap = array (
              1 => 0,
              2 => 0,
            );
        if ($this->_counter >= strlen($this->_data)) {
            return false; // end of input
        }
        $yy_global_pattern = '/\G(#\\})|\G([\x00-\xff])/';

        do {
            if (preg_match($yy_global_pattern,$this->_data, $yymatches, null, $this->_counter)) {
                $yysubmatches = $yymatches;
                $yymatches = array_filter($yymatches, 'strlen'); // remove empty sub-patterns
                if (!count($yymatches)) {
                    throw new Exception('Error: lexing failed because a rule matched' .
                        ' an empty string.  Input "' . substr($this->_data,
                        $this->_counter, 5) . '... state COMMENT');
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
        1 => array(0, "\G([\x00-\xff])"),
        2 => array(0, ""),
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


    const COMMENT = 2;
    function yy_r2_1($yy_subpatterns)
    {
$this->token_type = self::TOKEN_COMMENT_END; $this->yypopstate();    }
    function yy_r2_2($yy_subpatterns)
    {
$this->token_type = self::TOKEN_COMMENT_TEXT;    }


	
    function yylex3()
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
            );
        if ($this->_counter >= strlen($this->_data)) {
            return false; // end of input
        }
        $yy_global_pattern = '/\G([ \t\n\r]+)|\G([a-zA-Z_\x7f-\xff][a-zA-Z0-9_\x7f-\xff]*)|\G(\\|)|\G(:)|\G(\x27)|\G(\")|\G(\\}\\})|\G([\x00-\xff])/';

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
        1 => array(0, "\G([a-zA-Z_\x7f-\xff][a-zA-Z0-9_\x7f-\xff]*)|\G(\\|)|\G(:)|\G(\x27)|\G(\")|\G(\\}\\})|\G([\x00-\xff])"),
        2 => array(0, "\G(\\|)|\G(:)|\G(\x27)|\G(\")|\G(\\}\\})|\G([\x00-\xff])"),
        3 => array(0, "\G(:)|\G(\x27)|\G(\")|\G(\\}\\})|\G([\x00-\xff])"),
        4 => array(0, "\G(\x27)|\G(\")|\G(\\}\\})|\G([\x00-\xff])"),
        5 => array(0, "\G(\")|\G(\\}\\})|\G([\x00-\xff])"),
        6 => array(0, "\G(\\}\\})|\G([\x00-\xff])"),
        7 => array(0, "\G([\x00-\xff])"),
        8 => array(0, ""),
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


    const VARIABLE = 3;
    function yy_r3_1($yy_subpatterns)
    {
return FALSE;    }
    function yy_r3_2($yy_subpatterns)
    {
$this->token_type = self::TOKEN_ID;    }
    function yy_r3_3($yy_subpatterns)
    {
$this->token_type = self::TOKEN_PIPE;    }
    function yy_r3_4($yy_subpatterns)
    {
$this->token_type = self::TOKEN_COLON;    }
    function yy_r3_5($yy_subpatterns)
    {
$this->yypushstate(self::SINGLE_QUOTED_STRING);    }
    function yy_r3_6($yy_subpatterns)
    {
$this->yypushstate(self::DOUBLE_QUOTED_STRING);    }
    function yy_r3_7($yy_subpatterns)
    {
$this->yypopstate();    }
    function yy_r3_8($yy_subpatterns)
    {
return FALSE;    }


	
    function yylex4()
    {
        $tokenMap = array (
              1 => 0,
              2 => 0,
              3 => 0,
              4 => 0,
              5 => 0,
            );
        if ($this->_counter >= strlen($this->_data)) {
            return false; // end of input
        }
        $yy_global_pattern = '/\G([ \t\n\r]+)|\G(\x27)|\G(\")|\G(%\\})|\G([\x00-\xff])/';

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
                $r = $this->{'yy_r4_' . $this->_token}($yysubmatches);
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
        1 => array(0, "\G(\x27)|\G(\")|\G(%\\})|\G([\x00-\xff])"),
        2 => array(0, "\G(\")|\G(%\\})|\G([\x00-\xff])"),
        3 => array(0, "\G(%\\})|\G([\x00-\xff])"),
        4 => array(0, "\G([\x00-\xff])"),
        5 => array(0, ""),
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
                        $r = $this->{'yy_r4_' . $this->_token}($yysubmatches);
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


    const BLOCK = 4;
    function yy_r4_1($yy_subpatterns)
    {
return FALSE;    }
    function yy_r4_2($yy_subpatterns)
    {
$this->yypushstate(self::SINGLE_QUOTED_STRING);    }
    function yy_r4_3($yy_subpatterns)
    {
$this->yypushstate(self::DOUBLE_QUOTED_STRING);    }
    function yy_r4_4($yy_subpatterns)
    {
$this->yypopstate();    }
    function yy_r4_5($yy_subpatterns)
    {
return FALSE;    }


	
    function yylex5()
    {
        $tokenMap = array (
              1 => 0,
              2 => 0,
              3 => 0,
            );
        if ($this->_counter >= strlen($this->_data)) {
            return false; // end of input
        }
        $yy_global_pattern = '/\G(\\\\\x27)|\G(\x27)|\G([\x00-\xff])/';

        do {
            if (preg_match($yy_global_pattern,$this->_data, $yymatches, null, $this->_counter)) {
                $yysubmatches = $yymatches;
                $yymatches = array_filter($yymatches, 'strlen'); // remove empty sub-patterns
                if (!count($yymatches)) {
                    throw new Exception('Error: lexing failed because a rule matched' .
                        ' an empty string.  Input "' . substr($this->_data,
                        $this->_counter, 5) . '... state SINGLE_QUOTED_STRING');
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
                $r = $this->{'yy_r5_' . $this->_token}($yysubmatches);
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
        1 => array(0, "\G(\x27)|\G([\x00-\xff])"),
        2 => array(0, "\G([\x00-\xff])"),
        3 => array(0, ""),
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
                        $r = $this->{'yy_r5_' . $this->_token}($yysubmatches);
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


    const SINGLE_QUOTED_STRING = 5;
    function yy_r5_1($yy_subpatterns)
    {
    }
    function yy_r5_2($yy_subpatterns)
    {
$this->yypopstate();    }
    function yy_r5_3($yy_subpatterns)
    {
return FALSE;    }


	
    function yylex6()
    {
        $tokenMap = array (
              1 => 0,
              2 => 0,
              3 => 0,
            );
        if ($this->_counter >= strlen($this->_data)) {
            return false; // end of input
        }
        $yy_global_pattern = '/\G(\\\\\")|\G(\")|\G([\x00-\xff])/';

        do {
            if (preg_match($yy_global_pattern,$this->_data, $yymatches, null, $this->_counter)) {
                $yysubmatches = $yymatches;
                $yymatches = array_filter($yymatches, 'strlen'); // remove empty sub-patterns
                if (!count($yymatches)) {
                    throw new Exception('Error: lexing failed because a rule matched' .
                        ' an empty string.  Input "' . substr($this->_data,
                        $this->_counter, 5) . '... state DOUBLE_QUOTED_STRING');
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
                $r = $this->{'yy_r6_' . $this->_token}($yysubmatches);
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
        1 => array(0, "\G(\")|\G([\x00-\xff])"),
        2 => array(0, "\G([\x00-\xff])"),
        3 => array(0, ""),
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
                        $r = $this->{'yy_r6_' . $this->_token}($yysubmatches);
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


    const DOUBLE_QUOTED_STRING = 6;
    function yy_r6_1($yy_subpatterns)
    {
    }
    function yy_r6_2($yy_subpatterns)
    {
$this->yypopstate();    }
    function yy_r6_3($yy_subpatterns)
    {
return FALSE;    }

}

/* End of file src/parser.php */
