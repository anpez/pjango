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

# Optional id.
id_or_void			=	id
						|
.

# Id includes non-reserved words.
id					=	T_ID
						| T_BLOCK
						| T_EXTENDS
						| T_INCLUDE
						| T_COMMENT
						| T_ENDCOMMENT
						| T_IF
						| T_ELSE
						| T_ENDIF
						| T_FOR
						| T_EMPTY
						| T_ENDFOR
						| T_AUTOESCAPE
						| T_ENDAUTOESCAPE
						| T_ON
						| T_OFF
.

# All statements.
statement			=	T_HTML														{ $$ = $this->_code_line('html', array($1)); }
						| T_VARIABLE_START filtered_expression T_VARIABLE_END		{ $$ = $this->_code_line('variable', array($2)); }
						| T_BLOCK_START blocks										{ $$ = $2; }
.

# Blocks definition.
blocks				=	T_BLOCK id T_BLOCK_END statements T_BLOCK_START T_ENDBLOCK id_or_void T_BLOCK_END	{
																												$$ = $4;
																												array_unshift($$, $this->_code_line('start_block', array($2)));
																												$$[] = $this->_code_line('end_block', array($7));
																											}
	# extends 'file.html'
						| T_EXTENDS T_STRING T_BLOCK_END													{ $$ = $this->_code_line('extends', array($2)); }
	# extends template
						| T_EXTENDS id T_BLOCK_END														{ $$ = $this->_code_line('extends_var', array($2)); }

	# if statement
						| T_IF filtered_expression T_BLOCK_END elseif										{
																												$$ = $4;
																												array_unshift($$, $this->_code_line('if', array($2)));
																												$$[] = $this->_code_line('end_if');
																											}

	# for statement
						| T_FOR key_value T_IN filtered_expression T_BLOCK_END statements T_BLOCK_START T_ENDFOR T_BLOCK_END
																											{
																												$$ = $6;
																												array_unshift($$, $this->_code_line('for', array($2, $4)));
																												$$[] = $this->_code_line('end_for');
																											}
	# for..empty statement
						| T_FOR key_value T_IN filtered_expression T_BLOCK_END statements T_BLOCK_START T_EMPTY T_BLOCK_END statements T_BLOCK_START T_ENDFOR T_BLOCK_END
																											{
																												$$ = $6;
																												array_unshift($$, $this->_code_line('for_empty', array($2, $4)));
																												$$[] = $this->_code_line('empty');
																												$$ = array_merge($$, $10);
																												$$[] = $this->_code_line('end_for');
																											}

	# Comment
						| T_COMMENT T_BLOCK_END statements T_BLOCK_START T_ENDCOMMENT T_BLOCK_END			{ $$ = array(); }

	# Autoescape
						| T_AUTOESCAPE on_off T_BLOCK_END statements T_BLOCK_START T_ENDAUTOESCAPE T_BLOCK_END
																											{
																												$$ = $4;
																												array_unshift($$, $this->_code_line('autoescape', array($2)));
																												$$[] = $this->_code_line('end_autoescape');
																											}

	# Custom block
						| T_ID expression_list T_BLOCK_END													{ $$ = $this->_code_line('custom_block', array($2)); }
.

# "key, value" or just "value".
key_value			=	id T_COMMA id																		{ $$ = array($1, $3); }
						| id																				{ $$ = array($1); }
.

# "on" or "off".
on_off				=	T_ON
						| T_OFF
.

# List of expressions.
expression_list		=	expression_list filtered_expression
						|
.

