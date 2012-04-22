%class Pjango_base_parser
%start start

# Operator precedence.
%left T_OR
%left T_XOR
%left T_AND
%left T_QUESTION T_COLON
%left T_OR_SYMBOL
%left T_AND_SYMBOL
%nonassoc T_EQ T_NE T_EX T_NX
%nonassoc T_LT T_LE T_GT T_GE
%nonassoc T_IN T_NOT_IN T_INX T_NOT_INX
%left T_PLUS T_MINUS
%left T_MULTIPLICATION T_DIVISION T_MODULUS
%right T_NOT
%left T_LEFT_BRACKET T_LEFT_BRACE
%left T_PIPE

# Start.
start				=	statements													{ $this->_code($1); }
.

# List of statements.
statements			=	statements statement										{
																						if (isset($2[0]))
																						{
																							$$ = array_merge($1, $2);
																						}
																						else if ($2)
																						{
																							$$ = $1;
																							$$[] = $2;
																						}
																					}
						|															{ $$ = array(); }
.

# Recognize either an ID or a string.
id_or_string		=	T_ID
						| T_SINGLE_QUOTED_STRING
						| T_DOUBLE_QUOTED_STRING
.

# Optional id.
id_or_void			=	T_ID
						|
.

# All statements.
statement			=	T_HTML														{ $$ = $this->_code_line('html', array($1)); }
						| T_EXTENDS id_or_string T_BLOCK_END						{ $$ = $this->_code_line('extends', array($2)); }
						| T_VARIABLE_START filtered_expression T_VARIABLE_END		{ $$ = $this->_code_line('variable', array($2['expression'])); }
						| T_BLOCK_START blocks										{ $$ = $2; }
.

# Blocks definition.
blocks				=	T_BLOCK T_ID T_BLOCK_END statements T_BLOCK_START T_ENDBLOCK id_or_void T_BLOCK_END	{
																												$$ = $4;
																												array_unshift($$, $this->_code_line('start_block', array($2)));
																												$$[] = $this->_code_line('end_block', array($7));
																											}
						| T_IF filtered_expression T_BLOCK_END elseif										{
																												$$ = $4;
																												array_unshift($$, $this->_code_line('if', array($2['safe_expression'])));
																												$$[] = $this->_code_line('end_if');
																											}
						| T_FOR T_ID T_IN filtered_expression T_BLOCK_END statements T_BLOCK_START T_ENDFOR T_BLOCK_END
																											{
																												$$ = $6;
																												array_unshift($$, $this->_code_line('for', array('$'.$2, $4)));
																												$$[] = $this->_code_line('end_for');
																											}
						| T_FOR T_ID T_IN filtered_expression T_BLOCK_END statements T_BLOCK_START T_EMPTY T_BLOCK_END statements T_BLOCK_START T_ENDFOR T_BLOCK_END
																											{
																												$$ = $6;
																												array_unshift($$, $this->_code_line('for_empty', array('$'.$2, $4)));
																												$$ = array_merge($$, $10);
																												$$[] = $this->_code_line('end_for');
																											}
						| T_COMMENT T_BLOCK_END statements T_BLOCK_START T_ENDCOMMENT T_BLOCK_END			{ $$ = array(); }
						| T_ID expression_list T_BLOCK_END													{ $$ = $this->_code_line('custom_block', array($2['expression'])); }
.

expression_list		=	expression_list filtered_expression
						|
.

# Multiple elseifs and end with an 'else'.
elseif				=	statements T_BLOCK_START T_ELSE T_IF filtered_expression T_BLOCK_END elseif			{
																												$$ = $1;
																												$$[] = $this->_code_line('else_if', array($5['safe_expression']));
																												$$ = array_merge($$, $7);
																											}
						| else																				{ $$ = $1; }
.

# Optional final 'else'.
else				=	statements T_BLOCK_START T_ELSE T_BLOCK_END statements T_BLOCK_START T_ENDIF T_BLOCK_END
																											{
																												$$ = array_merge($1, array($this->_code_line('else')), $5);
																											}
						| statements T_BLOCK_START T_ENDIF T_BLOCK_END
.

