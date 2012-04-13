%class Pjango_base_parser
%start statements

# Operator precedence.
%left T_OR
%left T_XOR
%left T_AND
%left T_QUESTION T_COLON
%nonassoc T_EQ T_NE T_EX T_NX
%nonassoc T_LT T_LE T_GT T_GE
%nonassoc T_IN T_NOT_IN T_INX T_NOT_INX
%left T_PLUS T_MINUS
%left T_MULTIPLICATION T_DIVISION T_MODULUS
%right T_NOT
%left T_LEFT_BRACKET T_LEFT_BRACE
%left T_PIPE


# List of statements.
statements			=	statements statement										{ echo $2; }
						|															{ $$ = array(); }
.

# Recognize either an ID or a string.
id_or_string		=	T_ID
						| T_SINGLE_QUOTED_STRING
						| T_DOUBLE_QUOTED_STRING
.

# Recognize either an ID or an empty string.
id_or_void			=	T_ID
						|
.

# All statements.
statement			=	T_HTML	{ $$ = NULL; }
						| T_EXTENDS id_or_string T_BLOCK_END statements	{ echo 'extends '.$3."\n"; foreach($5 as $c) echo $c; }
						| T_VARIABLE_START filtered_expression T_VARIABLE_END												{ $$ = NULL; }
						| T_BLOCK_START blocks																	{ $$ = $2; }
.

# Blocks definition.
blocks				=	T_BLOCK T_ID T_BLOCK_END statements T_BLOCK_START T_ENDBLOCK id_or_void T_BLOCK_END		{ $$ = NULL; }
						| T_IF filtered_expression T_BLOCK_END elseif											{ $$ = NULL; }
						| T_COMMENT T_BLOCK_END statements T_BLOCK_START T_ENDCOMMENT T_BLOCK_END				{ $$ = NULL; }
.

# Multiple elseifs and end with an 'else'.
elseif				=	statements T_BLOCK_START T_ELSE T_IF filtered_expression T_BLOCK_END elseif
						| else
.

# Optional final 'else'.
else				=	statements T_BLOCK_START T_ELSE T_BLOCK_END statements T_BLOCK_START T_ENDIF T_BLOCK_END
						| statements T_BLOCK_START T_ENDIF T_BLOCK_END
.

# Optional id.
end_block			=	T_ID
						|															{ $$ = NULL; }
.

# Expressions.
expression			=	expression T_OR expression									{ $$ = $1.'||'.$3; }
						| expression T_XOR expression								{ $$ = $1.' XOR '.$3; }
						| expression T_AND expression								{ $$ = $1.'&&'.$3; }

						| expression T_QUESTION expression T_COLON expression		{ $$ = $1.'?'.$3.':'.$5; }

						| expression T_EQ expression								{ $$ = $1.'=='.$3; }
						| expression T_NE expression								{ $$ = $1.'!='.$3; }
						| expression T_EX expression								{ $$ = $1.'==='.$3; }
						| expression T_NX expression								{ $$ = $1.'!=='.$3; }

						| expression T_LT expression								{ $$ = $1.'<'.$3; }
						| expression T_LE expression								{ $$ = $1.'<='.$3; }
						| expression T_GT expression								{ $$ = $1.'>'.$3; }
						| expression T_GE expression								{ $$ = $1.'>='.$3; }

						| expression T_IN expression								{ $$ = '(is_array('.$3.')?in_array('.$1.', '.$3.'):FALSE!==strpos('.$3.', '.$1.'))'; }
						| expression T_NOT_IN expression							{ $$ = '(is_array('.$3.')?!in_array('.$1.', '.$3.'):FALSE===strpos('.$3.', '.$1.'))'; }
						| expression T_INX expression								{ $$ = '(is_array('.$3.')?in_array('.$1.', '.$3.', TRUE):FALSE!==strpos('.$3.', '.$1.'))'; }
						| expression T_NOT_INX expression							{ $$ = '(is_array('.$3.')?!in_array('.$1.', '.$3.', TRUE):FALSE===strpos('.$3.', '.$1.'))'; }

						| expression T_PLUS expression								{ $$ = $1.'+'.$3; }
						| expression T_MINUS expression								{ $$ = $1.'-'.$3; }
						| expression T_MULTIPLICATION expression					{ $$ = $1.'*'.$3; }
						| expression T_DIVISION expression							{ $$ = $1.'/'.$3; }
						| expression T_MODULUS expression							{ $$ = $1.'%'.$3; }

						| terminal
						| T_NOT terminal											{ $$ = '!'.$2; }
						| T_MINUS terminal											{ $$ = '-'.$2; }
.

# Terminal symbols.
terminal			=	T_LEFT_PAREN filtered_expression T_RIGHT_PAREN				{ $$ = $2; }
						| T_ID array_or_object										{ $$ = '$'.$1.$2; }
						| T_NUMBER
						| T_SINGLE_QUOTED_STRING
						| T_DOUBLE_QUOTED_STRING
.

# Array or object declarations.
array_or_object		=	array_or_object array										{ $$ = $1.$2; }
						| array_or_object object									{ $$ = $1.$2; }
						|															{ $$ = ''; }
.

# Array access.
array				=	T_LEFT_BRACKET filtered_expression T_RIGHT_BRACKET			{ $$ = '['.$2.']'; }
.

# Object access.
object				=	T_ARROW T_LEFT_BRACE filtered_expression T_RIGHT_BRACE		{ $$ = '->{'.$3.'}'; }
						| T_DOT T_LEFT_BRACE filtered_expression T_RIGHT_BRACE		{ $$ = '->{'.$3.'}'; }
						| T_ARROW T_ID												{ $$ = '->'.$2; }
						| T_DOT T_ID												{ $$ = '->'.$2; }
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