# Multiple elseifs and end with an 'else'.
elseif				=	statements T_BLOCK_START T_ELSE T_IF filtered_expression T_BLOCK_END elseif			{
																												$$ = $1;
																												$$[] = $this->_code_line('else_if', array($5));
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
expression			=	expression T_OR expression									{ $$ = array(Pjango_parser::T_OR => array($1, $3)); }
						| expression T_XOR expression								{ $$ = array(Pjango_parser::T_XOR => array($1, $3)); }
						| expression T_AND expression								{ $$ = array(Pjango_parser::T_AND => array($1, $3)); }

						| expression T_QUESTION expression T_COLON expression		{ $$ = array(Pjango_parser::T_TERNARY_IF => array($1, $3, $5)); }

						| expression T_OR_SYMBOL expression							{ $$ = array(Pjango_parser::T_OR_SYMBOL => array($1, $3)); }
						| expression T_AND_SYMBOL expression						{ $$ = array(Pjango_parser::T_AND_SYMBOL => array($1, $3)); }

						| expression T_EQ expression								{ $$ = array(Pjango_parser::T_EQ => array($1, $3)); }
						| expression T_NE expression								{ $$ = array(Pjango_parser::T_NE => array($1, $3)); }
						| expression T_EX expression								{ $$ = array(Pjango_parser::T_EX => array($1, $3)); }
						| expression T_NX expression								{ $$ = array(Pjango_parser::T_NX => array($1, $3)); }

						| expression T_LT expression								{ $$ = array(Pjango_parser::T_LT => array($1, $3)); }
						| expression T_LE expression								{ $$ = array(Pjango_parser::T_LE => array($1, $3)); }
						| expression T_GT expression								{ $$ = array(Pjango_parser::T_GT => array($1, $3)); }
						| expression T_GE expression								{ $$ = array(Pjango_parser::T_GE => array($1, $3)); }

						| expression T_IN expression								{ $$ = array(Pjango_parser::T_IN => array($1, $3)); }
						| expression T_NOT_IN expression							{ $$ = array(Pjango_parser::T_NOT_IN => array($1, $3)); }
						| expression T_INX expression								{ $$ = array(Pjango_parser::T_INX => array($1, $3)); }
						| expression T_NOT_INX expression							{ $$ = array(Pjango_parser::T_NOT_INX => array($1, $3)); }

						| expression T_PLUS expression								{ $$ = array(Pjango_parser::T_PLUS => array($1, $3)); }
						| expression T_MINUS expression								{ $$ = array(Pjango_parser::T_MINUS => array($1, $3)); }
						| expression T_MULTIPLICATION expression					{ $$ = array(Pjango_parser::T_MULTIPLICATION => array($1, $3)); }
						| expression T_DIVISION expression							{ $$ = array(Pjango_parser::T_DIVISION => array($1, $3)); }
						| expression T_MODULUS expression							{ $$ = array(Pjango_parser::T_MODULUS => array($1, $3)); }

						| terminal													{ $$ = $1; }
						| T_NOT terminal											{ $$ = array(Pjango_parser::T_NOT => $2); }
						| T_MINUS terminal											{ $$ = array(Pjango_parser::T_UNARY_MINUS => $2); }
.

# Terminal symbols.
terminal			=	T_LEFT_PAREN filtered_expression T_RIGHT_PAREN				{ $$ = array(Pjango_parser::T_PARENS => $2); }
						| id array_or_object										{ $$ = array(Pjango_parser::T_VARIABLE => array($1, $2)); }
						| T_NUMBER													{ $$ = array(Pjango_parser::T_NUMBER => $1); }
						| T_SINGLE_QUOTED_STRING									{ $$ = array(Pjango_parser::T_SINGLE_QUOTED_STRING => $1); }
						| T_DOUBLE_QUOTED_STRING									{ $$ = array(Pjango_parser::T_DOUBLE_QUOTED_STRING => $1); }
						| T_TRUE													{ $$ = array(Pjango_parser::T_TRUE => 'TRUE'); }
						| T_FALSE													{ $$ = array(Pjango_parser::T_FALSE => 'FALSE'); }
.

# Array or object declarations.
array_or_object		=	array_or_object array										{ $$ = $1; $$[] = $2; }
						| array_or_object object									{ $$ = $1; $$[] = $2; }
						|															{ $$ = array(); }
.

# Array access.
array				=	T_LEFT_BRACKET filtered_expression T_RIGHT_BRACKET			{ $$ = array(Pjango_parser::T_ARRAY => $2); }
.

# Object access.
object				=	T_ARROW T_LEFT_BRACE filtered_expression T_RIGHT_BRACE		{ $$ = array(Pjango_parser::T_BRACED_OBJECT => $3); }
						| T_DOT T_LEFT_BRACE filtered_expression T_RIGHT_BRACE		{ $$ = array(Pjango_parser::T_BRACED_OBJECT => $3); }
						| T_ARROW id												{ $$ = array(Pjango_parser::T_OBJECT => $2); }
						| T_DOT id													{ $$ = array(Pjango_parser::T_OBJECT => $2); }
.

# Expression with optional filters.
filtered_expression	=	expression filters											{ $$ = array($1, $2); }
.

# List of filters.
filters				=	filters T_PIPE id parameters								{ $1[] = array('name' => $3, 'parameters' => $4); $$ = $1; }
						|															{ $$ = array(); }
.

# List of parameters.
parameters			=	parameters T_COLON expression								{ $1[] = $3; $$ = $1; }
						|															{ $$ = array(); }
.