# Expressions.
expression			=	expression T_OR expression									{ $$ = array('expression' => $1['expression'].' OR '.$3['expression'], 'safe_expression' => $1['safe_expression'].' OR '.$3['safe_expression']); }
						| expression T_XOR expression								{ $$ = array('expression' => $1['expression'].' XOR '.$3['expression'], 'safe_expression' => $1['safe_expression'].' XOR '.$3['safe_expression']); }
						| expression T_AND expression								{ $$ = array('expression' => $1['expression'].' AND '.$3['expression'], 'safe_expression' => $1['safe_expression'].' AND '.$3['safe_expression']); }

						| expression T_QUESTION expression T_COLON expression		{
																						$$ = array
																						(
																							'expression' => $1['expression'].'?'.$3['expression'].':'.$5['expression'],
																							'safe_expression' => $1['safe_expression'].'?'.$3['safe_expression'].':'.$5['safe_expression']
																						);
																					}

						| expression T_OR_SYMBOL expression							{ $$ = array('expression' => $1['expression'].'||'.$3['expression'], 'safe_expression' => $1['safe_expression'].'||'.$3['safe_expression']); }
						| expression T_AND_SYMBOL expression						{ $$ = array('expression' => $1['expression'].'&&'.$3['expression'], 'safe_expression' => $1['safe_expression'].'&&'.$3['safe_expression']); }

						| expression T_EQ expression								{ $$ = array('expression' => $1['expression'].'=='.$3['expression'], 'safe_expression' => $1['safe_expression'].'=='.$3['safe_expression']); }
						| expression T_NE expression								{ $$ = array('expression' => $1['expression'].'!='.$3['expression'], 'safe_expression' => $1['safe_expression'].'!='.$3['safe_expression']); }
						| expression T_EX expression								{ $$ = array('expression' => $1['expression'].'==='.$3['expression'], 'safe_expression' => $1['safe_expression'].'==='.$3['safe_expression']); }
						| expression T_NX expression								{ $$ = array('expression' => $1['expression'].'!=='.$3['expression'], 'safe_expression' => $1['safe_expression'].'!=='.$3['safe_expression']); }

						| expression T_LT expression								{ $$ = array('expression' => $1['expression'].'<'.$3['expression'], 'safe_expression' => $1['safe_expression'].'<'.$3['safe_expression']); }
						| expression T_LE expression								{ $$ = array('expression' => $1['expression'].'<='.$3['expression'], 'safe_expression' => $1['safe_expression'].'<='.$3['safe_expression']); }
						| expression T_GT expression								{ $$ = array('expression' => $1['expression'].'>'.$3['expression'], 'safe_expression' => $1['safe_expression'].'>'.$3['safe_expression']); }
						| expression T_GE expression								{ $$ = array('expression' => $1['expression'].'>='.$3['expression'], 'safe_expression' => $1['safe_expression'].'>='.$3['safe_expression']); }

						| expression T_IN expression								{
																						$$ = array
																						(
																							'expression' => '(('.$3['expression'].'===(array)'.$3['expression'].')?in_array('.$1['expression'].', '.$3['expression'].'):FALSE!==strpos('.$3['expression'].', '.$1['expression'].'))',
																							'safe_expression' => '(is_array('.$3['safe_expression'].')?in_array('.$1['safe_expression'].', '.$3['safe_expression'].'):FALSE!==strpos('.$3['safe_expression'].', '.$1['safe_expression'].'))',
																						);
																					}
						| expression T_NOT_IN expression							{ $$ = '(is_array('.$3['expression'].')?!in_array('.$1['expression'].', '.$3['expression'].'):FALSE===strpos('.$3['expression'].', '.$1['expression'].'))'; }
						| expression T_INX expression								{ $$ = '(is_array('.$3['expression'].')?in_array('.$1['expression'].', '.$3['expression'].', TRUE):FALSE!==strpos('.$3['expression'].', '.$1['expression'].'))'; }
						| expression T_NOT_INX expression							{ $$ = '(is_array('.$3['expression'].')?!in_array('.$1['expression'].', '.$3['expression'].', TRUE):FALSE===strpos('.$3['expression'].', '.$1['expression'].'))'; }

						| expression T_PLUS expression								{ $$ = array('expression' => $1['expression'].'+'.$3['expression'], 'safe_expression' => $1['expression'].'+'.$3); }
						| expression T_MINUS expression								{ $$ = array('expression' => $1['expression'].'-'.$3['expression'], 'safe_expression' => $1['expression'].'-'.$3); }
						| expression T_MULTIPLICATION expression					{ $$ = array('expression' => $1['expression'].'*'.$3['expression'], 'safe_expression' => $1['expression'].'*'.$3); }
						| expression T_DIVISION expression							{ $$ = array('expression' => $1['expression'].'/'.$3['expression'], 'safe_expression' => $1['expression'].'/'.$3); }
						| expression T_MODULUS expression							{ $$ = array('expression' => $1['expression'].'%'.$3['expression'], 'safe_expression' => $1['expression'].'%'.$3); }

						| terminal
						| T_NOT terminal											{ $$ = array('expression' => '!'.$2['expression'], 'safe_expression' => '!'.$2['safe_expression']); }
						| T_MINUS terminal											{ $$ = array('expression' => '-'.$2['expression'], 'safe_expression' => '-'.$2['safe_expression']); }
