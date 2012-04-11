<?php

class Pjango_base_parser extends lime_parser {
var $qi = 0;
var $i = array (
  0 => 
  array (
    'T_BLOCK_START' => 's 1',
    'statements' => 's 112',
    'start' => 's 113',
    '\'start\'' => 'a \'start\'',
    'T_HTML' => 'r 3',
    'T_VARIABLE_START' => 'r 3',
    '#' => 'r 3',
  ),
  1 => 
  array (
    'T_EXTENDS' => 's 2',
  ),
  2 => 
  array (
    'id_or_string' => 's 3',
    'T_ID' => 's 109',
    'T_SINGLE_QUOTED_STRING' => 's 110',
    'T_DOUBLE_QUOTED_STRING' => 's 111',
  ),
  3 => 
  array (
    'T_BLOCK_END' => 's 4',
  ),
  4 => 
  array (
    'statements' => 's 5',
    'T_HTML' => 'r 3',
    'T_BLOCK_START' => 'r 3',
    'T_VARIABLE_START' => 'r 3',
    '#' => 'r 3',
  ),
  5 => 
  array (
    'statements' => 's 6',
    'statement' => 's 7',
    'T_HTML' => 's 8',
    'T_VARIABLE_START' => 's 20',
    'T_BLOCK_START' => 's 108',
    '#' => 'r 0',
  ),
  6 => 
  array (
    'statements' => 's 6',
    'statement' => 's 7',
    'T_HTML' => 's 8',
    'T_BLOCK_START' => 's 9',
    'T_VARIABLE_START' => 's 20',
  ),
  7 => 
  array (
    'T_HTML' => 'r 2',
    'T_BLOCK_START' => 'r 2',
    'T_VARIABLE_START' => 'r 2',
    '#' => 'r 2',
  ),
  8 => 
  array (
    'T_HTML' => 'r 7',
    'T_BLOCK_START' => 'r 7',
    'T_VARIABLE_START' => 'r 7',
    '#' => 'r 7',
  ),
  9 => 
  array (
    'T_COMMENT' => 's 10',
    'T_BLOCK' => 's 16',
  ),
  10 => 
  array (
    'T_BLOCK_END' => 's 11',
  ),
  11 => 
  array (
    'statements' => 's 12',
    'T_BLOCK_START' => 'r 3',
    'T_HTML' => 'r 3',
    'T_VARIABLE_START' => 'r 3',
  ),
  12 => 
  array (
    'statements' => 's 6',
    'statement' => 's 7',
    'T_HTML' => 's 8',
    'T_BLOCK_START' => 's 13',
    'T_VARIABLE_START' => 's 20',
  ),
  13 => 
  array (
    'T_ENDCOMMENT' => 's 14',
    'T_BLOCK' => 's 16',
  ),
  14 => 
  array (
    'T_BLOCK_END' => 's 15',
  ),
  15 => 
  array (
    'T_HTML' => 'r 8',
    'T_BLOCK_START' => 'r 8',
    'T_VARIABLE_START' => 'r 8',
    '#' => 'r 8',
  ),
  16 => 
  array (
    'T_ID' => 's 17',
  ),
  17 => 
  array (
    'T_BLOCK_END' => 's 18',
  ),
  18 => 
  array (
    'statements' => 's 19',
    'T_BLOCK_START' => 'r 3',
    'T_HTML' => 'r 3',
    'T_VARIABLE_START' => 'r 3',
  ),
  19 => 
  array (
    'statements' => 's 6',
    'statement' => 's 7',
    'T_HTML' => 's 8',
    'T_VARIABLE_START' => 's 20',
    'T_BLOCK_START' => 's 102',
    'end_block' => 's 107',
  ),
  20 => 
  array (
    'filtered_expression' => 's 21',
    'expression' => 's 23',
    'terminal' => 's 68',
    'T_NOT' => 's 69',
    'T_MINUS' => 's 72',
    'T_LEFT_PAREN' => 's 71',
    'T_ID' => 's 74',
    'T_NUMBER' => 's 79',
    'T_SINGLE_QUOTED_STRING' => 's 80',
    'T_DOUBLE_QUOTED_STRING' => 's 81',
  ),
  21 => 
  array (
    'T_VARIABLE_END' => 's 22',
  ),
  22 => 
  array (
    'T_HTML' => 'r 9',
    'T_BLOCK_START' => 'r 9',
    'T_VARIABLE_START' => 'r 9',
    '#' => 'r 9',
  ),
  23 => 
  array (
    'T_OR' => 's 24',
    'T_XOR' => 's 26',
    'T_AND' => 's 28',
    'T_QUESTION' => 's 30',
    'T_EQ' => 's 34',
    'T_NE' => 's 36',
    'T_EX' => 's 38',
    'T_NX' => 's 40',
    'T_LT' => 's 42',
    'T_LE' => 's 44',
    'T_GT' => 's 46',
    'T_GE' => 's 48',
    'T_IN' => 's 50',
    'T_NOT_IN' => 's 52',
    'T_INX' => 's 54',
    'T_NOT_INX' => 's 56',
    'T_PLUS' => 's 58',
    'T_MINUS' => 's 60',
    'T_MULTIPLICATION' => 's 62',
    'T_DIVISION' => 's 64',
    'T_MODULUS' => 's 66',
    'filters' => 's 96',
    'T_PIPE' => 'r 52',
    'T_VARIABLE_END' => 'r 52',
    'T_RIGHT_PAREN' => 'r 52',
    'T_RIGHT_BRACKET' => 'r 52',
    'T_RIGHT_BRACE' => 'r 52',
  ),
  24 => 
  array (
    'expression' => 's 25',
    'terminal' => 's 68',
    'T_NOT' => 's 69',
    'T_MINUS' => 's 72',
    'T_LEFT_PAREN' => 's 71',
    'T_ID' => 's 74',
    'T_NUMBER' => 's 79',
    'T_SINGLE_QUOTED_STRING' => 's 80',
    'T_DOUBLE_QUOTED_STRING' => 's 81',
  ),
  25 => 
  array (
    'T_OR' => 'r 13',
    'T_XOR' => 's 26',
    'T_AND' => 's 28',
    'T_QUESTION' => 's 30',
    'T_EQ' => 's 34',
    'T_NE' => 's 36',
    'T_EX' => 's 38',
    'T_NX' => 's 40',
    'T_LT' => 's 42',
    'T_LE' => 's 44',
    'T_GT' => 's 46',
    'T_GE' => 's 48',
    'T_IN' => 's 50',
    'T_NOT_IN' => 's 52',
    'T_INX' => 's 54',
    'T_NOT_INX' => 's 56',
    'T_PLUS' => 's 58',
    'T_MINUS' => 's 60',
    'T_MULTIPLICATION' => 's 62',
    'T_DIVISION' => 's 64',
    'T_MODULUS' => 's 66',
    'T_PIPE' => 'r 13',
    'T_COLON' => 'r 13',
    'T_VARIABLE_END' => 'r 13',
    'T_RIGHT_PAREN' => 'r 13',
    'T_RIGHT_BRACKET' => 'r 13',
    'T_RIGHT_BRACE' => 'r 13',
  ),
  26 => 
  array (
    'expression' => 's 27',
    'terminal' => 's 68',
    'T_NOT' => 's 69',
    'T_MINUS' => 's 72',
    'T_LEFT_PAREN' => 's 71',
    'T_ID' => 's 74',
    'T_NUMBER' => 's 79',
    'T_SINGLE_QUOTED_STRING' => 's 80',
    'T_DOUBLE_QUOTED_STRING' => 's 81',
  ),
  27 => 
  array (
    'T_OR' => 'r 14',
    'T_XOR' => 'r 14',
    'T_AND' => 's 28',
    'T_QUESTION' => 's 30',
    'T_EQ' => 's 34',
    'T_NE' => 's 36',
    'T_EX' => 's 38',
    'T_NX' => 's 40',
    'T_LT' => 's 42',
    'T_LE' => 's 44',
    'T_GT' => 's 46',
    'T_GE' => 's 48',
    'T_IN' => 's 50',
    'T_NOT_IN' => 's 52',
    'T_INX' => 's 54',
    'T_NOT_INX' => 's 56',
    'T_PLUS' => 's 58',
    'T_MINUS' => 's 60',
    'T_MULTIPLICATION' => 's 62',
    'T_DIVISION' => 's 64',
    'T_MODULUS' => 's 66',
    'T_PIPE' => 'r 14',
    'T_COLON' => 'r 14',
    'T_VARIABLE_END' => 'r 14',
    'T_RIGHT_PAREN' => 'r 14',
    'T_RIGHT_BRACKET' => 'r 14',
    'T_RIGHT_BRACE' => 'r 14',
  ),
  28 => 
  array (
    'expression' => 's 29',
    'terminal' => 's 68',
    'T_NOT' => 's 69',
    'T_MINUS' => 's 72',
    'T_LEFT_PAREN' => 's 71',
    'T_ID' => 's 74',
    'T_NUMBER' => 's 79',
    'T_SINGLE_QUOTED_STRING' => 's 80',
    'T_DOUBLE_QUOTED_STRING' => 's 81',
  ),
  29 => 
  array (
    'T_OR' => 'r 15',
    'T_XOR' => 'r 15',
    'T_AND' => 'r 15',
    'T_QUESTION' => 's 30',
    'T_EQ' => 's 34',
    'T_NE' => 's 36',
    'T_EX' => 's 38',
    'T_NX' => 's 40',
    'T_LT' => 's 42',
    'T_LE' => 's 44',
    'T_GT' => 's 46',
    'T_GE' => 's 48',
    'T_IN' => 's 50',
    'T_NOT_IN' => 's 52',
    'T_INX' => 's 54',
    'T_NOT_INX' => 's 56',
    'T_PLUS' => 's 58',
    'T_MINUS' => 's 60',
    'T_MULTIPLICATION' => 's 62',
    'T_DIVISION' => 's 64',
    'T_MODULUS' => 's 66',
    'T_PIPE' => 'r 15',
    'T_COLON' => 'r 15',
    'T_VARIABLE_END' => 'r 15',
    'T_RIGHT_PAREN' => 'r 15',
    'T_RIGHT_BRACKET' => 'r 15',
    'T_RIGHT_BRACE' => 'r 15',
  ),
  30 => 
  array (
    'expression' => 's 31',
    'terminal' => 's 68',
    'T_NOT' => 's 69',
    'T_MINUS' => 's 72',
    'T_LEFT_PAREN' => 's 71',
    'T_ID' => 's 74',
    'T_NUMBER' => 's 79',
    'T_SINGLE_QUOTED_STRING' => 's 80',
    'T_DOUBLE_QUOTED_STRING' => 's 81',
  ),
  31 => 
  array (
    'T_OR' => 's 24',
    'T_XOR' => 's 26',
    'T_AND' => 's 28',
    'T_QUESTION' => 's 30',
    'T_COLON' => 's 32',
    'T_EQ' => 's 34',
    'T_NE' => 's 36',
    'T_EX' => 's 38',
    'T_NX' => 's 40',
    'T_LT' => 's 42',
    'T_LE' => 's 44',
    'T_GT' => 's 46',
    'T_GE' => 's 48',
    'T_IN' => 's 50',
    'T_NOT_IN' => 's 52',
    'T_INX' => 's 54',
    'T_NOT_INX' => 's 56',
    'T_PLUS' => 's 58',
    'T_MINUS' => 's 60',
    'T_MULTIPLICATION' => 's 62',
    'T_DIVISION' => 's 64',
    'T_MODULUS' => 's 66',
  ),
  32 => 
  array (
    'expression' => 's 33',
    'terminal' => 's 68',
    'T_NOT' => 's 69',
    'T_MINUS' => 's 72',
    'T_LEFT_PAREN' => 's 71',
    'T_ID' => 's 74',
    'T_NUMBER' => 's 79',
    'T_SINGLE_QUOTED_STRING' => 's 80',
    'T_DOUBLE_QUOTED_STRING' => 's 81',
  ),
  33 => 
  array (
    'T_OR' => 'r 16',
    'T_XOR' => 'r 16',
    'T_AND' => 'r 16',
    'T_QUESTION' => 'r 16',
    'T_EQ' => 's 34',
    'T_NE' => 's 36',
    'T_EX' => 's 38',
    'T_NX' => 's 40',
    'T_LT' => 's 42',
    'T_LE' => 's 44',
    'T_GT' => 's 46',
    'T_GE' => 's 48',
    'T_IN' => 's 50',
    'T_NOT_IN' => 's 52',
    'T_INX' => 's 54',
    'T_NOT_INX' => 's 56',
    'T_PLUS' => 's 58',
    'T_MINUS' => 's 60',
    'T_MULTIPLICATION' => 's 62',
    'T_DIVISION' => 's 64',
    'T_MODULUS' => 's 66',
    'T_PIPE' => 'r 16',
    'T_COLON' => 'r 16',
    'T_VARIABLE_END' => 'r 16',
    'T_RIGHT_PAREN' => 'r 16',
    'T_RIGHT_BRACKET' => 'r 16',
    'T_RIGHT_BRACE' => 'r 16',
  ),
  34 => 
  array (
    'expression' => 's 35',
    'terminal' => 's 68',
    'T_NOT' => 's 69',
    'T_MINUS' => 's 72',
    'T_LEFT_PAREN' => 's 71',
    'T_ID' => 's 74',
    'T_NUMBER' => 's 79',
    'T_SINGLE_QUOTED_STRING' => 's 80',
    'T_DOUBLE_QUOTED_STRING' => 's 81',
  ),
  35 => 
  array (
    'T_OR' => 'r 17',
    'T_XOR' => 'r 17',
    'T_AND' => 'r 17',
    'T_QUESTION' => 'r 17',
    'T_LT' => 's 42',
    'T_LE' => 's 44',
    'T_GT' => 's 46',
    'T_GE' => 's 48',
    'T_IN' => 's 50',
    'T_NOT_IN' => 's 52',
    'T_INX' => 's 54',
    'T_NOT_INX' => 's 56',
    'T_PLUS' => 's 58',
    'T_MINUS' => 's 60',
    'T_MULTIPLICATION' => 's 62',
    'T_DIVISION' => 's 64',
    'T_MODULUS' => 's 66',
    'T_PIPE' => 'r 17',
    'T_COLON' => 'r 17',
    'T_VARIABLE_END' => 'r 17',
    'T_RIGHT_PAREN' => 'r 17',
    'T_RIGHT_BRACKET' => 'r 17',
    'T_RIGHT_BRACE' => 'r 17',
  ),
  36 => 
  array (
    'expression' => 's 37',
    'terminal' => 's 68',
    'T_NOT' => 's 69',
    'T_MINUS' => 's 72',
    'T_LEFT_PAREN' => 's 71',
    'T_ID' => 's 74',
    'T_NUMBER' => 's 79',
    'T_SINGLE_QUOTED_STRING' => 's 80',
    'T_DOUBLE_QUOTED_STRING' => 's 81',
  ),
  37 => 
  array (
    'T_OR' => 'r 18',
    'T_XOR' => 'r 18',
    'T_AND' => 'r 18',
    'T_QUESTION' => 'r 18',
    'T_LT' => 's 42',
    'T_LE' => 's 44',
    'T_GT' => 's 46',
    'T_GE' => 's 48',
    'T_IN' => 's 50',
    'T_NOT_IN' => 's 52',
    'T_INX' => 's 54',
    'T_NOT_INX' => 's 56',
    'T_PLUS' => 's 58',
    'T_MINUS' => 's 60',
    'T_MULTIPLICATION' => 's 62',
    'T_DIVISION' => 's 64',
    'T_MODULUS' => 's 66',
    'T_PIPE' => 'r 18',
    'T_COLON' => 'r 18',
    'T_VARIABLE_END' => 'r 18',
    'T_RIGHT_PAREN' => 'r 18',
    'T_RIGHT_BRACKET' => 'r 18',
    'T_RIGHT_BRACE' => 'r 18',
  ),
  38 => 
  array (
    'expression' => 's 39',
    'terminal' => 's 68',
    'T_NOT' => 's 69',
    'T_MINUS' => 's 72',
    'T_LEFT_PAREN' => 's 71',
    'T_ID' => 's 74',
    'T_NUMBER' => 's 79',
    'T_SINGLE_QUOTED_STRING' => 's 80',
    'T_DOUBLE_QUOTED_STRING' => 's 81',
  ),
  39 => 
  array (
    'T_OR' => 'r 19',
    'T_XOR' => 'r 19',
    'T_AND' => 'r 19',
    'T_QUESTION' => 'r 19',
    'T_LT' => 's 42',
    'T_LE' => 's 44',
    'T_GT' => 's 46',
    'T_GE' => 's 48',
    'T_IN' => 's 50',
    'T_NOT_IN' => 's 52',
    'T_INX' => 's 54',
    'T_NOT_INX' => 's 56',
    'T_PLUS' => 's 58',
    'T_MINUS' => 's 60',
    'T_MULTIPLICATION' => 's 62',
    'T_DIVISION' => 's 64',
    'T_MODULUS' => 's 66',
    'T_PIPE' => 'r 19',
    'T_COLON' => 'r 19',
    'T_VARIABLE_END' => 'r 19',
    'T_RIGHT_PAREN' => 'r 19',
    'T_RIGHT_BRACKET' => 'r 19',
    'T_RIGHT_BRACE' => 'r 19',
  ),
  40 => 
  array (
    'expression' => 's 41',
    'terminal' => 's 68',
    'T_NOT' => 's 69',
    'T_MINUS' => 's 72',
    'T_LEFT_PAREN' => 's 71',
    'T_ID' => 's 74',
    'T_NUMBER' => 's 79',
    'T_SINGLE_QUOTED_STRING' => 's 80',
    'T_DOUBLE_QUOTED_STRING' => 's 81',
  ),
  41 => 
  array (
    'T_OR' => 'r 20',
    'T_XOR' => 'r 20',
    'T_AND' => 'r 20',
    'T_QUESTION' => 'r 20',
    'T_LT' => 's 42',
    'T_LE' => 's 44',
    'T_GT' => 's 46',
    'T_GE' => 's 48',
    'T_IN' => 's 50',
    'T_NOT_IN' => 's 52',
    'T_INX' => 's 54',
    'T_NOT_INX' => 's 56',
    'T_PLUS' => 's 58',
    'T_MINUS' => 's 60',
    'T_MULTIPLICATION' => 's 62',
    'T_DIVISION' => 's 64',
    'T_MODULUS' => 's 66',
    'T_PIPE' => 'r 20',
    'T_COLON' => 'r 20',
    'T_VARIABLE_END' => 'r 20',
    'T_RIGHT_PAREN' => 'r 20',
    'T_RIGHT_BRACKET' => 'r 20',
    'T_RIGHT_BRACE' => 'r 20',
  ),
  42 => 
  array (
    'expression' => 's 43',
    'terminal' => 's 68',
    'T_NOT' => 's 69',
    'T_MINUS' => 's 72',
    'T_LEFT_PAREN' => 's 71',
    'T_ID' => 's 74',
    'T_NUMBER' => 's 79',
    'T_SINGLE_QUOTED_STRING' => 's 80',
    'T_DOUBLE_QUOTED_STRING' => 's 81',
  ),
  43 => 
  array (
    'T_OR' => 'r 21',
    'T_XOR' => 'r 21',
    'T_AND' => 'r 21',
    'T_QUESTION' => 'r 21',
    'T_EQ' => 'r 21',
    'T_NE' => 'r 21',
    'T_EX' => 'r 21',
    'T_NX' => 'r 21',
    'T_IN' => 's 50',
    'T_NOT_IN' => 's 52',
    'T_INX' => 's 54',
    'T_NOT_INX' => 's 56',
    'T_PLUS' => 's 58',
    'T_MINUS' => 's 60',
    'T_MULTIPLICATION' => 's 62',
    'T_DIVISION' => 's 64',
    'T_MODULUS' => 's 66',
    'T_PIPE' => 'r 21',
    'T_COLON' => 'r 21',
    'T_VARIABLE_END' => 'r 21',
    'T_RIGHT_PAREN' => 'r 21',
    'T_RIGHT_BRACKET' => 'r 21',
    'T_RIGHT_BRACE' => 'r 21',
  ),
  44 => 
  array (
    'expression' => 's 45',
    'terminal' => 's 68',
    'T_NOT' => 's 69',
    'T_MINUS' => 's 72',
    'T_LEFT_PAREN' => 's 71',
    'T_ID' => 's 74',
    'T_NUMBER' => 's 79',
    'T_SINGLE_QUOTED_STRING' => 's 80',
    'T_DOUBLE_QUOTED_STRING' => 's 81',
  ),
  45 => 
  array (
    'T_OR' => 'r 22',
    'T_XOR' => 'r 22',
    'T_AND' => 'r 22',
    'T_QUESTION' => 'r 22',
    'T_EQ' => 'r 22',
    'T_NE' => 'r 22',
    'T_EX' => 'r 22',
    'T_NX' => 'r 22',
    'T_IN' => 's 50',
    'T_NOT_IN' => 's 52',
    'T_INX' => 's 54',
    'T_NOT_INX' => 's 56',
    'T_PLUS' => 's 58',
    'T_MINUS' => 's 60',
    'T_MULTIPLICATION' => 's 62',
    'T_DIVISION' => 's 64',
    'T_MODULUS' => 's 66',
    'T_PIPE' => 'r 22',
    'T_COLON' => 'r 22',
    'T_VARIABLE_END' => 'r 22',
    'T_RIGHT_PAREN' => 'r 22',
    'T_RIGHT_BRACKET' => 'r 22',
    'T_RIGHT_BRACE' => 'r 22',
  ),
  46 => 
  array (
    'expression' => 's 47',
    'terminal' => 's 68',
    'T_NOT' => 's 69',
    'T_MINUS' => 's 72',
    'T_LEFT_PAREN' => 's 71',
    'T_ID' => 's 74',
    'T_NUMBER' => 's 79',
    'T_SINGLE_QUOTED_STRING' => 's 80',
    'T_DOUBLE_QUOTED_STRING' => 's 81',
  ),
  47 => 
  array (
    'T_OR' => 'r 23',
    'T_XOR' => 'r 23',
    'T_AND' => 'r 23',
    'T_QUESTION' => 'r 23',
    'T_EQ' => 'r 23',
    'T_NE' => 'r 23',
    'T_EX' => 'r 23',
    'T_NX' => 'r 23',
    'T_IN' => 's 50',
    'T_NOT_IN' => 's 52',
    'T_INX' => 's 54',
    'T_NOT_INX' => 's 56',
    'T_PLUS' => 's 58',
    'T_MINUS' => 's 60',
    'T_MULTIPLICATION' => 's 62',
    'T_DIVISION' => 's 64',
    'T_MODULUS' => 's 66',
    'T_PIPE' => 'r 23',
    'T_COLON' => 'r 23',
    'T_VARIABLE_END' => 'r 23',
    'T_RIGHT_PAREN' => 'r 23',
    'T_RIGHT_BRACKET' => 'r 23',
    'T_RIGHT_BRACE' => 'r 23',
  ),
  48 => 
  array (
    'expression' => 's 49',
    'terminal' => 's 68',
    'T_NOT' => 's 69',
    'T_MINUS' => 's 72',
    'T_LEFT_PAREN' => 's 71',
    'T_ID' => 's 74',
    'T_NUMBER' => 's 79',
    'T_SINGLE_QUOTED_STRING' => 's 80',
    'T_DOUBLE_QUOTED_STRING' => 's 81',
  ),
  49 => 
  array (
    'T_OR' => 'r 24',
    'T_XOR' => 'r 24',
    'T_AND' => 'r 24',
    'T_QUESTION' => 'r 24',
    'T_EQ' => 'r 24',
    'T_NE' => 'r 24',
    'T_EX' => 'r 24',
    'T_NX' => 'r 24',
    'T_IN' => 's 50',
    'T_NOT_IN' => 's 52',
    'T_INX' => 's 54',
    'T_NOT_INX' => 's 56',
    'T_PLUS' => 's 58',
    'T_MINUS' => 's 60',
    'T_MULTIPLICATION' => 's 62',
    'T_DIVISION' => 's 64',
    'T_MODULUS' => 's 66',
    'T_PIPE' => 'r 24',
    'T_COLON' => 'r 24',
    'T_VARIABLE_END' => 'r 24',
    'T_RIGHT_PAREN' => 'r 24',
    'T_RIGHT_BRACKET' => 'r 24',
    'T_RIGHT_BRACE' => 'r 24',
  ),
  50 => 
  array (
    'expression' => 's 51',
    'terminal' => 's 68',
    'T_NOT' => 's 69',
    'T_MINUS' => 's 72',
    'T_LEFT_PAREN' => 's 71',
    'T_ID' => 's 74',
    'T_NUMBER' => 's 79',
    'T_SINGLE_QUOTED_STRING' => 's 80',
    'T_DOUBLE_QUOTED_STRING' => 's 81',
  ),
  51 => 
  array (
    'T_OR' => 'r 25',
    'T_XOR' => 'r 25',
    'T_AND' => 'r 25',
    'T_QUESTION' => 'r 25',
    'T_EQ' => 'r 25',
    'T_NE' => 'r 25',
    'T_EX' => 'r 25',
    'T_NX' => 'r 25',
    'T_LT' => 'r 25',
    'T_LE' => 'r 25',
    'T_GT' => 'r 25',
    'T_GE' => 'r 25',
    'T_PLUS' => 's 58',
    'T_MINUS' => 's 60',
    'T_MULTIPLICATION' => 's 62',
    'T_DIVISION' => 's 64',
    'T_MODULUS' => 's 66',
    'T_PIPE' => 'r 25',
    'T_COLON' => 'r 25',
    'T_VARIABLE_END' => 'r 25',
    'T_RIGHT_PAREN' => 'r 25',
    'T_RIGHT_BRACKET' => 'r 25',
    'T_RIGHT_BRACE' => 'r 25',
  ),
  52 => 
  array (
    'expression' => 's 53',
    'terminal' => 's 68',
    'T_NOT' => 's 69',
    'T_MINUS' => 's 72',
    'T_LEFT_PAREN' => 's 71',
    'T_ID' => 's 74',
    'T_NUMBER' => 's 79',
    'T_SINGLE_QUOTED_STRING' => 's 80',
    'T_DOUBLE_QUOTED_STRING' => 's 81',
  ),
  53 => 
  array (
    'T_OR' => 'r 26',
    'T_XOR' => 'r 26',
    'T_AND' => 'r 26',
    'T_QUESTION' => 'r 26',
    'T_EQ' => 'r 26',
    'T_NE' => 'r 26',
    'T_EX' => 'r 26',
    'T_NX' => 'r 26',
    'T_LT' => 'r 26',
    'T_LE' => 'r 26',
    'T_GT' => 'r 26',
    'T_GE' => 'r 26',
    'T_PLUS' => 's 58',
    'T_MINUS' => 's 60',
    'T_MULTIPLICATION' => 's 62',
    'T_DIVISION' => 's 64',
    'T_MODULUS' => 's 66',
    'T_PIPE' => 'r 26',
    'T_COLON' => 'r 26',
    'T_VARIABLE_END' => 'r 26',
    'T_RIGHT_PAREN' => 'r 26',
    'T_RIGHT_BRACKET' => 'r 26',
    'T_RIGHT_BRACE' => 'r 26',
  ),
  54 => 
  array (
    'expression' => 's 55',
    'terminal' => 's 68',
    'T_NOT' => 's 69',
    'T_MINUS' => 's 72',
    'T_LEFT_PAREN' => 's 71',
    'T_ID' => 's 74',
    'T_NUMBER' => 's 79',
    'T_SINGLE_QUOTED_STRING' => 's 80',
    'T_DOUBLE_QUOTED_STRING' => 's 81',
  ),
  55 => 
  array (
    'T_OR' => 'r 27',
    'T_XOR' => 'r 27',
    'T_AND' => 'r 27',
    'T_QUESTION' => 'r 27',
    'T_EQ' => 'r 27',
    'T_NE' => 'r 27',
    'T_EX' => 'r 27',
    'T_NX' => 'r 27',
    'T_LT' => 'r 27',
    'T_LE' => 'r 27',
    'T_GT' => 'r 27',
    'T_GE' => 'r 27',
    'T_PLUS' => 's 58',
    'T_MINUS' => 's 60',
    'T_MULTIPLICATION' => 's 62',
    'T_DIVISION' => 's 64',
    'T_MODULUS' => 's 66',
    'T_PIPE' => 'r 27',
    'T_COLON' => 'r 27',
    'T_VARIABLE_END' => 'r 27',
    'T_RIGHT_PAREN' => 'r 27',
    'T_RIGHT_BRACKET' => 'r 27',
    'T_RIGHT_BRACE' => 'r 27',
  ),
  56 => 
  array (
    'expression' => 's 57',
    'terminal' => 's 68',
    'T_NOT' => 's 69',
    'T_MINUS' => 's 72',
    'T_LEFT_PAREN' => 's 71',
    'T_ID' => 's 74',
    'T_NUMBER' => 's 79',
    'T_SINGLE_QUOTED_STRING' => 's 80',
    'T_DOUBLE_QUOTED_STRING' => 's 81',
  ),
  57 => 
  array (
    'T_OR' => 'r 28',
    'T_XOR' => 'r 28',
    'T_AND' => 'r 28',
    'T_QUESTION' => 'r 28',
    'T_EQ' => 'r 28',
    'T_NE' => 'r 28',
    'T_EX' => 'r 28',
    'T_NX' => 'r 28',
    'T_LT' => 'r 28',
    'T_LE' => 'r 28',
    'T_GT' => 'r 28',
    'T_GE' => 'r 28',
    'T_PLUS' => 's 58',
    'T_MINUS' => 's 60',
    'T_MULTIPLICATION' => 's 62',
    'T_DIVISION' => 's 64',
    'T_MODULUS' => 's 66',
    'T_PIPE' => 'r 28',
    'T_COLON' => 'r 28',
    'T_VARIABLE_END' => 'r 28',
    'T_RIGHT_PAREN' => 'r 28',
    'T_RIGHT_BRACKET' => 'r 28',
    'T_RIGHT_BRACE' => 'r 28',
  ),
  58 => 
  array (
    'expression' => 's 59',
    'terminal' => 's 68',
    'T_NOT' => 's 69',
    'T_MINUS' => 's 72',
    'T_LEFT_PAREN' => 's 71',
    'T_ID' => 's 74',
    'T_NUMBER' => 's 79',
    'T_SINGLE_QUOTED_STRING' => 's 80',
    'T_DOUBLE_QUOTED_STRING' => 's 81',
  ),
  59 => 
  array (
    'T_OR' => 'r 29',
    'T_XOR' => 'r 29',
    'T_AND' => 'r 29',
    'T_QUESTION' => 'r 29',
    'T_EQ' => 'r 29',
    'T_NE' => 'r 29',
    'T_EX' => 'r 29',
    'T_NX' => 'r 29',
    'T_LT' => 'r 29',
    'T_LE' => 'r 29',
    'T_GT' => 'r 29',
    'T_GE' => 'r 29',
    'T_IN' => 'r 29',
    'T_NOT_IN' => 'r 29',
    'T_INX' => 'r 29',
    'T_NOT_INX' => 'r 29',
    'T_PLUS' => 'r 29',
    'T_MINUS' => 'r 29',
    'T_MULTIPLICATION' => 's 62',
    'T_DIVISION' => 's 64',
    'T_MODULUS' => 's 66',
    'T_PIPE' => 'r 29',
    'T_COLON' => 'r 29',
    'T_VARIABLE_END' => 'r 29',
    'T_RIGHT_PAREN' => 'r 29',
    'T_RIGHT_BRACKET' => 'r 29',
    'T_RIGHT_BRACE' => 'r 29',
  ),
  60 => 
  array (
    'expression' => 's 61',
    'terminal' => 's 68',
    'T_NOT' => 's 69',
    'T_MINUS' => 's 72',
    'T_LEFT_PAREN' => 's 71',
    'T_ID' => 's 74',
    'T_NUMBER' => 's 79',
    'T_SINGLE_QUOTED_STRING' => 's 80',
    'T_DOUBLE_QUOTED_STRING' => 's 81',
  ),
  61 => 
  array (
    'T_OR' => 'r 30',
    'T_XOR' => 'r 30',
    'T_AND' => 'r 30',
    'T_QUESTION' => 'r 30',
    'T_EQ' => 'r 30',
    'T_NE' => 'r 30',
    'T_EX' => 'r 30',
    'T_NX' => 'r 30',
    'T_LT' => 'r 30',
    'T_LE' => 'r 30',
    'T_GT' => 'r 30',
    'T_GE' => 'r 30',
    'T_IN' => 'r 30',
    'T_NOT_IN' => 'r 30',
    'T_INX' => 'r 30',
    'T_NOT_INX' => 'r 30',
    'T_PLUS' => 'r 30',
    'T_MINUS' => 'r 30',
    'T_MULTIPLICATION' => 's 62',
    'T_DIVISION' => 's 64',
    'T_MODULUS' => 's 66',
    'T_PIPE' => 'r 30',
    'T_COLON' => 'r 30',
    'T_VARIABLE_END' => 'r 30',
    'T_RIGHT_PAREN' => 'r 30',
    'T_RIGHT_BRACKET' => 'r 30',
    'T_RIGHT_BRACE' => 'r 30',
  ),
  62 => 
  array (
    'expression' => 's 63',
    'terminal' => 's 68',
    'T_NOT' => 's 69',
    'T_MINUS' => 's 72',
    'T_LEFT_PAREN' => 's 71',
    'T_ID' => 's 74',
    'T_NUMBER' => 's 79',
    'T_SINGLE_QUOTED_STRING' => 's 80',
    'T_DOUBLE_QUOTED_STRING' => 's 81',
  ),
  63 => 
  array (
    'T_OR' => 'r 31',
    'T_XOR' => 'r 31',
    'T_AND' => 'r 31',
    'T_QUESTION' => 'r 31',
    'T_EQ' => 'r 31',
    'T_NE' => 'r 31',
    'T_EX' => 'r 31',
    'T_NX' => 'r 31',
    'T_LT' => 'r 31',
    'T_LE' => 'r 31',
    'T_GT' => 'r 31',
    'T_GE' => 'r 31',
    'T_IN' => 'r 31',
    'T_NOT_IN' => 'r 31',
    'T_INX' => 'r 31',
    'T_NOT_INX' => 'r 31',
    'T_PLUS' => 'r 31',
    'T_MINUS' => 'r 31',
    'T_MULTIPLICATION' => 'r 31',
    'T_DIVISION' => 'r 31',
    'T_MODULUS' => 'r 31',
    'T_PIPE' => 'r 31',
    'T_COLON' => 'r 31',
    'T_VARIABLE_END' => 'r 31',
    'T_RIGHT_PAREN' => 'r 31',
    'T_RIGHT_BRACKET' => 'r 31',
    'T_RIGHT_BRACE' => 'r 31',
  ),
  64 => 
  array (
    'expression' => 's 65',
    'terminal' => 's 68',
    'T_NOT' => 's 69',
    'T_MINUS' => 's 72',
    'T_LEFT_PAREN' => 's 71',
    'T_ID' => 's 74',
    'T_NUMBER' => 's 79',
    'T_SINGLE_QUOTED_STRING' => 's 80',
    'T_DOUBLE_QUOTED_STRING' => 's 81',
  ),
  65 => 
  array (
    'T_OR' => 'r 32',
    'T_XOR' => 'r 32',
    'T_AND' => 'r 32',
    'T_QUESTION' => 'r 32',
    'T_EQ' => 'r 32',
    'T_NE' => 'r 32',
    'T_EX' => 'r 32',
    'T_NX' => 'r 32',
    'T_LT' => 'r 32',
    'T_LE' => 'r 32',
    'T_GT' => 'r 32',
    'T_GE' => 'r 32',
    'T_IN' => 'r 32',
    'T_NOT_IN' => 'r 32',
    'T_INX' => 'r 32',
    'T_NOT_INX' => 'r 32',
    'T_PLUS' => 'r 32',
    'T_MINUS' => 'r 32',
    'T_MULTIPLICATION' => 'r 32',
    'T_DIVISION' => 'r 32',
    'T_MODULUS' => 'r 32',
    'T_PIPE' => 'r 32',
    'T_COLON' => 'r 32',
    'T_VARIABLE_END' => 'r 32',
    'T_RIGHT_PAREN' => 'r 32',
    'T_RIGHT_BRACKET' => 'r 32',
    'T_RIGHT_BRACE' => 'r 32',
  ),
  66 => 
  array (
    'expression' => 's 67',
    'terminal' => 's 68',
    'T_NOT' => 's 69',
    'T_MINUS' => 's 72',
    'T_LEFT_PAREN' => 's 71',
    'T_ID' => 's 74',
    'T_NUMBER' => 's 79',
    'T_SINGLE_QUOTED_STRING' => 's 80',
    'T_DOUBLE_QUOTED_STRING' => 's 81',
  ),
  67 => 
  array (
    'T_OR' => 'r 33',
    'T_XOR' => 'r 33',
    'T_AND' => 'r 33',
    'T_QUESTION' => 'r 33',
    'T_EQ' => 'r 33',
    'T_NE' => 'r 33',
    'T_EX' => 'r 33',
    'T_NX' => 'r 33',
    'T_LT' => 'r 33',
    'T_LE' => 'r 33',
    'T_GT' => 'r 33',
    'T_GE' => 'r 33',
    'T_IN' => 'r 33',
    'T_NOT_IN' => 'r 33',
    'T_INX' => 'r 33',
    'T_NOT_INX' => 'r 33',
    'T_PLUS' => 'r 33',
    'T_MINUS' => 'r 33',
    'T_MULTIPLICATION' => 'r 33',
    'T_DIVISION' => 'r 33',
    'T_MODULUS' => 'r 33',
    'T_PIPE' => 'r 33',
    'T_COLON' => 'r 33',
    'T_VARIABLE_END' => 'r 33',
    'T_RIGHT_PAREN' => 'r 33',
    'T_RIGHT_BRACKET' => 'r 33',
    'T_RIGHT_BRACE' => 'r 33',
  ),
  68 => 
  array (
    'T_PIPE' => 'r 34',
    'T_MODULUS' => 'r 34',
    'T_DIVISION' => 'r 34',
    'T_MULTIPLICATION' => 'r 34',
    'T_MINUS' => 'r 34',
    'T_PLUS' => 'r 34',
    'T_NOT_INX' => 'r 34',
    'T_INX' => 'r 34',
    'T_NOT_IN' => 'r 34',
    'T_IN' => 'r 34',
    'T_GE' => 'r 34',
    'T_GT' => 'r 34',
    'T_LE' => 'r 34',
    'T_LT' => 'r 34',
    'T_NX' => 'r 34',
    'T_EX' => 'r 34',
    'T_NE' => 'r 34',
    'T_EQ' => 'r 34',
    'T_QUESTION' => 'r 34',
    'T_AND' => 'r 34',
    'T_XOR' => 'r 34',
    'T_OR' => 'r 34',
    'T_COLON' => 'r 34',
    'T_VARIABLE_END' => 'r 34',
    'T_RIGHT_PAREN' => 'r 34',
    'T_RIGHT_BRACKET' => 'r 34',
    'T_RIGHT_BRACE' => 'r 34',
  ),
  69 => 
  array (
    'terminal' => 's 70',
    'T_LEFT_PAREN' => 's 71',
    'T_ID' => 's 74',
    'T_NUMBER' => 's 79',
    'T_SINGLE_QUOTED_STRING' => 's 80',
    'T_DOUBLE_QUOTED_STRING' => 's 81',
  ),
  70 => 
  array (
    'T_PIPE' => 'r 35',
    'T_MODULUS' => 'r 35',
    'T_DIVISION' => 'r 35',
    'T_MULTIPLICATION' => 'r 35',
    'T_MINUS' => 'r 35',
    'T_PLUS' => 'r 35',
    'T_NOT_INX' => 'r 35',
    'T_INX' => 'r 35',
    'T_NOT_IN' => 'r 35',
    'T_IN' => 'r 35',
    'T_GE' => 'r 35',
    'T_GT' => 'r 35',
    'T_LE' => 'r 35',
    'T_LT' => 'r 35',
    'T_NX' => 'r 35',
    'T_EX' => 'r 35',
    'T_NE' => 'r 35',
    'T_EQ' => 'r 35',
    'T_QUESTION' => 'r 35',
    'T_AND' => 'r 35',
    'T_XOR' => 'r 35',
    'T_OR' => 'r 35',
    'T_COLON' => 'r 35',
    'T_VARIABLE_END' => 'r 35',
    'T_RIGHT_PAREN' => 'r 35',
    'T_RIGHT_BRACKET' => 'r 35',
    'T_RIGHT_BRACE' => 'r 35',
  ),
  71 => 
  array (
    'expression' => 's 23',
    'terminal' => 's 68',
    'T_NOT' => 's 69',
    'T_MINUS' => 's 72',
    'T_LEFT_PAREN' => 's 71',
    'filtered_expression' => 's 94',
    'T_ID' => 's 74',
    'T_NUMBER' => 's 79',
    'T_SINGLE_QUOTED_STRING' => 's 80',
    'T_DOUBLE_QUOTED_STRING' => 's 81',
  ),
  72 => 
  array (
    'terminal' => 's 73',
    'T_LEFT_PAREN' => 's 71',
    'T_ID' => 's 74',
    'T_NUMBER' => 's 79',
    'T_SINGLE_QUOTED_STRING' => 's 80',
    'T_DOUBLE_QUOTED_STRING' => 's 81',
  ),
  73 => 
  array (
    'T_PIPE' => 'r 36',
    'T_MODULUS' => 'r 36',
    'T_DIVISION' => 'r 36',
    'T_MULTIPLICATION' => 'r 36',
    'T_MINUS' => 'r 36',
    'T_PLUS' => 'r 36',
    'T_NOT_INX' => 'r 36',
    'T_INX' => 'r 36',
    'T_NOT_IN' => 'r 36',
    'T_IN' => 'r 36',
    'T_GE' => 'r 36',
    'T_GT' => 'r 36',
    'T_LE' => 'r 36',
    'T_LT' => 'r 36',
    'T_NX' => 'r 36',
    'T_EX' => 'r 36',
    'T_NE' => 'r 36',
    'T_EQ' => 'r 36',
    'T_QUESTION' => 'r 36',
    'T_AND' => 'r 36',
    'T_XOR' => 'r 36',
    'T_OR' => 'r 36',
    'T_COLON' => 'r 36',
    'T_VARIABLE_END' => 'r 36',
    'T_RIGHT_PAREN' => 'r 36',
    'T_RIGHT_BRACKET' => 'r 36',
    'T_RIGHT_BRACE' => 'r 36',
  ),
  74 => 
  array (
    'array_or_object' => 's 75',
    'T_ARROW' => 'r 44',
    'T_DOT' => 'r 44',
    'T_LEFT_BRACKET' => 'r 44',
    'T_PIPE' => 'r 44',
    'T_MODULUS' => 'r 44',
    'T_DIVISION' => 'r 44',
    'T_MULTIPLICATION' => 'r 44',
    'T_MINUS' => 'r 44',
    'T_PLUS' => 'r 44',
    'T_NOT_INX' => 'r 44',
    'T_INX' => 'r 44',
    'T_NOT_IN' => 'r 44',
    'T_IN' => 'r 44',
    'T_GE' => 'r 44',
    'T_GT' => 'r 44',
    'T_LE' => 'r 44',
    'T_LT' => 'r 44',
    'T_NX' => 'r 44',
    'T_EX' => 'r 44',
    'T_NE' => 'r 44',
    'T_EQ' => 'r 44',
    'T_QUESTION' => 'r 44',
    'T_AND' => 'r 44',
    'T_XOR' => 'r 44',
    'T_OR' => 'r 44',
    'T_COLON' => 'r 44',
    'T_VARIABLE_END' => 'r 44',
    'T_RIGHT_PAREN' => 'r 44',
    'T_RIGHT_BRACKET' => 'r 44',
    'T_RIGHT_BRACE' => 'r 44',
  ),
  75 => 
  array (
    'array' => 's 76',
    'object' => 's 77',
    'T_LEFT_BRACKET' => 's 78',
    'T_ARROW' => 's 84',
    'T_DOT' => 's 89',
    'T_PIPE' => 'r 38',
    'T_MODULUS' => 'r 38',
    'T_DIVISION' => 'r 38',
    'T_MULTIPLICATION' => 'r 38',
    'T_MINUS' => 'r 38',
    'T_PLUS' => 'r 38',
    'T_NOT_INX' => 'r 38',
    'T_INX' => 'r 38',
    'T_NOT_IN' => 'r 38',
    'T_IN' => 'r 38',
    'T_GE' => 'r 38',
    'T_GT' => 'r 38',
    'T_LE' => 'r 38',
    'T_LT' => 'r 38',
    'T_NX' => 'r 38',
    'T_EX' => 'r 38',
    'T_NE' => 'r 38',
    'T_EQ' => 'r 38',
    'T_QUESTION' => 'r 38',
    'T_AND' => 'r 38',
    'T_XOR' => 'r 38',
    'T_OR' => 'r 38',
    'T_COLON' => 'r 38',
    'T_VARIABLE_END' => 'r 38',
    'T_RIGHT_PAREN' => 'r 38',
    'T_RIGHT_BRACKET' => 'r 38',
    'T_RIGHT_BRACE' => 'r 38',
  ),
  76 => 
  array (
    'T_ARROW' => 'r 42',
    'T_DOT' => 'r 42',
    'T_LEFT_BRACKET' => 'r 42',
    'T_PIPE' => 'r 42',
    'T_MODULUS' => 'r 42',
    'T_DIVISION' => 'r 42',
    'T_MULTIPLICATION' => 'r 42',
    'T_MINUS' => 'r 42',
    'T_PLUS' => 'r 42',
    'T_NOT_INX' => 'r 42',
    'T_INX' => 'r 42',
    'T_NOT_IN' => 'r 42',
    'T_IN' => 'r 42',
    'T_GE' => 'r 42',
    'T_GT' => 'r 42',
    'T_LE' => 'r 42',
    'T_LT' => 'r 42',
    'T_NX' => 'r 42',
    'T_EX' => 'r 42',
    'T_NE' => 'r 42',
    'T_EQ' => 'r 42',
    'T_QUESTION' => 'r 42',
    'T_AND' => 'r 42',
    'T_XOR' => 'r 42',
    'T_OR' => 'r 42',
    'T_COLON' => 'r 42',
    'T_VARIABLE_END' => 'r 42',
    'T_RIGHT_PAREN' => 'r 42',
    'T_RIGHT_BRACKET' => 'r 42',
    'T_RIGHT_BRACE' => 'r 42',
  ),
  77 => 
  array (
    'T_ARROW' => 'r 43',
    'T_DOT' => 'r 43',
    'T_LEFT_BRACKET' => 'r 43',
    'T_PIPE' => 'r 43',
    'T_MODULUS' => 'r 43',
    'T_DIVISION' => 'r 43',
    'T_MULTIPLICATION' => 'r 43',
    'T_MINUS' => 'r 43',
    'T_PLUS' => 'r 43',
    'T_NOT_INX' => 'r 43',
    'T_INX' => 'r 43',
    'T_NOT_IN' => 'r 43',
    'T_IN' => 'r 43',
    'T_GE' => 'r 43',
    'T_GT' => 'r 43',
    'T_LE' => 'r 43',
    'T_LT' => 'r 43',
    'T_NX' => 'r 43',
    'T_EX' => 'r 43',
    'T_NE' => 'r 43',
    'T_EQ' => 'r 43',
    'T_QUESTION' => 'r 43',
    'T_AND' => 'r 43',
    'T_XOR' => 'r 43',
    'T_OR' => 'r 43',
    'T_COLON' => 'r 43',
    'T_VARIABLE_END' => 'r 43',
    'T_RIGHT_PAREN' => 'r 43',
    'T_RIGHT_BRACKET' => 'r 43',
    'T_RIGHT_BRACE' => 'r 43',
  ),
  78 => 
  array (
    'expression' => 's 23',
    'terminal' => 's 68',
    'T_NOT' => 's 69',
    'T_MINUS' => 's 72',
    'T_LEFT_PAREN' => 's 71',
    'T_ID' => 's 74',
    'T_NUMBER' => 's 79',
    'T_SINGLE_QUOTED_STRING' => 's 80',
    'T_DOUBLE_QUOTED_STRING' => 's 81',
    'filtered_expression' => 's 82',
  ),
  79 => 
  array (
    'T_PIPE' => 'r 39',
    'T_MODULUS' => 'r 39',
    'T_DIVISION' => 'r 39',
    'T_MULTIPLICATION' => 'r 39',
    'T_MINUS' => 'r 39',
    'T_PLUS' => 'r 39',
    'T_NOT_INX' => 'r 39',
    'T_INX' => 'r 39',
    'T_NOT_IN' => 'r 39',
    'T_IN' => 'r 39',
    'T_GE' => 'r 39',
    'T_GT' => 'r 39',
    'T_LE' => 'r 39',
    'T_LT' => 'r 39',
    'T_NX' => 'r 39',
    'T_EX' => 'r 39',
    'T_NE' => 'r 39',
    'T_EQ' => 'r 39',
    'T_QUESTION' => 'r 39',
    'T_AND' => 'r 39',
    'T_XOR' => 'r 39',
    'T_OR' => 'r 39',
    'T_COLON' => 'r 39',
    'T_VARIABLE_END' => 'r 39',
    'T_RIGHT_PAREN' => 'r 39',
    'T_RIGHT_BRACKET' => 'r 39',
    'T_RIGHT_BRACE' => 'r 39',
  ),
  80 => 
  array (
    'T_PIPE' => 'r 40',
    'T_MODULUS' => 'r 40',
    'T_DIVISION' => 'r 40',
    'T_MULTIPLICATION' => 'r 40',
    'T_MINUS' => 'r 40',
    'T_PLUS' => 'r 40',
    'T_NOT_INX' => 'r 40',
    'T_INX' => 'r 40',
    'T_NOT_IN' => 'r 40',
    'T_IN' => 'r 40',
    'T_GE' => 'r 40',
    'T_GT' => 'r 40',
    'T_LE' => 'r 40',
    'T_LT' => 'r 40',
    'T_NX' => 'r 40',
    'T_EX' => 'r 40',
    'T_NE' => 'r 40',
    'T_EQ' => 'r 40',
    'T_QUESTION' => 'r 40',
    'T_AND' => 'r 40',
    'T_XOR' => 'r 40',
    'T_OR' => 'r 40',
    'T_COLON' => 'r 40',
    'T_VARIABLE_END' => 'r 40',
    'T_RIGHT_PAREN' => 'r 40',
    'T_RIGHT_BRACKET' => 'r 40',
    'T_RIGHT_BRACE' => 'r 40',
  ),
  81 => 
  array (
    'T_PIPE' => 'r 41',
    'T_MODULUS' => 'r 41',
    'T_DIVISION' => 'r 41',
    'T_MULTIPLICATION' => 'r 41',
    'T_MINUS' => 'r 41',
    'T_PLUS' => 'r 41',
    'T_NOT_INX' => 'r 41',
    'T_INX' => 'r 41',
    'T_NOT_IN' => 'r 41',
    'T_IN' => 'r 41',
    'T_GE' => 'r 41',
    'T_GT' => 'r 41',
    'T_LE' => 'r 41',
    'T_LT' => 'r 41',
    'T_NX' => 'r 41',
    'T_EX' => 'r 41',
    'T_NE' => 'r 41',
    'T_EQ' => 'r 41',
    'T_QUESTION' => 'r 41',
    'T_AND' => 'r 41',
    'T_XOR' => 'r 41',
    'T_OR' => 'r 41',
    'T_COLON' => 'r 41',
    'T_VARIABLE_END' => 'r 41',
    'T_RIGHT_PAREN' => 'r 41',
    'T_RIGHT_BRACKET' => 'r 41',
    'T_RIGHT_BRACE' => 'r 41',
  ),
  82 => 
  array (
    'T_RIGHT_BRACKET' => 's 83',
  ),
  83 => 
  array (
    'T_ARROW' => 'r 45',
    'T_DOT' => 'r 45',
    'T_LEFT_BRACKET' => 'r 45',
    'T_PIPE' => 'r 45',
    'T_MODULUS' => 'r 45',
    'T_DIVISION' => 'r 45',
    'T_MULTIPLICATION' => 'r 45',
    'T_MINUS' => 'r 45',
    'T_PLUS' => 'r 45',
    'T_NOT_INX' => 'r 45',
    'T_INX' => 'r 45',
    'T_NOT_IN' => 'r 45',
    'T_IN' => 'r 45',
    'T_GE' => 'r 45',
    'T_GT' => 'r 45',
    'T_LE' => 'r 45',
    'T_LT' => 'r 45',
    'T_NX' => 'r 45',
    'T_EX' => 'r 45',
    'T_NE' => 'r 45',
    'T_EQ' => 'r 45',
    'T_QUESTION' => 'r 45',
    'T_AND' => 'r 45',
    'T_XOR' => 'r 45',
    'T_OR' => 'r 45',
    'T_COLON' => 'r 45',
    'T_VARIABLE_END' => 'r 45',
    'T_RIGHT_PAREN' => 'r 45',
    'T_RIGHT_BRACKET' => 'r 45',
    'T_RIGHT_BRACE' => 'r 45',
  ),
  84 => 
  array (
    'T_LEFT_BRACE' => 's 85',
    'T_ID' => 's 88',
  ),
  85 => 
  array (
    'expression' => 's 23',
    'terminal' => 's 68',
    'T_NOT' => 's 69',
    'T_MINUS' => 's 72',
    'T_LEFT_PAREN' => 's 71',
    'T_ID' => 's 74',
    'T_NUMBER' => 's 79',
    'T_SINGLE_QUOTED_STRING' => 's 80',
    'T_DOUBLE_QUOTED_STRING' => 's 81',
    'filtered_expression' => 's 86',
  ),
  86 => 
  array (
    'T_RIGHT_BRACE' => 's 87',
  ),
  87 => 
  array (
    'T_ARROW' => 'r 46',
    'T_DOT' => 'r 46',
    'T_LEFT_BRACKET' => 'r 46',
    'T_PIPE' => 'r 46',
    'T_MODULUS' => 'r 46',
    'T_DIVISION' => 'r 46',
    'T_MULTIPLICATION' => 'r 46',
    'T_MINUS' => 'r 46',
    'T_PLUS' => 'r 46',
    'T_NOT_INX' => 'r 46',
    'T_INX' => 'r 46',
    'T_NOT_IN' => 'r 46',
    'T_IN' => 'r 46',
    'T_GE' => 'r 46',
    'T_GT' => 'r 46',
    'T_LE' => 'r 46',
    'T_LT' => 'r 46',
    'T_NX' => 'r 46',
    'T_EX' => 'r 46',
    'T_NE' => 'r 46',
    'T_EQ' => 'r 46',
    'T_QUESTION' => 'r 46',
    'T_AND' => 'r 46',
    'T_XOR' => 'r 46',
    'T_OR' => 'r 46',
    'T_COLON' => 'r 46',
    'T_VARIABLE_END' => 'r 46',
    'T_RIGHT_PAREN' => 'r 46',
    'T_RIGHT_BRACKET' => 'r 46',
    'T_RIGHT_BRACE' => 'r 46',
  ),
  88 => 
  array (
    'T_ARROW' => 'r 48',
    'T_DOT' => 'r 48',
    'T_LEFT_BRACKET' => 'r 48',
    'T_PIPE' => 'r 48',
    'T_MODULUS' => 'r 48',
    'T_DIVISION' => 'r 48',
    'T_MULTIPLICATION' => 'r 48',
    'T_MINUS' => 'r 48',
    'T_PLUS' => 'r 48',
    'T_NOT_INX' => 'r 48',
    'T_INX' => 'r 48',
    'T_NOT_IN' => 'r 48',
    'T_IN' => 'r 48',
    'T_GE' => 'r 48',
    'T_GT' => 'r 48',
    'T_LE' => 'r 48',
    'T_LT' => 'r 48',
    'T_NX' => 'r 48',
    'T_EX' => 'r 48',
    'T_NE' => 'r 48',
    'T_EQ' => 'r 48',
    'T_QUESTION' => 'r 48',
    'T_AND' => 'r 48',
    'T_XOR' => 'r 48',
    'T_OR' => 'r 48',
    'T_COLON' => 'r 48',
    'T_VARIABLE_END' => 'r 48',
    'T_RIGHT_PAREN' => 'r 48',
    'T_RIGHT_BRACKET' => 'r 48',
    'T_RIGHT_BRACE' => 'r 48',
  ),
  89 => 
  array (
    'T_LEFT_BRACE' => 's 90',
    'T_ID' => 's 93',
  ),
  90 => 
  array (
    'expression' => 's 23',
    'terminal' => 's 68',
    'T_NOT' => 's 69',
    'T_MINUS' => 's 72',
    'T_LEFT_PAREN' => 's 71',
    'T_ID' => 's 74',
    'T_NUMBER' => 's 79',
    'T_SINGLE_QUOTED_STRING' => 's 80',
    'T_DOUBLE_QUOTED_STRING' => 's 81',
    'filtered_expression' => 's 91',
  ),
  91 => 
  array (
    'T_RIGHT_BRACE' => 's 92',
  ),
  92 => 
  array (
    'T_ARROW' => 'r 47',
    'T_DOT' => 'r 47',
    'T_LEFT_BRACKET' => 'r 47',
    'T_PIPE' => 'r 47',
    'T_MODULUS' => 'r 47',
    'T_DIVISION' => 'r 47',
    'T_MULTIPLICATION' => 'r 47',
    'T_MINUS' => 'r 47',
    'T_PLUS' => 'r 47',
    'T_NOT_INX' => 'r 47',
    'T_INX' => 'r 47',
    'T_NOT_IN' => 'r 47',
    'T_IN' => 'r 47',
    'T_GE' => 'r 47',
    'T_GT' => 'r 47',
    'T_LE' => 'r 47',
    'T_LT' => 'r 47',
    'T_NX' => 'r 47',
    'T_EX' => 'r 47',
    'T_NE' => 'r 47',
    'T_EQ' => 'r 47',
    'T_QUESTION' => 'r 47',
    'T_AND' => 'r 47',
    'T_XOR' => 'r 47',
    'T_OR' => 'r 47',
    'T_COLON' => 'r 47',
    'T_VARIABLE_END' => 'r 47',
    'T_RIGHT_PAREN' => 'r 47',
    'T_RIGHT_BRACKET' => 'r 47',
    'T_RIGHT_BRACE' => 'r 47',
  ),
  93 => 
  array (
    'T_ARROW' => 'r 49',
    'T_DOT' => 'r 49',
    'T_LEFT_BRACKET' => 'r 49',
    'T_PIPE' => 'r 49',
    'T_MODULUS' => 'r 49',
    'T_DIVISION' => 'r 49',
    'T_MULTIPLICATION' => 'r 49',
    'T_MINUS' => 'r 49',
    'T_PLUS' => 'r 49',
    'T_NOT_INX' => 'r 49',
    'T_INX' => 'r 49',
    'T_NOT_IN' => 'r 49',
    'T_IN' => 'r 49',
    'T_GE' => 'r 49',
    'T_GT' => 'r 49',
    'T_LE' => 'r 49',
    'T_LT' => 'r 49',
    'T_NX' => 'r 49',
    'T_EX' => 'r 49',
    'T_NE' => 'r 49',
    'T_EQ' => 'r 49',
    'T_QUESTION' => 'r 49',
    'T_AND' => 'r 49',
    'T_XOR' => 'r 49',
    'T_OR' => 'r 49',
    'T_COLON' => 'r 49',
    'T_VARIABLE_END' => 'r 49',
    'T_RIGHT_PAREN' => 'r 49',
    'T_RIGHT_BRACKET' => 'r 49',
    'T_RIGHT_BRACE' => 'r 49',
  ),
  94 => 
  array (
    'T_RIGHT_PAREN' => 's 95',
  ),
  95 => 
  array (
    'T_PIPE' => 'r 37',
    'T_MODULUS' => 'r 37',
    'T_DIVISION' => 'r 37',
    'T_MULTIPLICATION' => 'r 37',
    'T_MINUS' => 'r 37',
    'T_PLUS' => 'r 37',
    'T_NOT_INX' => 'r 37',
    'T_INX' => 'r 37',
    'T_NOT_IN' => 'r 37',
    'T_IN' => 'r 37',
    'T_GE' => 'r 37',
    'T_GT' => 'r 37',
    'T_LE' => 'r 37',
    'T_LT' => 'r 37',
    'T_NX' => 'r 37',
    'T_EX' => 'r 37',
    'T_NE' => 'r 37',
    'T_EQ' => 'r 37',
    'T_QUESTION' => 'r 37',
    'T_AND' => 'r 37',
    'T_XOR' => 'r 37',
    'T_OR' => 'r 37',
    'T_COLON' => 'r 37',
    'T_VARIABLE_END' => 'r 37',
    'T_RIGHT_PAREN' => 'r 37',
    'T_RIGHT_BRACKET' => 'r 37',
    'T_RIGHT_BRACE' => 'r 37',
  ),
  96 => 
  array (
    'T_PIPE' => 's 97',
    'T_VARIABLE_END' => 'r 50',
    'T_RIGHT_PAREN' => 'r 50',
    'T_RIGHT_BRACKET' => 'r 50',
    'T_RIGHT_BRACE' => 'r 50',
  ),
  97 => 
  array (
    'T_ID' => 's 98',
  ),
  98 => 
  array (
    'parameters' => 's 99',
    'T_COLON' => 'r 54',
    'T_PIPE' => 'r 54',
    'T_VARIABLE_END' => 'r 54',
    'T_RIGHT_PAREN' => 'r 54',
    'T_RIGHT_BRACKET' => 'r 54',
    'T_RIGHT_BRACE' => 'r 54',
  ),
  99 => 
  array (
    'T_COLON' => 's 100',
    'T_PIPE' => 'r 51',
    'T_VARIABLE_END' => 'r 51',
    'T_RIGHT_PAREN' => 'r 51',
    'T_RIGHT_BRACKET' => 'r 51',
    'T_RIGHT_BRACE' => 'r 51',
  ),
  100 => 
  array (
    'expression' => 's 101',
    'terminal' => 's 68',
    'T_NOT' => 's 69',
    'T_MINUS' => 's 72',
    'T_LEFT_PAREN' => 's 71',
    'T_ID' => 's 74',
    'T_NUMBER' => 's 79',
    'T_SINGLE_QUOTED_STRING' => 's 80',
    'T_DOUBLE_QUOTED_STRING' => 's 81',
  ),
  101 => 
  array (
    'T_OR' => 's 24',
    'T_XOR' => 's 26',
    'T_AND' => 's 28',
    'T_QUESTION' => 's 30',
    'T_EQ' => 's 34',
    'T_NE' => 's 36',
    'T_EX' => 's 38',
    'T_NX' => 's 40',
    'T_LT' => 's 42',
    'T_LE' => 's 44',
    'T_GT' => 's 46',
    'T_GE' => 's 48',
    'T_IN' => 's 50',
    'T_NOT_IN' => 's 52',
    'T_INX' => 's 54',
    'T_NOT_INX' => 's 56',
    'T_PLUS' => 's 58',
    'T_MINUS' => 's 60',
    'T_MULTIPLICATION' => 's 62',
    'T_DIVISION' => 's 64',
    'T_MODULUS' => 's 66',
    'T_COLON' => 'r 53',
    'T_PIPE' => 'r 53',
    'T_VARIABLE_END' => 'r 53',
    'T_RIGHT_PAREN' => 'r 53',
    'T_RIGHT_BRACKET' => 'r 53',
    'T_RIGHT_BRACE' => 'r 53',
  ),
  102 => 
  array (
    'T_BLOCK' => 's 16',
    'T_ENDBLOCK' => 's 103',
  ),
  103 => 
  array (
    'T_ID' => 's 104',
    'T_BLOCK_END' => 's 106',
  ),
  104 => 
  array (
    'T_BLOCK_END' => 's 105',
  ),
  105 => 
  array (
    'T_BLOCK_START' => 'r 11',
    'T_HTML' => 'r 11',
    'T_VARIABLE_START' => 'r 11',
    '#' => 'r 11',
  ),
  106 => 
  array (
    'T_BLOCK_START' => 'r 12',
    'T_HTML' => 'r 12',
    'T_VARIABLE_START' => 'r 12',
    '#' => 'r 12',
  ),
  107 => 
  array (
    'T_BLOCK_START' => 'r 10',
    'T_HTML' => 'r 10',
    'T_VARIABLE_START' => 'r 10',
    '#' => 'r 10',
  ),
  108 => 
  array (
    'T_BLOCK' => 's 16',
  ),
  109 => 
  array (
    'T_BLOCK_END' => 'r 4',
  ),
  110 => 
  array (
    'T_BLOCK_END' => 'r 5',
  ),
  111 => 
  array (
    'T_BLOCK_END' => 'r 6',
  ),
  112 => 
  array (
    'statements' => 's 6',
    'statement' => 's 7',
    'T_HTML' => 's 8',
    'T_VARIABLE_START' => 's 20',
    'T_BLOCK_START' => 's 108',
    '#' => 'r 1',
  ),
  113 => 
  array (
    '#' => 'r 55',
  ),
);
function reduce_0_start_1($tokens, &$result) {
#
# (0) start :=  T_BLOCK_START  T_EXTENDS  id_or_string  T_BLOCK_END  statements
#
$result = reset($tokens);
 echo 'extends '.$tokens[2]."\n"; foreach($tokens[4] as $c) echo $c; 
}

function reduce_1_start_2($tokens, &$result) {
#
# (1) start :=  statements
#
$result = reset($tokens);
 foreach($tokens[0] as $c) echo $c; 
}

function reduce_2_statements_1($tokens, &$result) {
#
# (2) statements :=  statements  statement
#
$result = reset($tokens);
 if (is_array($tokens[1])) {$result = array_merge($tokens[0], $tokens[1]);} else {$result = $tokens[0]; $result[] = $tokens[1];} 
}

function reduce_3_statements_2($tokens, &$result) {
#
# (3) statements :=
#
$result = reset($tokens);
 $result = array(); 
}

function reduce_4_id_or_string_1($tokens, &$result) {
#
# (4) id_or_string :=  T_ID
#
$result = reset($tokens);

}

function reduce_5_id_or_string_2($tokens, &$result) {
#
# (5) id_or_string :=  T_SINGLE_QUOTED_STRING
#
$result = reset($tokens);

}

function reduce_6_id_or_string_3($tokens, &$result) {
#
# (6) id_or_string :=  T_DOUBLE_QUOTED_STRING
#
$result = reset($tokens);

}

function reduce_7_statement_1($tokens, &$result) {
#
# (7) statement :=  T_HTML
#
$result = reset($tokens);

}

function reduce_8_statement_2($tokens, &$result) {
#
# (8) statement :=  statements  T_BLOCK_START  T_COMMENT  T_BLOCK_END  statements  T_BLOCK_START  T_ENDCOMMENT  T_BLOCK_END
#
$result = $tokens[0];

}

function reduce_9_statement_3($tokens, &$result) {
#
# (9) statement :=  T_VARIABLE_START  filtered_expression  T_VARIABLE_END
#
$result = $tokens[1];

}

function reduce_10_statement_4($tokens, &$result) {
#
# (10) statement :=  T_BLOCK_START  T_BLOCK  T_ID  T_BLOCK_END  statements  end_block
#
$result = $tokens[4];

}

function reduce_11_end_block_1($tokens, &$result) {
#
# (11) end_block :=  T_BLOCK_START  T_ENDBLOCK  T_ID  T_BLOCK_END
#
$result = $tokens[2];

}

function reduce_12_end_block_2($tokens, &$result) {
#
# (12) end_block :=  T_BLOCK_START  T_ENDBLOCK  T_BLOCK_END
#
$result = reset($tokens);
 $result = NULL; 
}

function reduce_13_expression_1($tokens, &$result) {
#
# (13) expression :=  expression  T_OR  expression
#
$result = reset($tokens);
 $result = $tokens[0].'||'.$tokens[2]; 
}

function reduce_14_expression_2($tokens, &$result) {
#
# (14) expression :=  expression  T_XOR  expression
#
$result = reset($tokens);
 $result = $tokens[0].' XOR '.$tokens[2]; 
}

function reduce_15_expression_3($tokens, &$result) {
#
# (15) expression :=  expression  T_AND  expression
#
$result = reset($tokens);
 $result = $tokens[0].'&&'.$tokens[2]; 
}

function reduce_16_expression_4($tokens, &$result) {
#
# (16) expression :=  expression  T_QUESTION  expression  T_COLON  expression
#
$result = reset($tokens);
 $result = $tokens[0].'?'.$tokens[2].':'.$tokens[4]; 
}

function reduce_17_expression_5($tokens, &$result) {
#
# (17) expression :=  expression  T_EQ  expression
#
$result = reset($tokens);
 $result = $tokens[0].'=='.$tokens[2]; 
}

function reduce_18_expression_6($tokens, &$result) {
#
# (18) expression :=  expression  T_NE  expression
#
$result = reset($tokens);
 $result = $tokens[0].'!='.$tokens[2]; 
}

function reduce_19_expression_7($tokens, &$result) {
#
# (19) expression :=  expression  T_EX  expression
#
$result = reset($tokens);
 $result = $tokens[0].'==='.$tokens[2]; 
}

function reduce_20_expression_8($tokens, &$result) {
#
# (20) expression :=  expression  T_NX  expression
#
$result = reset($tokens);
 $result = $tokens[0].'!=='.$tokens[2]; 
}

function reduce_21_expression_9($tokens, &$result) {
#
# (21) expression :=  expression  T_LT  expression
#
$result = reset($tokens);
 $result = $tokens[0].'<'.$tokens[2]; 
}

function reduce_22_expression_10($tokens, &$result) {
#
# (22) expression :=  expression  T_LE  expression
#
$result = reset($tokens);
 $result = $tokens[0].'<='.$tokens[2]; 
}

function reduce_23_expression_11($tokens, &$result) {
#
# (23) expression :=  expression  T_GT  expression
#
$result = reset($tokens);
 $result = $tokens[0].'>'.$tokens[2]; 
}

function reduce_24_expression_12($tokens, &$result) {
#
# (24) expression :=  expression  T_GE  expression
#
$result = reset($tokens);
 $result = $tokens[0].'>='.$tokens[2]; 
}

function reduce_25_expression_13($tokens, &$result) {
#
# (25) expression :=  expression  T_IN  expression
#
$result = reset($tokens);
 $result = '(is_array('.$tokens[2].')?in_array('.$tokens[0].', '.$tokens[2].'):FALSE!==strpos('.$tokens[2].', '.$tokens[0].'))'; 
}

function reduce_26_expression_14($tokens, &$result) {
#
# (26) expression :=  expression  T_NOT_IN  expression
#
$result = reset($tokens);
 $result = '(is_array('.$tokens[2].')?!in_array('.$tokens[0].', '.$tokens[2].'):FALSE===strpos('.$tokens[2].', '.$tokens[0].'))'; 
}

function reduce_27_expression_15($tokens, &$result) {
#
# (27) expression :=  expression  T_INX  expression
#
$result = reset($tokens);
 $result = '(is_array('.$tokens[2].')?in_array('.$tokens[0].', '.$tokens[2].', TRUE):FALSE!==strpos('.$tokens[2].', '.$tokens[0].'))'; 
}

function reduce_28_expression_16($tokens, &$result) {
#
# (28) expression :=  expression  T_NOT_INX  expression
#
$result = reset($tokens);
 $result = '(is_array('.$tokens[2].')?!in_array('.$tokens[0].', '.$tokens[2].', TRUE):FALSE===strpos('.$tokens[2].', '.$tokens[0].'))'; 
}

function reduce_29_expression_17($tokens, &$result) {
#
# (29) expression :=  expression  T_PLUS  expression
#
$result = reset($tokens);
 $result = $tokens[0].'+'.$tokens[2]; 
}

function reduce_30_expression_18($tokens, &$result) {
#
# (30) expression :=  expression  T_MINUS  expression
#
$result = reset($tokens);
 $result = $tokens[0].'-'.$tokens[2]; 
}

function reduce_31_expression_19($tokens, &$result) {
#
# (31) expression :=  expression  T_MULTIPLICATION  expression
#
$result = reset($tokens);
 $result = $tokens[0].'*'.$tokens[2]; 
}

function reduce_32_expression_20($tokens, &$result) {
#
# (32) expression :=  expression  T_DIVISION  expression
#
$result = reset($tokens);
 $result = $tokens[0].'/'.$tokens[2]; 
}

function reduce_33_expression_21($tokens, &$result) {
#
# (33) expression :=  expression  T_MODULUS  expression
#
$result = reset($tokens);
 $result = $tokens[0].'%'.$tokens[2]; 
}

function reduce_34_expression_22($tokens, &$result) {
#
# (34) expression :=  terminal
#
$result = reset($tokens);

}

function reduce_35_expression_23($tokens, &$result) {
#
# (35) expression :=  T_NOT  terminal
#
$result = reset($tokens);
 $result = '!'.$tokens[1]; 
}

function reduce_36_expression_24($tokens, &$result) {
#
# (36) expression :=  T_MINUS  terminal
#
$result = reset($tokens);
 $result = '-'.$tokens[1]; 
}

function reduce_37_terminal_1($tokens, &$result) {
#
# (37) terminal :=  T_LEFT_PAREN  filtered_expression  T_RIGHT_PAREN
#
$result = reset($tokens);
 $result = $tokens[1]; 
}

function reduce_38_terminal_2($tokens, &$result) {
#
# (38) terminal :=  T_ID  array_or_object
#
$result = reset($tokens);
 $result = '$'.$tokens[0].$tokens[1]; 
}

function reduce_39_terminal_3($tokens, &$result) {
#
# (39) terminal :=  T_NUMBER
#
$result = reset($tokens);

}

function reduce_40_terminal_4($tokens, &$result) {
#
# (40) terminal :=  T_SINGLE_QUOTED_STRING
#
$result = reset($tokens);

}

function reduce_41_terminal_5($tokens, &$result) {
#
# (41) terminal :=  T_DOUBLE_QUOTED_STRING
#
$result = reset($tokens);

}

function reduce_42_array_or_object_1($tokens, &$result) {
#
# (42) array_or_object :=  array_or_object  array
#
$result = reset($tokens);
 $result = $tokens[0].$tokens[1]; 
}

function reduce_43_array_or_object_2($tokens, &$result) {
#
# (43) array_or_object :=  array_or_object  object
#
$result = reset($tokens);
 $result = $tokens[0].$tokens[1]; 
}

function reduce_44_array_or_object_3($tokens, &$result) {
#
# (44) array_or_object :=
#
$result = reset($tokens);

}

function reduce_45_array_1($tokens, &$result) {
#
# (45) array :=  T_LEFT_BRACKET  filtered_expression  T_RIGHT_BRACKET
#
$result = reset($tokens);
 $result = '['.$tokens[1].']'; 
}

function reduce_46_object_1($tokens, &$result) {
#
# (46) object :=  T_ARROW  T_LEFT_BRACE  filtered_expression  T_RIGHT_BRACE
#
$result = reset($tokens);
 $result = '->{'.$tokens[2].'}'; 
}

function reduce_47_object_2($tokens, &$result) {
#
# (47) object :=  T_DOT  T_LEFT_BRACE  filtered_expression  T_RIGHT_BRACE
#
$result = reset($tokens);
 $result = '->{'.$tokens[2].'}'; 
}

function reduce_48_object_3($tokens, &$result) {
#
# (48) object :=  T_ARROW  T_ID
#
$result = reset($tokens);
 $result = '->'.$tokens[1]; 
}

function reduce_49_object_4($tokens, &$result) {
#
# (49) object :=  T_DOT  T_ID
#
$result = reset($tokens);
 $result = '->'.$tokens[1]; 
}

function reduce_50_filtered_expression_1($tokens, &$result) {
#
# (50) filtered_expression :=  expression  filters
#
$result = reset($tokens);
 $result = $this->_parse_filtered_expression($tokens[0], $tokens[1]); 
}

function reduce_51_filters_1($tokens, &$result) {
#
# (51) filters :=  filters  T_PIPE  T_ID  parameters
#
$result = reset($tokens);
 $tokens[0][] = array('name' => $tokens[2], 'parameters' => $tokens[3]); $result = $tokens[0]; 
}

function reduce_52_filters_2($tokens, &$result) {
#
# (52) filters :=
#
$result = reset($tokens);
 $result = array(); 
}

function reduce_53_parameters_1($tokens, &$result) {
#
# (53) parameters :=  parameters  T_COLON  expression
#
$result = reset($tokens);
 $tokens[0][] = $tokens[2]; $result = $tokens[0]; 
}

function reduce_54_parameters_2($tokens, &$result) {
#
# (54) parameters :=
#
$result = reset($tokens);
 $result = array(); 
}

function reduce_55_start_3($tokens, &$result) {
#
# (55) 'start' :=  start
#
$result = reset($tokens);

}

var $method = array (
  0 => 'reduce_0_start_1',
  1 => 'reduce_1_start_2',
  2 => 'reduce_2_statements_1',
  3 => 'reduce_3_statements_2',
  4 => 'reduce_4_id_or_string_1',
  5 => 'reduce_5_id_or_string_2',
  6 => 'reduce_6_id_or_string_3',
  7 => 'reduce_7_statement_1',
  8 => 'reduce_8_statement_2',
  9 => 'reduce_9_statement_3',
  10 => 'reduce_10_statement_4',
  11 => 'reduce_11_end_block_1',
  12 => 'reduce_12_end_block_2',
  13 => 'reduce_13_expression_1',
  14 => 'reduce_14_expression_2',
  15 => 'reduce_15_expression_3',
  16 => 'reduce_16_expression_4',
  17 => 'reduce_17_expression_5',
  18 => 'reduce_18_expression_6',
  19 => 'reduce_19_expression_7',
  20 => 'reduce_20_expression_8',
  21 => 'reduce_21_expression_9',
  22 => 'reduce_22_expression_10',
  23 => 'reduce_23_expression_11',
  24 => 'reduce_24_expression_12',
  25 => 'reduce_25_expression_13',
  26 => 'reduce_26_expression_14',
  27 => 'reduce_27_expression_15',
  28 => 'reduce_28_expression_16',
  29 => 'reduce_29_expression_17',
  30 => 'reduce_30_expression_18',
  31 => 'reduce_31_expression_19',
  32 => 'reduce_32_expression_20',
  33 => 'reduce_33_expression_21',
  34 => 'reduce_34_expression_22',
  35 => 'reduce_35_expression_23',
  36 => 'reduce_36_expression_24',
  37 => 'reduce_37_terminal_1',
  38 => 'reduce_38_terminal_2',
  39 => 'reduce_39_terminal_3',
  40 => 'reduce_40_terminal_4',
  41 => 'reduce_41_terminal_5',
  42 => 'reduce_42_array_or_object_1',
  43 => 'reduce_43_array_or_object_2',
  44 => 'reduce_44_array_or_object_3',
  45 => 'reduce_45_array_1',
  46 => 'reduce_46_object_1',
  47 => 'reduce_47_object_2',
  48 => 'reduce_48_object_3',
  49 => 'reduce_49_object_4',
  50 => 'reduce_50_filtered_expression_1',
  51 => 'reduce_51_filters_1',
  52 => 'reduce_52_filters_2',
  53 => 'reduce_53_parameters_1',
  54 => 'reduce_54_parameters_2',
  55 => 'reduce_55_start_3',
);
var $a = array (
  0 => 
  array (
    'symbol' => 'start',
    'len' => 5,
    'replace' => true,
  ),
  1 => 
  array (
    'symbol' => 'start',
    'len' => 1,
    'replace' => true,
  ),
  2 => 
  array (
    'symbol' => 'statements',
    'len' => 2,
    'replace' => true,
  ),
  3 => 
  array (
    'symbol' => 'statements',
    'len' => 0,
    'replace' => true,
  ),
  4 => 
  array (
    'symbol' => 'id_or_string',
    'len' => 1,
    'replace' => true,
  ),
  5 => 
  array (
    'symbol' => 'id_or_string',
    'len' => 1,
    'replace' => true,
  ),
  6 => 
  array (
    'symbol' => 'id_or_string',
    'len' => 1,
    'replace' => true,
  ),
  7 => 
  array (
    'symbol' => 'statement',
    'len' => 1,
    'replace' => true,
  ),
  8 => 
  array (
    'symbol' => 'statement',
    'len' => 8,
    'replace' => true,
  ),
  9 => 
  array (
    'symbol' => 'statement',
    'len' => 3,
    'replace' => true,
  ),
  10 => 
  array (
    'symbol' => 'statement',
    'len' => 6,
    'replace' => true,
  ),
  11 => 
  array (
    'symbol' => 'end_block',
    'len' => 4,
    'replace' => true,
  ),
  12 => 
  array (
    'symbol' => 'end_block',
    'len' => 3,
    'replace' => true,
  ),
  13 => 
  array (
    'symbol' => 'expression',
    'len' => 3,
    'replace' => true,
  ),
  14 => 
  array (
    'symbol' => 'expression',
    'len' => 3,
    'replace' => true,
  ),
  15 => 
  array (
    'symbol' => 'expression',
    'len' => 3,
    'replace' => true,
  ),
  16 => 
  array (
    'symbol' => 'expression',
    'len' => 5,
    'replace' => true,
  ),
  17 => 
  array (
    'symbol' => 'expression',
    'len' => 3,
    'replace' => true,
  ),
  18 => 
  array (
    'symbol' => 'expression',
    'len' => 3,
    'replace' => true,
  ),
  19 => 
  array (
    'symbol' => 'expression',
    'len' => 3,
    'replace' => true,
  ),
  20 => 
  array (
    'symbol' => 'expression',
    'len' => 3,
    'replace' => true,
  ),
  21 => 
  array (
    'symbol' => 'expression',
    'len' => 3,
    'replace' => true,
  ),
  22 => 
  array (
    'symbol' => 'expression',
    'len' => 3,
    'replace' => true,
  ),
  23 => 
  array (
    'symbol' => 'expression',
    'len' => 3,
    'replace' => true,
  ),
  24 => 
  array (
    'symbol' => 'expression',
    'len' => 3,
    'replace' => true,
  ),
  25 => 
  array (
    'symbol' => 'expression',
    'len' => 3,
    'replace' => true,
  ),
  26 => 
  array (
    'symbol' => 'expression',
    'len' => 3,
    'replace' => true,
  ),
  27 => 
  array (
    'symbol' => 'expression',
    'len' => 3,
    'replace' => true,
  ),
  28 => 
  array (
    'symbol' => 'expression',
    'len' => 3,
    'replace' => true,
  ),
  29 => 
  array (
    'symbol' => 'expression',
    'len' => 3,
    'replace' => true,
  ),
  30 => 
  array (
    'symbol' => 'expression',
    'len' => 3,
    'replace' => true,
  ),
  31 => 
  array (
    'symbol' => 'expression',
    'len' => 3,
    'replace' => true,
  ),
  32 => 
  array (
    'symbol' => 'expression',
    'len' => 3,
    'replace' => true,
  ),
  33 => 
  array (
    'symbol' => 'expression',
    'len' => 3,
    'replace' => true,
  ),
  34 => 
  array (
    'symbol' => 'expression',
    'len' => 1,
    'replace' => true,
  ),
  35 => 
  array (
    'symbol' => 'expression',
    'len' => 2,
    'replace' => true,
  ),
  36 => 
  array (
    'symbol' => 'expression',
    'len' => 2,
    'replace' => true,
  ),
  37 => 
  array (
    'symbol' => 'terminal',
    'len' => 3,
    'replace' => true,
  ),
  38 => 
  array (
    'symbol' => 'terminal',
    'len' => 2,
    'replace' => true,
  ),
  39 => 
  array (
    'symbol' => 'terminal',
    'len' => 1,
    'replace' => true,
  ),
  40 => 
  array (
    'symbol' => 'terminal',
    'len' => 1,
    'replace' => true,
  ),
  41 => 
  array (
    'symbol' => 'terminal',
    'len' => 1,
    'replace' => true,
  ),
  42 => 
  array (
    'symbol' => 'array_or_object',
    'len' => 2,
    'replace' => true,
  ),
  43 => 
  array (
    'symbol' => 'array_or_object',
    'len' => 2,
    'replace' => true,
  ),
  44 => 
  array (
    'symbol' => 'array_or_object',
    'len' => 0,
    'replace' => true,
  ),
  45 => 
  array (
    'symbol' => 'array',
    'len' => 3,
    'replace' => true,
  ),
  46 => 
  array (
    'symbol' => 'object',
    'len' => 4,
    'replace' => true,
  ),
  47 => 
  array (
    'symbol' => 'object',
    'len' => 4,
    'replace' => true,
  ),
  48 => 
  array (
    'symbol' => 'object',
    'len' => 2,
    'replace' => true,
  ),
  49 => 
  array (
    'symbol' => 'object',
    'len' => 2,
    'replace' => true,
  ),
  50 => 
  array (
    'symbol' => 'filtered_expression',
    'len' => 2,
    'replace' => true,
  ),
  51 => 
  array (
    'symbol' => 'filters',
    'len' => 4,
    'replace' => true,
  ),
  52 => 
  array (
    'symbol' => 'filters',
    'len' => 0,
    'replace' => true,
  ),
  53 => 
  array (
    'symbol' => 'parameters',
    'len' => 3,
    'replace' => true,
  ),
  54 => 
  array (
    'symbol' => 'parameters',
    'len' => 0,
    'replace' => true,
  ),
  55 => 
  array (
    'symbol' => '\'start\'',
    'len' => 1,
    'replace' => true,
  ),
);
}
