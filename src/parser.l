%class Pjango_base_parser
%start start

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

start				=	statement start
						|
.

statement			=	T_HTML { echo $1; }
						| T_VARIABLE_START filtered_expression T_VARIABLE_END { echo $2; }
						| T_BLOCK_START T_BLOCK_END { echo ""; }
.

expression			=	expression T_OR expression { $$ = $1.'||'.$3; }
						| expression T_XOR expression { $$ = $1.' XOR '.$3; }
						| expression T_AND expression { $$ = $1.'&&'.$3; }

						| expression T_QUESTION expression T_COLON expression { $$ = $1.'?'.$3.':'.$5; }

						| expression T_EQ expression { $$ = $1.'=='.$3; }
						| expression T_NE expression { $$ = $1.'!='.$3; }
						| expression T_EX expression { $$ = $1.'==='.$3; }
						| expression T_NX expression { $$ = $1.'!=='.$3; }

						| expression T_LT expression { $$ = $1.'<'.$3; }
						| expression T_LE expression { $$ = $1.'<='.$3; }
						| expression T_GT expression { $$ = $1.'>'.$3; }
						| expression T_GE expression { $$ = $1.'>='.$3; }

						| expression T_IN expression { $$ = '(is_array('.$3.')?in_array('.$1.', '.$3.'):FALSE!==strpos('.$3.', '.$1.'))'; }
						| expression T_NOT_IN expression { $$ = '(is_array('.$3.')?!in_array('.$1.', '.$3.'):FALSE===strpos('.$3.', '.$1.'))'; }
						| expression T_INX expression { $$ = '(is_array('.$3.')?in_array('.$1.', '.$3.', TRUE):FALSE!==strpos('.$3.', '.$1.'))'; }
						| expression T_NOT_INX expression { $$ = '(is_array('.$3.')?!in_array('.$1.', '.$3.', TRUE):FALSE===strpos('.$3.', '.$1.'))'; }

						| expression T_PLUS expression								{ $$ = $1.'+'.$3; }
						| expression T_MINUS expression								{ $$ = $1.'-'.$3; }
						| expression T_MULTIPLICATION expression					{ $$ = $1.'*'.$3; }
						| expression T_DIVISION expression							{ $$ = $1.'/'.$3; }
						| expression T_MODULUS expression							{ $$ = $1.'%'.$3; }

						| terminal
						| T_NOT terminal											{ $$ = '!'.$2; }
						| T_MINUS terminal											{ $$ = '-'.$2; }
.

terminal			=	T_LEFT_PAREN filtered_expression T_RIGHT_PAREN				{ $$ = $2; }
						| T_ID array_or_object										{ $$ = '$'.$1.$2; }
						| T_NUMBER
						| T_SINGLE_QUOTED_STRING
						| T_DOUBLE_QUOTED_STRING
.

array_or_object		=	array array_or_object										{ $$ = $1.$2; }
						| object array_or_object									{ $$ = $1.$2; }
						|
.

array				=	T_LEFT_BRACKET filtered_expression T_RIGHT_BRACKET			{ $$ = '['.$2.']'; }
.

object				=	T_ARROW T_LEFT_BRACE filtered_expression T_RIGHT_BRACE		{ $$ = '->{'.$3.'}'; }
						| T_DOT T_LEFT_BRACE filtered_expression T_RIGHT_BRACE		{ $$ = '->{'.$3.'}'; }
						| T_ARROW T_ID												{ $$ = '->'.$2; }
						| T_DOT T_ID												{ $$ = '->'.$2; }
.

filtered_expression	=	expression filters											{ $$ = $this->_parse_filtered_expression($1, $2); }
.

filters				=	T_PIPE T_ID parameters filters								{ array_unshift($4, array('name' => $2, 'parameters' => $3)); $$ = $4; }
						|															{ $$ = array(); }
.

parameters			=	T_COLON expression parameters								{ array_unshift($3, $2); $$ = $3; }
						|															{ $$ = array(); }
.