.

# Terminal symbols.
terminal			=	T_LEFT_PAREN filtered_expression T_RIGHT_PAREN				{ $$ = $2; }
						| T_ID array_or_object										{
																						$$ = array
																						(
																							'expression'	=> '$'.$1.$2['expression'],
																							'safe_expression'	=> '@$'.$1.$2['safe_expression']
																						);
																					}
						| T_NUMBER													{ $$ = array('expression' => $1, 'safe_expression' => $1); }
						| T_SINGLE_QUOTED_STRING									{ $$ = array('expression' => $1, 'safe_expression' => $1); }
						| T_DOUBLE_QUOTED_STRING									{ $$ = array('expression' => $1, 'safe_expression' => $1); }
						| T_TRUE													{ $$ = array('expression' => 'TRUE', 'safe_expression' => 'TRUE'); }
						| T_FALSE													{ $$ = array('expression' => 'FALSE', 'safe_expression' => 'FALSE'); }
.

# Array or object declarations.
array_or_object		=	array_or_object array										{
																						$$ = array
																						(
																							'expression' => $1['expression'].$2['expression'],
																							'safe_expression' => $1['safe_expression'].$2['safe_expression']
																						);
																					}
						| array_or_object object									{
																						$$ = array
																						(
																							'expression' => $1['expression'].$2['expression'],
																							'safe_expression' => $1['safe_expression'].$2['safe_expression']
																						);
																					}
						|															{ $$ = array('expression' => '', 'safe_expression' => ''); }
.

# Array access.
array				=	T_LEFT_BRACKET filtered_expression T_RIGHT_BRACKET			{
																						$$ = array
																						(
																							'expression' => '['.$2['expression'].']',
																							'safe_expression' => '['.$2['safe_expression'].']'
																						);
																					}
.

# Object access.
object				=	T_ARROW T_LEFT_BRACE filtered_expression T_RIGHT_BRACE		{
																						$$ = array
																						(
																							'expression' => '->{'.$3['expression'].'}',
																							'safe_expression' => '->{'.$3['safe_expression'].'}'
																						);
																					}
						| T_DOT T_LEFT_BRACE filtered_expression T_RIGHT_BRACE		{
																						$$ = array
																						(
																							'expression' => '->{'.$3['expression'].'}',
																							'safe_expression' => '->{'.$3['safe_expression'].'}'
																						);
																					}
						| T_ARROW T_ID												{ $$ = array('expression' => '->'.$2, 'safe_expression' => '->'.$2); }
						| T_DOT T_ID												{ $$ = array('expression' => '->'.$2, 'safe_expression' => '->'.$2); }
.

# Expression with optional filters.
filtered_expression	=	expression filters											{ $$ = $this->_parse_filtered_expression($1, $2); }
.

# List of filters.
filters				=	filters T_PIPE T_ID parameters								{ $1[] = array('name' => $3, 'parameters' => $4); $$ = $1; }
						|															{ $$ = array(); }
.

# List of parameters.
parameters			=	parameters T_COLON expression								{ $1[] = $3; $$ = $1; }
						|															{ $$ = array(); }
.
