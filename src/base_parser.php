<?php

class Pjango_base_parser extends lime_parser {
var $qi = 0;
var $i = array (
  0 => 
  array (
    'statements' => 's 1',
    'start' => 's 153',
    '\'start\'' => 'a \'start\'',
    'T_HTML' => 'r 2',
    'T_EXTENDS' => 'r 2',
    'T_VARIABLE_START' => 'r 2',
    'T_BLOCK_START' => 'r 2',
    '#' => 'r 2',
  ),
  1 => 
  array (
    'statement' => 's 2',
    'T_HTML' => 's 3',
    'T_EXTENDS' => 's 4',
    'T_VARIABLE_START' => 's 10',
    'T_BLOCK_START' => 's 98',
    '#' => 'r 0',
  ),
  2 => 
  array (
    'T_HTML' => 'r 1',
    'T_EXTENDS' => 'r 1',
    'T_VARIABLE_START' => 'r 1',
    'T_BLOCK_START' => 'r 1',
    '#' => 'r 1',
  ),
  3 => 
  array (
    'T_HTML' => 'r 8',
    'T_EXTENDS' => 'r 8',
    'T_VARIABLE_START' => 'r 8',
    'T_BLOCK_START' => 'r 8',
    '#' => 'r 8',
  ),
  4 => 
  array (
    'T_ID' => 's 5',
    'T_SINGLE_QUOTED_STRING' => 's 6',
    'T_DOUBLE_QUOTED_STRING' => 's 7',
    'id_or_string' => 's 8',
  ),
  5 => 
  array (
    'T_BLOCK_END' => 'r 3',
  ),
  6 => 
  array (
    'T_BLOCK_END' => 'r 4',
  ),
  7 => 
  array (
    'T_BLOCK_END' => 'r 5',
  ),
  8 => 
  array (
    'T_BLOCK_END' => 's 9',
  ),
  9 => 
  array (
    'T_HTML' => 'r 9',
    'T_EXTENDS' => 'r 9',
    'T_VARIABLE_START' => 'r 9',
    'T_BLOCK_START' => 'r 9',
    '#' => 'r 9',
  ),
  10 => 
  array (
    'filtered_expression' => 's 11',
    'expression' => 's 13',
    'terminal' => 's 62',
    'T_NOT' => 's 63',
    'T_MINUS' => 's 66',
    'T_LEFT_PAREN' => 's 65',
    'T_ID' => 's 68',
    'T_NUMBER' => 's 73',
    'T_SINGLE_QUOTED_STRING' => 's 74',
    'T_DOUBLE_QUOTED_STRING' => 's 75',
    'T_TRUE' => 's 76',
    'T_FALSE' => 's 77',
  ),
  11 => 
  array (
    'T_VARIABLE_END' => 's 12',
  ),
  12 => 
  array (
    'T_HTML' => 'r 10',
    'T_EXTENDS' => 'r 10',
    'T_VARIABLE_START' => 'r 10',
    'T_BLOCK_START' => 'r 10',
    '#' => 'r 10',
  ),
  13 => 
  array (
    'T_OR' => 's 14',
    'T_XOR' => 's 16',
    'T_AND' => 's 18',
    'T_QUESTION' => 's 20',
    'T_OR_SYMBOL' => 's 24',
    'T_AND_SYMBOL' => 's 26',
    'T_EQ' => 's 28',
    'T_NE' => 's 30',
    'T_EX' => 's 32',
    'T_NX' => 's 34',
    'T_LT' => 's 36',
    'T_LE' => 's 38',
    'T_GT' => 's 40',
    'T_GE' => 's 42',
    'T_IN' => 's 44',
    'T_NOT_IN' => 's 46',
    'T_INX' => 's 48',
    'T_NOT_INX' => 's 50',
    'T_PLUS' => 's 52',
    'T_MINUS' => 's 54',
    'T_MULTIPLICATION' => 's 56',
    'T_DIVISION' => 's 58',
    'T_MODULUS' => 's 60',
    'filters' => 's 92',
    'T_PIPE' => 'r 67',
    'T_VARIABLE_END' => 'r 67',
    'T_RIGHT_PAREN' => 'r 67',
    'T_RIGHT_BRACKET' => 'r 67',
    'T_RIGHT_BRACE' => 'r 67',
    'T_BLOCK_END' => 'r 67',
    'T_NOT' => 'r 67',
    'T_LEFT_PAREN' => 'r 67',
    'T_ID' => 'r 67',
    'T_NUMBER' => 'r 67',
    'T_SINGLE_QUOTED_STRING' => 'r 67',
    'T_DOUBLE_QUOTED_STRING' => 'r 67',
    'T_TRUE' => 'r 67',
    'T_FALSE' => 'r 67',
  ),
  14 => 
  array (
    'expression' => 's 15',
    'terminal' => 's 62',
    'T_NOT' => 's 63',
    'T_MINUS' => 's 66',
    'T_LEFT_PAREN' => 's 65',
    'T_ID' => 's 68',
    'T_NUMBER' => 's 73',
    'T_SINGLE_QUOTED_STRING' => 's 74',
    'T_DOUBLE_QUOTED_STRING' => 's 75',
    'T_TRUE' => 's 76',
    'T_FALSE' => 's 77',
  ),
  15 => 
  array (
    'T_OR' => 'r 24',
    'T_XOR' => 's 16',
    'T_AND' => 's 18',
    'T_QUESTION' => 's 20',
    'T_OR_SYMBOL' => 's 24',
    'T_AND_SYMBOL' => 's 26',
    'T_EQ' => 's 28',
    'T_NE' => 's 30',
    'T_EX' => 's 32',
    'T_NX' => 's 34',
    'T_LT' => 's 36',
    'T_LE' => 's 38',
    'T_GT' => 's 40',
    'T_GE' => 's 42',
    'T_IN' => 's 44',
    'T_NOT_IN' => 's 46',
    'T_INX' => 's 48',
    'T_NOT_INX' => 's 50',
    'T_PLUS' => 's 52',
    'T_MINUS' => 's 54',
    'T_MULTIPLICATION' => 's 56',
    'T_DIVISION' => 's 58',
    'T_MODULUS' => 's 60',
    'T_PIPE' => 'r 24',
    'T_COLON' => 'r 24',
    'T_VARIABLE_END' => 'r 24',
    'T_RIGHT_PAREN' => 'r 24',
    'T_RIGHT_BRACKET' => 'r 24',
    'T_RIGHT_BRACE' => 'r 24',
    'T_BLOCK_END' => 'r 24',
    'T_NOT' => 'r 24',
    'T_LEFT_PAREN' => 'r 24',
    'T_ID' => 'r 24',
    'T_NUMBER' => 'r 24',
    'T_SINGLE_QUOTED_STRING' => 'r 24',
    'T_DOUBLE_QUOTED_STRING' => 'r 24',
    'T_TRUE' => 'r 24',
    'T_FALSE' => 'r 24',
  ),
  16 => 
  array (
    'expression' => 's 17',
    'terminal' => 's 62',
    'T_NOT' => 's 63',
    'T_MINUS' => 's 66',
    'T_LEFT_PAREN' => 's 65',
    'T_ID' => 's 68',
    'T_NUMBER' => 's 73',
    'T_SINGLE_QUOTED_STRING' => 's 74',
    'T_DOUBLE_QUOTED_STRING' => 's 75',
    'T_TRUE' => 's 76',
    'T_FALSE' => 's 77',
  ),
  17 => 
  array (
    'T_OR' => 'r 25',
    'T_XOR' => 'r 25',
    'T_AND' => 's 18',
    'T_QUESTION' => 's 20',
    'T_OR_SYMBOL' => 's 24',
    'T_AND_SYMBOL' => 's 26',
    'T_EQ' => 's 28',
    'T_NE' => 's 30',
    'T_EX' => 's 32',
    'T_NX' => 's 34',
    'T_LT' => 's 36',
    'T_LE' => 's 38',
    'T_GT' => 's 40',
    'T_GE' => 's 42',
    'T_IN' => 's 44',
    'T_NOT_IN' => 's 46',
    'T_INX' => 's 48',
    'T_NOT_INX' => 's 50',
    'T_PLUS' => 's 52',
    'T_MINUS' => 's 54',
    'T_MULTIPLICATION' => 's 56',
    'T_DIVISION' => 's 58',
    'T_MODULUS' => 's 60',
    'T_PIPE' => 'r 25',
    'T_COLON' => 'r 25',
    'T_VARIABLE_END' => 'r 25',
    'T_RIGHT_PAREN' => 'r 25',
    'T_RIGHT_BRACKET' => 'r 25',
    'T_RIGHT_BRACE' => 'r 25',
    'T_BLOCK_END' => 'r 25',
    'T_NOT' => 'r 25',
    'T_LEFT_PAREN' => 'r 25',
    'T_ID' => 'r 25',
    'T_NUMBER' => 'r 25',
    'T_SINGLE_QUOTED_STRING' => 'r 25',
    'T_DOUBLE_QUOTED_STRING' => 'r 25',
    'T_TRUE' => 'r 25',
    'T_FALSE' => 'r 25',
  ),
  18 => 
  array (
    'expression' => 's 19',
    'terminal' => 's 62',
    'T_NOT' => 's 63',
    'T_MINUS' => 's 66',
    'T_LEFT_PAREN' => 's 65',
    'T_ID' => 's 68',
    'T_NUMBER' => 's 73',
    'T_SINGLE_QUOTED_STRING' => 's 74',
    'T_DOUBLE_QUOTED_STRING' => 's 75',
    'T_TRUE' => 's 76',
    'T_FALSE' => 's 77',
  ),
  19 => 
  array (
    'T_OR' => 'r 26',
    'T_XOR' => 'r 26',
    'T_AND' => 'r 26',
    'T_QUESTION' => 's 20',
    'T_OR_SYMBOL' => 's 24',
    'T_AND_SYMBOL' => 's 26',
    'T_EQ' => 's 28',
    'T_NE' => 's 30',
    'T_EX' => 's 32',
    'T_NX' => 's 34',
    'T_LT' => 's 36',
    'T_LE' => 's 38',
    'T_GT' => 's 40',
    'T_GE' => 's 42',
    'T_IN' => 's 44',
    'T_NOT_IN' => 's 46',
    'T_INX' => 's 48',
    'T_NOT_INX' => 's 50',
    'T_PLUS' => 's 52',
    'T_MINUS' => 's 54',
    'T_MULTIPLICATION' => 's 56',
    'T_DIVISION' => 's 58',
    'T_MODULUS' => 's 60',
    'T_PIPE' => 'r 26',
    'T_COLON' => 'r 26',
    'T_VARIABLE_END' => 'r 26',
    'T_RIGHT_PAREN' => 'r 26',
    'T_RIGHT_BRACKET' => 'r 26',
    'T_RIGHT_BRACE' => 'r 26',
    'T_BLOCK_END' => 'r 26',
    'T_NOT' => 'r 26',
    'T_LEFT_PAREN' => 'r 26',
    'T_ID' => 'r 26',
    'T_NUMBER' => 'r 26',
    'T_SINGLE_QUOTED_STRING' => 'r 26',
    'T_DOUBLE_QUOTED_STRING' => 'r 26',
    'T_TRUE' => 'r 26',
    'T_FALSE' => 'r 26',
  ),
  20 => 
  array (
    'expression' => 's 21',
    'terminal' => 's 62',
    'T_NOT' => 's 63',
    'T_MINUS' => 's 66',
    'T_LEFT_PAREN' => 's 65',
    'T_ID' => 's 68',
    'T_NUMBER' => 's 73',
    'T_SINGLE_QUOTED_STRING' => 's 74',
    'T_DOUBLE_QUOTED_STRING' => 's 75',
    'T_TRUE' => 's 76',
    'T_FALSE' => 's 77',
  ),
  21 => 
  array (
    'T_OR' => 's 14',
    'T_XOR' => 's 16',
    'T_AND' => 's 18',
    'T_QUESTION' => 's 20',
    'T_COLON' => 's 22',
    'T_OR_SYMBOL' => 's 24',
    'T_AND_SYMBOL' => 's 26',
    'T_EQ' => 's 28',
    'T_NE' => 's 30',
    'T_EX' => 's 32',
    'T_NX' => 's 34',
    'T_LT' => 's 36',
    'T_LE' => 's 38',
    'T_GT' => 's 40',
    'T_GE' => 's 42',
    'T_IN' => 's 44',
    'T_NOT_IN' => 's 46',
    'T_INX' => 's 48',
    'T_NOT_INX' => 's 50',
    'T_PLUS' => 's 52',
    'T_MINUS' => 's 54',
    'T_MULTIPLICATION' => 's 56',
    'T_DIVISION' => 's 58',
    'T_MODULUS' => 's 60',
  ),
  22 => 
  array (
    'expression' => 's 23',
    'terminal' => 's 62',
    'T_NOT' => 's 63',
    'T_MINUS' => 's 66',
    'T_LEFT_PAREN' => 's 65',
    'T_ID' => 's 68',
    'T_NUMBER' => 's 73',
    'T_SINGLE_QUOTED_STRING' => 's 74',
    'T_DOUBLE_QUOTED_STRING' => 's 75',
    'T_TRUE' => 's 76',
    'T_FALSE' => 's 77',
  ),
  23 => 
  array (
    'T_OR' => 'r 27',
    'T_XOR' => 'r 27',
    'T_AND' => 'r 27',
    'T_QUESTION' => 'r 27',
    'T_OR_SYMBOL' => 's 24',
    'T_AND_SYMBOL' => 's 26',
    'T_EQ' => 's 28',
    'T_NE' => 's 30',
    'T_EX' => 's 32',
    'T_NX' => 's 34',
    'T_LT' => 's 36',
    'T_LE' => 's 38',
    'T_GT' => 's 40',
    'T_GE' => 's 42',
    'T_IN' => 's 44',
    'T_NOT_IN' => 's 46',
    'T_INX' => 's 48',
    'T_NOT_INX' => 's 50',
    'T_PLUS' => 's 52',
    'T_MINUS' => 's 54',
    'T_MULTIPLICATION' => 's 56',
    'T_DIVISION' => 's 58',
    'T_MODULUS' => 's 60',
    'T_PIPE' => 'r 27',
    'T_COLON' => 'r 27',
    'T_VARIABLE_END' => 'r 27',
    'T_RIGHT_PAREN' => 'r 27',
    'T_RIGHT_BRACKET' => 'r 27',
    'T_RIGHT_BRACE' => 'r 27',
    'T_BLOCK_END' => 'r 27',
    'T_NOT' => 'r 27',
    'T_LEFT_PAREN' => 'r 27',
    'T_ID' => 'r 27',
    'T_NUMBER' => 'r 27',
    'T_SINGLE_QUOTED_STRING' => 'r 27',
    'T_DOUBLE_QUOTED_STRING' => 'r 27',
    'T_TRUE' => 'r 27',
    'T_FALSE' => 'r 27',
  ),
  24 => 
  array (
    'expression' => 's 25',
    'terminal' => 's 62',
    'T_NOT' => 's 63',
    'T_MINUS' => 's 66',
    'T_LEFT_PAREN' => 's 65',
    'T_ID' => 's 68',
    'T_NUMBER' => 's 73',
    'T_SINGLE_QUOTED_STRING' => 's 74',
    'T_DOUBLE_QUOTED_STRING' => 's 75',
    'T_TRUE' => 's 76',
    'T_FALSE' => 's 77',
  ),
  25 => 
  array (
    'T_OR' => 'r 28',
    'T_XOR' => 'r 28',
    'T_AND' => 'r 28',
    'T_QUESTION' => 'r 28',
    'T_OR_SYMBOL' => 'r 28',
    'T_AND_SYMBOL' => 's 26',
    'T_EQ' => 's 28',
    'T_NE' => 's 30',
    'T_EX' => 's 32',
    'T_NX' => 's 34',
    'T_LT' => 's 36',
    'T_LE' => 's 38',
    'T_GT' => 's 40',
    'T_GE' => 's 42',
    'T_IN' => 's 44',
    'T_NOT_IN' => 's 46',
    'T_INX' => 's 48',
    'T_NOT_INX' => 's 50',
    'T_PLUS' => 's 52',
    'T_MINUS' => 's 54',
    'T_MULTIPLICATION' => 's 56',
    'T_DIVISION' => 's 58',
    'T_MODULUS' => 's 60',
    'T_PIPE' => 'r 28',
    'T_COLON' => 'r 28',
    'T_VARIABLE_END' => 'r 28',
    'T_RIGHT_PAREN' => 'r 28',
    'T_RIGHT_BRACKET' => 'r 28',
    'T_RIGHT_BRACE' => 'r 28',
    'T_BLOCK_END' => 'r 28',
    'T_NOT' => 'r 28',
    'T_LEFT_PAREN' => 'r 28',
    'T_ID' => 'r 28',
    'T_NUMBER' => 'r 28',
    'T_SINGLE_QUOTED_STRING' => 'r 28',
    'T_DOUBLE_QUOTED_STRING' => 'r 28',
    'T_TRUE' => 'r 28',
    'T_FALSE' => 'r 28',
  ),
  26 => 
  array (
    'expression' => 's 27',
    'terminal' => 's 62',
    'T_NOT' => 's 63',
    'T_MINUS' => 's 66',
    'T_LEFT_PAREN' => 's 65',
    'T_ID' => 's 68',
    'T_NUMBER' => 's 73',
    'T_SINGLE_QUOTED_STRING' => 's 74',
    'T_DOUBLE_QUOTED_STRING' => 's 75',
    'T_TRUE' => 's 76',
    'T_FALSE' => 's 77',
  ),
  27 => 
  array (
    'T_OR' => 'r 29',
    'T_XOR' => 'r 29',
    'T_AND' => 'r 29',
    'T_QUESTION' => 'r 29',
    'T_OR_SYMBOL' => 'r 29',
    'T_AND_SYMBOL' => 'r 29',
    'T_EQ' => 's 28',
    'T_NE' => 's 30',
    'T_EX' => 's 32',
    'T_NX' => 's 34',
    'T_LT' => 's 36',
    'T_LE' => 's 38',
    'T_GT' => 's 40',
    'T_GE' => 's 42',
    'T_IN' => 's 44',
    'T_NOT_IN' => 's 46',
    'T_INX' => 's 48',
    'T_NOT_INX' => 's 50',
    'T_PLUS' => 's 52',
    'T_MINUS' => 's 54',
    'T_MULTIPLICATION' => 's 56',
    'T_DIVISION' => 's 58',
    'T_MODULUS' => 's 60',
    'T_PIPE' => 'r 29',
    'T_COLON' => 'r 29',
    'T_VARIABLE_END' => 'r 29',
    'T_RIGHT_PAREN' => 'r 29',
    'T_RIGHT_BRACKET' => 'r 29',
    'T_RIGHT_BRACE' => 'r 29',
    'T_BLOCK_END' => 'r 29',
    'T_NOT' => 'r 29',
    'T_LEFT_PAREN' => 'r 29',
    'T_ID' => 'r 29',
    'T_NUMBER' => 'r 29',
    'T_SINGLE_QUOTED_STRING' => 'r 29',
    'T_DOUBLE_QUOTED_STRING' => 'r 29',
    'T_TRUE' => 'r 29',
    'T_FALSE' => 'r 29',
  ),
  28 => 
  array (
    'expression' => 's 29',
    'terminal' => 's 62',
    'T_NOT' => 's 63',
    'T_MINUS' => 's 66',
    'T_LEFT_PAREN' => 's 65',
    'T_ID' => 's 68',
    'T_NUMBER' => 's 73',
    'T_SINGLE_QUOTED_STRING' => 's 74',
    'T_DOUBLE_QUOTED_STRING' => 's 75',
    'T_TRUE' => 's 76',
    'T_FALSE' => 's 77',
  ),
  29 => 
  array (
    'T_OR' => 'r 30',
    'T_XOR' => 'r 30',
    'T_AND' => 'r 30',
    'T_QUESTION' => 'r 30',
    'T_OR_SYMBOL' => 'r 30',
    'T_AND_SYMBOL' => 'r 30',
    'T_LT' => 's 36',
    'T_LE' => 's 38',
    'T_GT' => 's 40',
    'T_GE' => 's 42',
    'T_IN' => 's 44',
    'T_NOT_IN' => 's 46',
    'T_INX' => 's 48',
    'T_NOT_INX' => 's 50',
    'T_PLUS' => 's 52',
    'T_MINUS' => 's 54',
    'T_MULTIPLICATION' => 's 56',
    'T_DIVISION' => 's 58',
    'T_MODULUS' => 's 60',
    'T_PIPE' => 'r 30',
    'T_COLON' => 'r 30',
    'T_VARIABLE_END' => 'r 30',
    'T_RIGHT_PAREN' => 'r 30',
    'T_RIGHT_BRACKET' => 'r 30',
    'T_RIGHT_BRACE' => 'r 30',
    'T_BLOCK_END' => 'r 30',
    'T_NOT' => 'r 30',
    'T_LEFT_PAREN' => 'r 30',
    'T_ID' => 'r 30',
    'T_NUMBER' => 'r 30',
    'T_SINGLE_QUOTED_STRING' => 'r 30',
    'T_DOUBLE_QUOTED_STRING' => 'r 30',
    'T_TRUE' => 'r 30',
    'T_FALSE' => 'r 30',
  ),
  30 => 
  array (
    'expression' => 's 31',
    'terminal' => 's 62',
    'T_NOT' => 's 63',
    'T_MINUS' => 's 66',
    'T_LEFT_PAREN' => 's 65',
    'T_ID' => 's 68',
    'T_NUMBER' => 's 73',
    'T_SINGLE_QUOTED_STRING' => 's 74',
    'T_DOUBLE_QUOTED_STRING' => 's 75',
    'T_TRUE' => 's 76',
    'T_FALSE' => 's 77',
  ),
  31 => 
  array (
    'T_OR' => 'r 31',
    'T_XOR' => 'r 31',
    'T_AND' => 'r 31',
    'T_QUESTION' => 'r 31',
    'T_OR_SYMBOL' => 'r 31',
    'T_AND_SYMBOL' => 'r 31',
    'T_LT' => 's 36',
    'T_LE' => 's 38',
    'T_GT' => 's 40',
    'T_GE' => 's 42',
    'T_IN' => 's 44',
    'T_NOT_IN' => 's 46',
    'T_INX' => 's 48',
    'T_NOT_INX' => 's 50',
    'T_PLUS' => 's 52',
    'T_MINUS' => 's 54',
    'T_MULTIPLICATION' => 's 56',
    'T_DIVISION' => 's 58',
    'T_MODULUS' => 's 60',
    'T_PIPE' => 'r 31',
    'T_COLON' => 'r 31',
    'T_VARIABLE_END' => 'r 31',
    'T_RIGHT_PAREN' => 'r 31',
    'T_RIGHT_BRACKET' => 'r 31',
    'T_RIGHT_BRACE' => 'r 31',
    'T_BLOCK_END' => 'r 31',
    'T_NOT' => 'r 31',
    'T_LEFT_PAREN' => 'r 31',
    'T_ID' => 'r 31',
    'T_NUMBER' => 'r 31',
    'T_SINGLE_QUOTED_STRING' => 'r 31',
    'T_DOUBLE_QUOTED_STRING' => 'r 31',
    'T_TRUE' => 'r 31',
    'T_FALSE' => 'r 31',
  ),
  32 => 
  array (
    'expression' => 's 33',
    'terminal' => 's 62',
    'T_NOT' => 's 63',
    'T_MINUS' => 's 66',
    'T_LEFT_PAREN' => 's 65',
    'T_ID' => 's 68',
    'T_NUMBER' => 's 73',
    'T_SINGLE_QUOTED_STRING' => 's 74',
    'T_DOUBLE_QUOTED_STRING' => 's 75',
    'T_TRUE' => 's 76',
    'T_FALSE' => 's 77',
  ),
  33 => 
  array (
    'T_OR' => 'r 32',
    'T_XOR' => 'r 32',
    'T_AND' => 'r 32',
    'T_QUESTION' => 'r 32',
    'T_OR_SYMBOL' => 'r 32',
    'T_AND_SYMBOL' => 'r 32',
    'T_LT' => 's 36',
    'T_LE' => 's 38',
    'T_GT' => 's 40',
    'T_GE' => 's 42',
    'T_IN' => 's 44',
    'T_NOT_IN' => 's 46',
    'T_INX' => 's 48',
    'T_NOT_INX' => 's 50',
    'T_PLUS' => 's 52',
    'T_MINUS' => 's 54',
    'T_MULTIPLICATION' => 's 56',
    'T_DIVISION' => 's 58',
    'T_MODULUS' => 's 60',
    'T_PIPE' => 'r 32',
    'T_COLON' => 'r 32',
    'T_VARIABLE_END' => 'r 32',
    'T_RIGHT_PAREN' => 'r 32',
    'T_RIGHT_BRACKET' => 'r 32',
    'T_RIGHT_BRACE' => 'r 32',
    'T_BLOCK_END' => 'r 32',
    'T_NOT' => 'r 32',
    'T_LEFT_PAREN' => 'r 32',
    'T_ID' => 'r 32',
    'T_NUMBER' => 'r 32',
    'T_SINGLE_QUOTED_STRING' => 'r 32',
    'T_DOUBLE_QUOTED_STRING' => 'r 32',
    'T_TRUE' => 'r 32',
    'T_FALSE' => 'r 32',
  ),
  34 => 
  array (
    'expression' => 's 35',
    'terminal' => 's 62',
    'T_NOT' => 's 63',
    'T_MINUS' => 's 66',
    'T_LEFT_PAREN' => 's 65',
    'T_ID' => 's 68',
    'T_NUMBER' => 's 73',
    'T_SINGLE_QUOTED_STRING' => 's 74',
    'T_DOUBLE_QUOTED_STRING' => 's 75',
    'T_TRUE' => 's 76',
    'T_FALSE' => 's 77',
  ),
  35 => 
  array (
    'T_OR' => 'r 33',
    'T_XOR' => 'r 33',
    'T_AND' => 'r 33',
    'T_QUESTION' => 'r 33',
    'T_OR_SYMBOL' => 'r 33',
    'T_AND_SYMBOL' => 'r 33',
    'T_LT' => 's 36',
    'T_LE' => 's 38',
    'T_GT' => 's 40',
    'T_GE' => 's 42',
    'T_IN' => 's 44',
    'T_NOT_IN' => 's 46',
    'T_INX' => 's 48',
    'T_NOT_INX' => 's 50',
    'T_PLUS' => 's 52',
    'T_MINUS' => 's 54',
    'T_MULTIPLICATION' => 's 56',
    'T_DIVISION' => 's 58',
    'T_MODULUS' => 's 60',
    'T_PIPE' => 'r 33',
    'T_COLON' => 'r 33',
    'T_VARIABLE_END' => 'r 33',
    'T_RIGHT_PAREN' => 'r 33',
    'T_RIGHT_BRACKET' => 'r 33',
    'T_RIGHT_BRACE' => 'r 33',
    'T_BLOCK_END' => 'r 33',
    'T_NOT' => 'r 33',
    'T_LEFT_PAREN' => 'r 33',
    'T_ID' => 'r 33',
    'T_NUMBER' => 'r 33',
    'T_SINGLE_QUOTED_STRING' => 'r 33',
    'T_DOUBLE_QUOTED_STRING' => 'r 33',
    'T_TRUE' => 'r 33',
    'T_FALSE' => 'r 33',
  ),
  36 => 
  array (
    'expression' => 's 37',
    'terminal' => 's 62',
    'T_NOT' => 's 63',
    'T_MINUS' => 's 66',
    'T_LEFT_PAREN' => 's 65',
    'T_ID' => 's 68',
    'T_NUMBER' => 's 73',
    'T_SINGLE_QUOTED_STRING' => 's 74',
    'T_DOUBLE_QUOTED_STRING' => 's 75',
    'T_TRUE' => 's 76',
    'T_FALSE' => 's 77',
  ),
  37 => 
  array (
    'T_OR' => 'r 34',
    'T_XOR' => 'r 34',
    'T_AND' => 'r 34',
    'T_QUESTION' => 'r 34',
    'T_OR_SYMBOL' => 'r 34',
    'T_AND_SYMBOL' => 'r 34',
    'T_EQ' => 'r 34',
    'T_NE' => 'r 34',
    'T_EX' => 'r 34',
    'T_NX' => 'r 34',
    'T_IN' => 's 44',
    'T_NOT_IN' => 's 46',
    'T_INX' => 's 48',
    'T_NOT_INX' => 's 50',
    'T_PLUS' => 's 52',
    'T_MINUS' => 's 54',
    'T_MULTIPLICATION' => 's 56',
    'T_DIVISION' => 's 58',
    'T_MODULUS' => 's 60',
    'T_PIPE' => 'r 34',
    'T_COLON' => 'r 34',
    'T_VARIABLE_END' => 'r 34',
    'T_RIGHT_PAREN' => 'r 34',
    'T_RIGHT_BRACKET' => 'r 34',
    'T_RIGHT_BRACE' => 'r 34',
    'T_BLOCK_END' => 'r 34',
    'T_NOT' => 'r 34',
    'T_LEFT_PAREN' => 'r 34',
    'T_ID' => 'r 34',
    'T_NUMBER' => 'r 34',
    'T_SINGLE_QUOTED_STRING' => 'r 34',
    'T_DOUBLE_QUOTED_STRING' => 'r 34',
    'T_TRUE' => 'r 34',
    'T_FALSE' => 'r 34',
  ),
  38 => 
  array (
    'expression' => 's 39',
    'terminal' => 's 62',
    'T_NOT' => 's 63',
    'T_MINUS' => 's 66',
    'T_LEFT_PAREN' => 's 65',
    'T_ID' => 's 68',
    'T_NUMBER' => 's 73',
    'T_SINGLE_QUOTED_STRING' => 's 74',
    'T_DOUBLE_QUOTED_STRING' => 's 75',
    'T_TRUE' => 's 76',
    'T_FALSE' => 's 77',
  ),
  39 => 
  array (
    'T_OR' => 'r 35',
    'T_XOR' => 'r 35',
    'T_AND' => 'r 35',
    'T_QUESTION' => 'r 35',
    'T_OR_SYMBOL' => 'r 35',
    'T_AND_SYMBOL' => 'r 35',
    'T_EQ' => 'r 35',
    'T_NE' => 'r 35',
    'T_EX' => 'r 35',
    'T_NX' => 'r 35',
    'T_IN' => 's 44',
    'T_NOT_IN' => 's 46',
    'T_INX' => 's 48',
    'T_NOT_INX' => 's 50',
    'T_PLUS' => 's 52',
    'T_MINUS' => 's 54',
    'T_MULTIPLICATION' => 's 56',
    'T_DIVISION' => 's 58',
    'T_MODULUS' => 's 60',
    'T_PIPE' => 'r 35',
    'T_COLON' => 'r 35',
    'T_VARIABLE_END' => 'r 35',
    'T_RIGHT_PAREN' => 'r 35',
    'T_RIGHT_BRACKET' => 'r 35',
    'T_RIGHT_BRACE' => 'r 35',
    'T_BLOCK_END' => 'r 35',
    'T_NOT' => 'r 35',
    'T_LEFT_PAREN' => 'r 35',
    'T_ID' => 'r 35',
    'T_NUMBER' => 'r 35',
    'T_SINGLE_QUOTED_STRING' => 'r 35',
    'T_DOUBLE_QUOTED_STRING' => 'r 35',
    'T_TRUE' => 'r 35',
    'T_FALSE' => 'r 35',
  ),
  40 => 
  array (
    'expression' => 's 41',
    'terminal' => 's 62',
    'T_NOT' => 's 63',
    'T_MINUS' => 's 66',
    'T_LEFT_PAREN' => 's 65',
    'T_ID' => 's 68',
    'T_NUMBER' => 's 73',
    'T_SINGLE_QUOTED_STRING' => 's 74',
    'T_DOUBLE_QUOTED_STRING' => 's 75',
    'T_TRUE' => 's 76',
    'T_FALSE' => 's 77',
  ),
  41 => 
  array (
    'T_OR' => 'r 36',
    'T_XOR' => 'r 36',
    'T_AND' => 'r 36',
    'T_QUESTION' => 'r 36',
    'T_OR_SYMBOL' => 'r 36',
    'T_AND_SYMBOL' => 'r 36',
    'T_EQ' => 'r 36',
    'T_NE' => 'r 36',
    'T_EX' => 'r 36',
    'T_NX' => 'r 36',
    'T_IN' => 's 44',
    'T_NOT_IN' => 's 46',
    'T_INX' => 's 48',
    'T_NOT_INX' => 's 50',
    'T_PLUS' => 's 52',
    'T_MINUS' => 's 54',
    'T_MULTIPLICATION' => 's 56',
    'T_DIVISION' => 's 58',
    'T_MODULUS' => 's 60',
    'T_PIPE' => 'r 36',
    'T_COLON' => 'r 36',
    'T_VARIABLE_END' => 'r 36',
    'T_RIGHT_PAREN' => 'r 36',
    'T_RIGHT_BRACKET' => 'r 36',
    'T_RIGHT_BRACE' => 'r 36',
    'T_BLOCK_END' => 'r 36',
    'T_NOT' => 'r 36',
    'T_LEFT_PAREN' => 'r 36',
    'T_ID' => 'r 36',
    'T_NUMBER' => 'r 36',
    'T_SINGLE_QUOTED_STRING' => 'r 36',
    'T_DOUBLE_QUOTED_STRING' => 'r 36',
    'T_TRUE' => 'r 36',
    'T_FALSE' => 'r 36',
  ),
  42 => 
  array (
    'expression' => 's 43',
    'terminal' => 's 62',
    'T_NOT' => 's 63',
    'T_MINUS' => 's 66',
    'T_LEFT_PAREN' => 's 65',
    'T_ID' => 's 68',
    'T_NUMBER' => 's 73',
    'T_SINGLE_QUOTED_STRING' => 's 74',
    'T_DOUBLE_QUOTED_STRING' => 's 75',
    'T_TRUE' => 's 76',
    'T_FALSE' => 's 77',
  ),
  43 => 
  array (
    'T_OR' => 'r 37',
    'T_XOR' => 'r 37',
    'T_AND' => 'r 37',
    'T_QUESTION' => 'r 37',
    'T_OR_SYMBOL' => 'r 37',
    'T_AND_SYMBOL' => 'r 37',
    'T_EQ' => 'r 37',
    'T_NE' => 'r 37',
    'T_EX' => 'r 37',
    'T_NX' => 'r 37',
    'T_IN' => 's 44',
    'T_NOT_IN' => 's 46',
    'T_INX' => 's 48',
    'T_NOT_INX' => 's 50',
    'T_PLUS' => 's 52',
    'T_MINUS' => 's 54',
    'T_MULTIPLICATION' => 's 56',
    'T_DIVISION' => 's 58',
    'T_MODULUS' => 's 60',
    'T_PIPE' => 'r 37',
    'T_COLON' => 'r 37',
    'T_VARIABLE_END' => 'r 37',
    'T_RIGHT_PAREN' => 'r 37',
    'T_RIGHT_BRACKET' => 'r 37',
    'T_RIGHT_BRACE' => 'r 37',
    'T_BLOCK_END' => 'r 37',
    'T_NOT' => 'r 37',
    'T_LEFT_PAREN' => 'r 37',
    'T_ID' => 'r 37',
    'T_NUMBER' => 'r 37',
    'T_SINGLE_QUOTED_STRING' => 'r 37',
    'T_DOUBLE_QUOTED_STRING' => 'r 37',
    'T_TRUE' => 'r 37',
    'T_FALSE' => 'r 37',
  ),
  44 => 
  array (
    'expression' => 's 45',
    'terminal' => 's 62',
    'T_NOT' => 's 63',
    'T_MINUS' => 's 66',
    'T_LEFT_PAREN' => 's 65',
    'T_ID' => 's 68',
    'T_NUMBER' => 's 73',
    'T_SINGLE_QUOTED_STRING' => 's 74',
    'T_DOUBLE_QUOTED_STRING' => 's 75',
    'T_TRUE' => 's 76',
    'T_FALSE' => 's 77',
  ),
  45 => 
  array (
    'T_OR' => 'r 38',
    'T_XOR' => 'r 38',
    'T_AND' => 'r 38',
    'T_QUESTION' => 'r 38',
    'T_OR_SYMBOL' => 'r 38',
    'T_AND_SYMBOL' => 'r 38',
    'T_EQ' => 'r 38',
    'T_NE' => 'r 38',
    'T_EX' => 'r 38',
    'T_NX' => 'r 38',
    'T_LT' => 'r 38',
    'T_LE' => 'r 38',
    'T_GT' => 'r 38',
    'T_GE' => 'r 38',
    'T_PLUS' => 's 52',
    'T_MINUS' => 's 54',
    'T_MULTIPLICATION' => 's 56',
    'T_DIVISION' => 's 58',
    'T_MODULUS' => 's 60',
    'T_PIPE' => 'r 38',
    'T_COLON' => 'r 38',
    'T_VARIABLE_END' => 'r 38',
    'T_RIGHT_PAREN' => 'r 38',
    'T_RIGHT_BRACKET' => 'r 38',
    'T_RIGHT_BRACE' => 'r 38',
    'T_BLOCK_END' => 'r 38',
    'T_NOT' => 'r 38',
    'T_LEFT_PAREN' => 'r 38',
    'T_ID' => 'r 38',
    'T_NUMBER' => 'r 38',
    'T_SINGLE_QUOTED_STRING' => 'r 38',
    'T_DOUBLE_QUOTED_STRING' => 'r 38',
    'T_TRUE' => 'r 38',
    'T_FALSE' => 'r 38',
  ),
  46 => 
  array (
    'expression' => 's 47',
    'terminal' => 's 62',
    'T_NOT' => 's 63',
    'T_MINUS' => 's 66',
    'T_LEFT_PAREN' => 's 65',
    'T_ID' => 's 68',
    'T_NUMBER' => 's 73',
    'T_SINGLE_QUOTED_STRING' => 's 74',
    'T_DOUBLE_QUOTED_STRING' => 's 75',
    'T_TRUE' => 's 76',
    'T_FALSE' => 's 77',
  ),
  47 => 
  array (
    'T_OR' => 'r 39',
    'T_XOR' => 'r 39',
    'T_AND' => 'r 39',
    'T_QUESTION' => 'r 39',
    'T_OR_SYMBOL' => 'r 39',
    'T_AND_SYMBOL' => 'r 39',
    'T_EQ' => 'r 39',
    'T_NE' => 'r 39',
    'T_EX' => 'r 39',
    'T_NX' => 'r 39',
    'T_LT' => 'r 39',
    'T_LE' => 'r 39',
    'T_GT' => 'r 39',
    'T_GE' => 'r 39',
    'T_PLUS' => 's 52',
    'T_MINUS' => 's 54',
    'T_MULTIPLICATION' => 's 56',
    'T_DIVISION' => 's 58',
    'T_MODULUS' => 's 60',
    'T_PIPE' => 'r 39',
    'T_COLON' => 'r 39',
    'T_VARIABLE_END' => 'r 39',
    'T_RIGHT_PAREN' => 'r 39',
    'T_RIGHT_BRACKET' => 'r 39',
    'T_RIGHT_BRACE' => 'r 39',
    'T_BLOCK_END' => 'r 39',
    'T_NOT' => 'r 39',
    'T_LEFT_PAREN' => 'r 39',
    'T_ID' => 'r 39',
    'T_NUMBER' => 'r 39',
    'T_SINGLE_QUOTED_STRING' => 'r 39',
    'T_DOUBLE_QUOTED_STRING' => 'r 39',
    'T_TRUE' => 'r 39',
    'T_FALSE' => 'r 39',
  ),
  48 => 
  array (
    'expression' => 's 49',
    'terminal' => 's 62',
    'T_NOT' => 's 63',
    'T_MINUS' => 's 66',
    'T_LEFT_PAREN' => 's 65',
    'T_ID' => 's 68',
    'T_NUMBER' => 's 73',
    'T_SINGLE_QUOTED_STRING' => 's 74',
    'T_DOUBLE_QUOTED_STRING' => 's 75',
    'T_TRUE' => 's 76',
    'T_FALSE' => 's 77',
  ),
  49 => 
  array (
    'T_OR' => 'r 40',
    'T_XOR' => 'r 40',
    'T_AND' => 'r 40',
    'T_QUESTION' => 'r 40',
    'T_OR_SYMBOL' => 'r 40',
    'T_AND_SYMBOL' => 'r 40',
    'T_EQ' => 'r 40',
    'T_NE' => 'r 40',
    'T_EX' => 'r 40',
    'T_NX' => 'r 40',
    'T_LT' => 'r 40',
    'T_LE' => 'r 40',
    'T_GT' => 'r 40',
    'T_GE' => 'r 40',
    'T_PLUS' => 's 52',
    'T_MINUS' => 's 54',
    'T_MULTIPLICATION' => 's 56',
    'T_DIVISION' => 's 58',
    'T_MODULUS' => 's 60',
    'T_PIPE' => 'r 40',
    'T_COLON' => 'r 40',
    'T_VARIABLE_END' => 'r 40',
    'T_RIGHT_PAREN' => 'r 40',
    'T_RIGHT_BRACKET' => 'r 40',
    'T_RIGHT_BRACE' => 'r 40',
    'T_BLOCK_END' => 'r 40',
    'T_NOT' => 'r 40',
    'T_LEFT_PAREN' => 'r 40',
    'T_ID' => 'r 40',
    'T_NUMBER' => 'r 40',
    'T_SINGLE_QUOTED_STRING' => 'r 40',
    'T_DOUBLE_QUOTED_STRING' => 'r 40',
    'T_TRUE' => 'r 40',
    'T_FALSE' => 'r 40',
  ),
  50 => 
  array (
    'expression' => 's 51',
    'terminal' => 's 62',
    'T_NOT' => 's 63',
    'T_MINUS' => 's 66',
    'T_LEFT_PAREN' => 's 65',
    'T_ID' => 's 68',
    'T_NUMBER' => 's 73',
    'T_SINGLE_QUOTED_STRING' => 's 74',
    'T_DOUBLE_QUOTED_STRING' => 's 75',
    'T_TRUE' => 's 76',
    'T_FALSE' => 's 77',
  ),
  51 => 
  array (
    'T_OR' => 'r 41',
    'T_XOR' => 'r 41',
    'T_AND' => 'r 41',
    'T_QUESTION' => 'r 41',
    'T_OR_SYMBOL' => 'r 41',
    'T_AND_SYMBOL' => 'r 41',
    'T_EQ' => 'r 41',
    'T_NE' => 'r 41',
    'T_EX' => 'r 41',
    'T_NX' => 'r 41',
    'T_LT' => 'r 41',
    'T_LE' => 'r 41',
    'T_GT' => 'r 41',
    'T_GE' => 'r 41',
    'T_PLUS' => 's 52',
    'T_MINUS' => 's 54',
    'T_MULTIPLICATION' => 's 56',
    'T_DIVISION' => 's 58',
    'T_MODULUS' => 's 60',
    'T_PIPE' => 'r 41',
    'T_COLON' => 'r 41',
    'T_VARIABLE_END' => 'r 41',
    'T_RIGHT_PAREN' => 'r 41',
    'T_RIGHT_BRACKET' => 'r 41',
    'T_RIGHT_BRACE' => 'r 41',
    'T_BLOCK_END' => 'r 41',
    'T_NOT' => 'r 41',
    'T_LEFT_PAREN' => 'r 41',
    'T_ID' => 'r 41',
    'T_NUMBER' => 'r 41',
    'T_SINGLE_QUOTED_STRING' => 'r 41',
    'T_DOUBLE_QUOTED_STRING' => 'r 41',
    'T_TRUE' => 'r 41',
    'T_FALSE' => 'r 41',
  ),
  52 => 
  array (
    'expression' => 's 53',
    'terminal' => 's 62',
    'T_NOT' => 's 63',
    'T_MINUS' => 's 66',
    'T_LEFT_PAREN' => 's 65',
    'T_ID' => 's 68',
    'T_NUMBER' => 's 73',
    'T_SINGLE_QUOTED_STRING' => 's 74',
    'T_DOUBLE_QUOTED_STRING' => 's 75',
    'T_TRUE' => 's 76',
    'T_FALSE' => 's 77',
  ),
  53 => 
  array (
    'T_OR' => 'r 42',
    'T_XOR' => 'r 42',
    'T_AND' => 'r 42',
    'T_QUESTION' => 'r 42',
    'T_OR_SYMBOL' => 'r 42',
    'T_AND_SYMBOL' => 'r 42',
    'T_EQ' => 'r 42',
    'T_NE' => 'r 42',
    'T_EX' => 'r 42',
    'T_NX' => 'r 42',
    'T_LT' => 'r 42',
    'T_LE' => 'r 42',
    'T_GT' => 'r 42',
    'T_GE' => 'r 42',
    'T_IN' => 'r 42',
    'T_NOT_IN' => 'r 42',
    'T_INX' => 'r 42',
    'T_NOT_INX' => 'r 42',
    'T_PLUS' => 'r 42',
    'T_MINUS' => 'r 42',
    'T_MULTIPLICATION' => 's 56',
    'T_DIVISION' => 's 58',
    'T_MODULUS' => 's 60',
    'T_PIPE' => 'r 42',
    'T_COLON' => 'r 42',
    'T_VARIABLE_END' => 'r 42',
    'T_RIGHT_PAREN' => 'r 42',
    'T_RIGHT_BRACKET' => 'r 42',
    'T_RIGHT_BRACE' => 'r 42',
    'T_BLOCK_END' => 'r 42',
    'T_NOT' => 'r 42',
    'T_LEFT_PAREN' => 'r 42',
    'T_ID' => 'r 42',
    'T_NUMBER' => 'r 42',
    'T_SINGLE_QUOTED_STRING' => 'r 42',
    'T_DOUBLE_QUOTED_STRING' => 'r 42',
    'T_TRUE' => 'r 42',
    'T_FALSE' => 'r 42',
  ),
  54 => 
  array (
    'expression' => 's 55',
    'terminal' => 's 62',
    'T_NOT' => 's 63',
    'T_MINUS' => 's 66',
    'T_LEFT_PAREN' => 's 65',
    'T_ID' => 's 68',
    'T_NUMBER' => 's 73',
    'T_SINGLE_QUOTED_STRING' => 's 74',
    'T_DOUBLE_QUOTED_STRING' => 's 75',
    'T_TRUE' => 's 76',
    'T_FALSE' => 's 77',
  ),
  55 => 
  array (
    'T_OR' => 'r 43',
    'T_XOR' => 'r 43',
    'T_AND' => 'r 43',
    'T_QUESTION' => 'r 43',
    'T_OR_SYMBOL' => 'r 43',
    'T_AND_SYMBOL' => 'r 43',
    'T_EQ' => 'r 43',
    'T_NE' => 'r 43',
    'T_EX' => 'r 43',
    'T_NX' => 'r 43',
    'T_LT' => 'r 43',
    'T_LE' => 'r 43',
    'T_GT' => 'r 43',
    'T_GE' => 'r 43',
    'T_IN' => 'r 43',
    'T_NOT_IN' => 'r 43',
    'T_INX' => 'r 43',
    'T_NOT_INX' => 'r 43',
    'T_PLUS' => 'r 43',
    'T_MINUS' => 'r 43',
    'T_MULTIPLICATION' => 's 56',
    'T_DIVISION' => 's 58',
    'T_MODULUS' => 's 60',
    'T_PIPE' => 'r 43',
    'T_COLON' => 'r 43',
    'T_VARIABLE_END' => 'r 43',
    'T_RIGHT_PAREN' => 'r 43',
    'T_RIGHT_BRACKET' => 'r 43',
    'T_RIGHT_BRACE' => 'r 43',
    'T_BLOCK_END' => 'r 43',
    'T_NOT' => 'r 43',
    'T_LEFT_PAREN' => 'r 43',
    'T_ID' => 'r 43',
    'T_NUMBER' => 'r 43',
    'T_SINGLE_QUOTED_STRING' => 'r 43',
    'T_DOUBLE_QUOTED_STRING' => 'r 43',
    'T_TRUE' => 'r 43',
    'T_FALSE' => 'r 43',
  ),
  56 => 
  array (
    'expression' => 's 57',
    'terminal' => 's 62',
    'T_NOT' => 's 63',
    'T_MINUS' => 's 66',
    'T_LEFT_PAREN' => 's 65',
    'T_ID' => 's 68',
    'T_NUMBER' => 's 73',
    'T_SINGLE_QUOTED_STRING' => 's 74',
    'T_DOUBLE_QUOTED_STRING' => 's 75',
    'T_TRUE' => 's 76',
    'T_FALSE' => 's 77',
  ),
  57 => 
  array (
    'T_OR' => 'r 44',
    'T_XOR' => 'r 44',
    'T_AND' => 'r 44',
    'T_QUESTION' => 'r 44',
    'T_OR_SYMBOL' => 'r 44',
    'T_AND_SYMBOL' => 'r 44',
    'T_EQ' => 'r 44',
    'T_NE' => 'r 44',
    'T_EX' => 'r 44',
    'T_NX' => 'r 44',
    'T_LT' => 'r 44',
    'T_LE' => 'r 44',
    'T_GT' => 'r 44',
    'T_GE' => 'r 44',
    'T_IN' => 'r 44',
    'T_NOT_IN' => 'r 44',
    'T_INX' => 'r 44',
    'T_NOT_INX' => 'r 44',
    'T_PLUS' => 'r 44',
    'T_MINUS' => 'r 44',
    'T_MULTIPLICATION' => 'r 44',
    'T_DIVISION' => 'r 44',
    'T_MODULUS' => 'r 44',
    'T_PIPE' => 'r 44',
    'T_COLON' => 'r 44',
    'T_VARIABLE_END' => 'r 44',
    'T_RIGHT_PAREN' => 'r 44',
    'T_RIGHT_BRACKET' => 'r 44',
    'T_RIGHT_BRACE' => 'r 44',
    'T_BLOCK_END' => 'r 44',
    'T_NOT' => 'r 44',
    'T_LEFT_PAREN' => 'r 44',
    'T_ID' => 'r 44',
    'T_NUMBER' => 'r 44',
    'T_SINGLE_QUOTED_STRING' => 'r 44',
    'T_DOUBLE_QUOTED_STRING' => 'r 44',
    'T_TRUE' => 'r 44',
    'T_FALSE' => 'r 44',
  ),
  58 => 
  array (
    'expression' => 's 59',
    'terminal' => 's 62',
    'T_NOT' => 's 63',
    'T_MINUS' => 's 66',
    'T_LEFT_PAREN' => 's 65',
    'T_ID' => 's 68',
    'T_NUMBER' => 's 73',
    'T_SINGLE_QUOTED_STRING' => 's 74',
    'T_DOUBLE_QUOTED_STRING' => 's 75',
    'T_TRUE' => 's 76',
    'T_FALSE' => 's 77',
  ),
  59 => 
  array (
    'T_OR' => 'r 45',
    'T_XOR' => 'r 45',
    'T_AND' => 'r 45',
    'T_QUESTION' => 'r 45',
    'T_OR_SYMBOL' => 'r 45',
    'T_AND_SYMBOL' => 'r 45',
    'T_EQ' => 'r 45',
    'T_NE' => 'r 45',
    'T_EX' => 'r 45',
    'T_NX' => 'r 45',
    'T_LT' => 'r 45',
    'T_LE' => 'r 45',
    'T_GT' => 'r 45',
    'T_GE' => 'r 45',
    'T_IN' => 'r 45',
    'T_NOT_IN' => 'r 45',
    'T_INX' => 'r 45',
    'T_NOT_INX' => 'r 45',
    'T_PLUS' => 'r 45',
    'T_MINUS' => 'r 45',
    'T_MULTIPLICATION' => 'r 45',
    'T_DIVISION' => 'r 45',
    'T_MODULUS' => 'r 45',
    'T_PIPE' => 'r 45',
    'T_COLON' => 'r 45',
    'T_VARIABLE_END' => 'r 45',
    'T_RIGHT_PAREN' => 'r 45',
    'T_RIGHT_BRACKET' => 'r 45',
    'T_RIGHT_BRACE' => 'r 45',
    'T_BLOCK_END' => 'r 45',
    'T_NOT' => 'r 45',
    'T_LEFT_PAREN' => 'r 45',
    'T_ID' => 'r 45',
    'T_NUMBER' => 'r 45',
    'T_SINGLE_QUOTED_STRING' => 'r 45',
    'T_DOUBLE_QUOTED_STRING' => 'r 45',
    'T_TRUE' => 'r 45',
    'T_FALSE' => 'r 45',
  ),
  60 => 
  array (
    'expression' => 's 61',
    'terminal' => 's 62',
    'T_NOT' => 's 63',
    'T_MINUS' => 's 66',
    'T_LEFT_PAREN' => 's 65',
    'T_ID' => 's 68',
    'T_NUMBER' => 's 73',
    'T_SINGLE_QUOTED_STRING' => 's 74',
    'T_DOUBLE_QUOTED_STRING' => 's 75',
    'T_TRUE' => 's 76',
    'T_FALSE' => 's 77',
  ),
  61 => 
  array (
    'T_OR' => 'r 46',
    'T_XOR' => 'r 46',
    'T_AND' => 'r 46',
    'T_QUESTION' => 'r 46',
    'T_OR_SYMBOL' => 'r 46',
    'T_AND_SYMBOL' => 'r 46',
    'T_EQ' => 'r 46',
    'T_NE' => 'r 46',
    'T_EX' => 'r 46',
    'T_NX' => 'r 46',
    'T_LT' => 'r 46',
    'T_LE' => 'r 46',
    'T_GT' => 'r 46',
    'T_GE' => 'r 46',
    'T_IN' => 'r 46',
    'T_NOT_IN' => 'r 46',
    'T_INX' => 'r 46',
    'T_NOT_INX' => 'r 46',
    'T_PLUS' => 'r 46',
    'T_MINUS' => 'r 46',
    'T_MULTIPLICATION' => 'r 46',
    'T_DIVISION' => 'r 46',
    'T_MODULUS' => 'r 46',
    'T_PIPE' => 'r 46',
    'T_COLON' => 'r 46',
    'T_VARIABLE_END' => 'r 46',
    'T_RIGHT_PAREN' => 'r 46',
    'T_RIGHT_BRACKET' => 'r 46',
    'T_RIGHT_BRACE' => 'r 46',
    'T_BLOCK_END' => 'r 46',
    'T_NOT' => 'r 46',
    'T_LEFT_PAREN' => 'r 46',
    'T_ID' => 'r 46',
    'T_NUMBER' => 'r 46',
    'T_SINGLE_QUOTED_STRING' => 'r 46',
    'T_DOUBLE_QUOTED_STRING' => 'r 46',
    'T_TRUE' => 'r 46',
    'T_FALSE' => 'r 46',
  ),
  62 => 
  array (
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
    'T_AND_SYMBOL' => 'r 47',
    'T_OR_SYMBOL' => 'r 47',
    'T_QUESTION' => 'r 47',
    'T_AND' => 'r 47',
    'T_XOR' => 'r 47',
    'T_OR' => 'r 47',
    'T_COLON' => 'r 47',
    'T_VARIABLE_END' => 'r 47',
    'T_RIGHT_PAREN' => 'r 47',
    'T_RIGHT_BRACKET' => 'r 47',
    'T_RIGHT_BRACE' => 'r 47',
    'T_BLOCK_END' => 'r 47',
    'T_NOT' => 'r 47',
    'T_LEFT_PAREN' => 'r 47',
    'T_ID' => 'r 47',
    'T_NUMBER' => 'r 47',
    'T_SINGLE_QUOTED_STRING' => 'r 47',
    'T_DOUBLE_QUOTED_STRING' => 'r 47',
    'T_TRUE' => 'r 47',
    'T_FALSE' => 'r 47',
  ),
  63 => 
  array (
    'terminal' => 's 64',
    'T_LEFT_PAREN' => 's 65',
    'T_ID' => 's 68',
    'T_NUMBER' => 's 73',
    'T_SINGLE_QUOTED_STRING' => 's 74',
    'T_DOUBLE_QUOTED_STRING' => 's 75',
    'T_TRUE' => 's 76',
    'T_FALSE' => 's 77',
  ),
  64 => 
  array (
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
    'T_AND_SYMBOL' => 'r 48',
    'T_OR_SYMBOL' => 'r 48',
    'T_QUESTION' => 'r 48',
    'T_AND' => 'r 48',
    'T_XOR' => 'r 48',
    'T_OR' => 'r 48',
    'T_COLON' => 'r 48',
    'T_VARIABLE_END' => 'r 48',
    'T_RIGHT_PAREN' => 'r 48',
    'T_RIGHT_BRACKET' => 'r 48',
    'T_RIGHT_BRACE' => 'r 48',
    'T_BLOCK_END' => 'r 48',
    'T_NOT' => 'r 48',
    'T_LEFT_PAREN' => 'r 48',
    'T_ID' => 'r 48',
    'T_NUMBER' => 'r 48',
    'T_SINGLE_QUOTED_STRING' => 'r 48',
    'T_DOUBLE_QUOTED_STRING' => 'r 48',
    'T_TRUE' => 'r 48',
    'T_FALSE' => 'r 48',
  ),
  65 => 
  array (
    'expression' => 's 13',
    'terminal' => 's 62',
    'T_NOT' => 's 63',
    'T_MINUS' => 's 66',
    'T_LEFT_PAREN' => 's 65',
    'filtered_expression' => 's 90',
    'T_ID' => 's 68',
    'T_NUMBER' => 's 73',
    'T_SINGLE_QUOTED_STRING' => 's 74',
    'T_DOUBLE_QUOTED_STRING' => 's 75',
    'T_TRUE' => 's 76',
    'T_FALSE' => 's 77',
  ),
  66 => 
  array (
    'terminal' => 's 67',
    'T_LEFT_PAREN' => 's 65',
    'T_ID' => 's 68',
    'T_NUMBER' => 's 73',
    'T_SINGLE_QUOTED_STRING' => 's 74',
    'T_DOUBLE_QUOTED_STRING' => 's 75',
    'T_TRUE' => 's 76',
    'T_FALSE' => 's 77',
  ),
  67 => 
  array (
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
    'T_AND_SYMBOL' => 'r 49',
    'T_OR_SYMBOL' => 'r 49',
    'T_QUESTION' => 'r 49',
    'T_AND' => 'r 49',
    'T_XOR' => 'r 49',
    'T_OR' => 'r 49',
    'T_COLON' => 'r 49',
    'T_VARIABLE_END' => 'r 49',
    'T_RIGHT_PAREN' => 'r 49',
    'T_RIGHT_BRACKET' => 'r 49',
    'T_RIGHT_BRACE' => 'r 49',
    'T_BLOCK_END' => 'r 49',
    'T_NOT' => 'r 49',
    'T_LEFT_PAREN' => 'r 49',
    'T_ID' => 'r 49',
    'T_NUMBER' => 'r 49',
    'T_SINGLE_QUOTED_STRING' => 'r 49',
    'T_DOUBLE_QUOTED_STRING' => 'r 49',
    'T_TRUE' => 'r 49',
    'T_FALSE' => 'r 49',
  ),
  68 => 
  array (
    'array_or_object' => 's 69',
    'T_ARROW' => 'r 59',
    'T_DOT' => 'r 59',
    'T_LEFT_BRACKET' => 'r 59',
    'T_PIPE' => 'r 59',
    'T_MODULUS' => 'r 59',
    'T_DIVISION' => 'r 59',
    'T_MULTIPLICATION' => 'r 59',
    'T_MINUS' => 'r 59',
    'T_PLUS' => 'r 59',
    'T_NOT_INX' => 'r 59',
    'T_INX' => 'r 59',
    'T_NOT_IN' => 'r 59',
    'T_IN' => 'r 59',
    'T_GE' => 'r 59',
    'T_GT' => 'r 59',
    'T_LE' => 'r 59',
    'T_LT' => 'r 59',
    'T_NX' => 'r 59',
    'T_EX' => 'r 59',
    'T_NE' => 'r 59',
    'T_EQ' => 'r 59',
    'T_AND_SYMBOL' => 'r 59',
    'T_OR_SYMBOL' => 'r 59',
    'T_QUESTION' => 'r 59',
    'T_AND' => 'r 59',
    'T_XOR' => 'r 59',
    'T_OR' => 'r 59',
    'T_COLON' => 'r 59',
    'T_VARIABLE_END' => 'r 59',
    'T_RIGHT_PAREN' => 'r 59',
    'T_RIGHT_BRACKET' => 'r 59',
    'T_RIGHT_BRACE' => 'r 59',
    'T_BLOCK_END' => 'r 59',
    'T_NOT' => 'r 59',
    'T_LEFT_PAREN' => 'r 59',
    'T_ID' => 'r 59',
    'T_NUMBER' => 'r 59',
    'T_SINGLE_QUOTED_STRING' => 'r 59',
    'T_DOUBLE_QUOTED_STRING' => 'r 59',
    'T_TRUE' => 'r 59',
    'T_FALSE' => 'r 59',
  ),
  69 => 
  array (
    'array' => 's 70',
    'object' => 's 71',
    'T_LEFT_BRACKET' => 's 72',
    'T_ARROW' => 's 80',
    'T_DOT' => 's 85',
    'T_PIPE' => 'r 51',
    'T_MODULUS' => 'r 51',
    'T_DIVISION' => 'r 51',
    'T_MULTIPLICATION' => 'r 51',
    'T_MINUS' => 'r 51',
    'T_PLUS' => 'r 51',
    'T_NOT_INX' => 'r 51',
    'T_INX' => 'r 51',
    'T_NOT_IN' => 'r 51',
    'T_IN' => 'r 51',
    'T_GE' => 'r 51',
    'T_GT' => 'r 51',
    'T_LE' => 'r 51',
    'T_LT' => 'r 51',
    'T_NX' => 'r 51',
    'T_EX' => 'r 51',
    'T_NE' => 'r 51',
    'T_EQ' => 'r 51',
    'T_AND_SYMBOL' => 'r 51',
    'T_OR_SYMBOL' => 'r 51',
    'T_QUESTION' => 'r 51',
    'T_AND' => 'r 51',
    'T_XOR' => 'r 51',
    'T_OR' => 'r 51',
    'T_COLON' => 'r 51',
    'T_VARIABLE_END' => 'r 51',
    'T_RIGHT_PAREN' => 'r 51',
    'T_RIGHT_BRACKET' => 'r 51',
    'T_RIGHT_BRACE' => 'r 51',
    'T_BLOCK_END' => 'r 51',
    'T_NOT' => 'r 51',
    'T_LEFT_PAREN' => 'r 51',
    'T_ID' => 'r 51',
    'T_NUMBER' => 'r 51',
    'T_SINGLE_QUOTED_STRING' => 'r 51',
    'T_DOUBLE_QUOTED_STRING' => 'r 51',
    'T_TRUE' => 'r 51',
    'T_FALSE' => 'r 51',
  ),
  70 => 
  array (
    'T_ARROW' => 'r 57',
    'T_DOT' => 'r 57',
    'T_LEFT_BRACKET' => 'r 57',
    'T_PIPE' => 'r 57',
    'T_MODULUS' => 'r 57',
    'T_DIVISION' => 'r 57',
    'T_MULTIPLICATION' => 'r 57',
    'T_MINUS' => 'r 57',
    'T_PLUS' => 'r 57',
    'T_NOT_INX' => 'r 57',
    'T_INX' => 'r 57',
    'T_NOT_IN' => 'r 57',
    'T_IN' => 'r 57',
    'T_GE' => 'r 57',
    'T_GT' => 'r 57',
    'T_LE' => 'r 57',
    'T_LT' => 'r 57',
    'T_NX' => 'r 57',
    'T_EX' => 'r 57',
    'T_NE' => 'r 57',
    'T_EQ' => 'r 57',
    'T_AND_SYMBOL' => 'r 57',
    'T_OR_SYMBOL' => 'r 57',
    'T_QUESTION' => 'r 57',
    'T_AND' => 'r 57',
    'T_XOR' => 'r 57',
    'T_OR' => 'r 57',
    'T_COLON' => 'r 57',
    'T_VARIABLE_END' => 'r 57',
    'T_RIGHT_PAREN' => 'r 57',
    'T_RIGHT_BRACKET' => 'r 57',
    'T_RIGHT_BRACE' => 'r 57',
    'T_BLOCK_END' => 'r 57',
    'T_NOT' => 'r 57',
    'T_LEFT_PAREN' => 'r 57',
    'T_ID' => 'r 57',
    'T_NUMBER' => 'r 57',
    'T_SINGLE_QUOTED_STRING' => 'r 57',
    'T_DOUBLE_QUOTED_STRING' => 'r 57',
    'T_TRUE' => 'r 57',
    'T_FALSE' => 'r 57',
  ),
  71 => 
  array (
    'T_ARROW' => 'r 58',
    'T_DOT' => 'r 58',
    'T_LEFT_BRACKET' => 'r 58',
    'T_PIPE' => 'r 58',
    'T_MODULUS' => 'r 58',
    'T_DIVISION' => 'r 58',
    'T_MULTIPLICATION' => 'r 58',
    'T_MINUS' => 'r 58',
    'T_PLUS' => 'r 58',
    'T_NOT_INX' => 'r 58',
    'T_INX' => 'r 58',
    'T_NOT_IN' => 'r 58',
    'T_IN' => 'r 58',
    'T_GE' => 'r 58',
    'T_GT' => 'r 58',
    'T_LE' => 'r 58',
    'T_LT' => 'r 58',
    'T_NX' => 'r 58',
    'T_EX' => 'r 58',
    'T_NE' => 'r 58',
    'T_EQ' => 'r 58',
    'T_AND_SYMBOL' => 'r 58',
    'T_OR_SYMBOL' => 'r 58',
    'T_QUESTION' => 'r 58',
    'T_AND' => 'r 58',
    'T_XOR' => 'r 58',
    'T_OR' => 'r 58',
    'T_COLON' => 'r 58',
    'T_VARIABLE_END' => 'r 58',
    'T_RIGHT_PAREN' => 'r 58',
    'T_RIGHT_BRACKET' => 'r 58',
    'T_RIGHT_BRACE' => 'r 58',
    'T_BLOCK_END' => 'r 58',
    'T_NOT' => 'r 58',
    'T_LEFT_PAREN' => 'r 58',
    'T_ID' => 'r 58',
    'T_NUMBER' => 'r 58',
    'T_SINGLE_QUOTED_STRING' => 'r 58',
    'T_DOUBLE_QUOTED_STRING' => 'r 58',
    'T_TRUE' => 'r 58',
    'T_FALSE' => 'r 58',
  ),
  72 => 
  array (
    'expression' => 's 13',
    'terminal' => 's 62',
    'T_NOT' => 's 63',
    'T_MINUS' => 's 66',
    'T_LEFT_PAREN' => 's 65',
    'T_ID' => 's 68',
    'T_NUMBER' => 's 73',
    'T_SINGLE_QUOTED_STRING' => 's 74',
    'T_DOUBLE_QUOTED_STRING' => 's 75',
    'T_TRUE' => 's 76',
    'T_FALSE' => 's 77',
    'filtered_expression' => 's 78',
  ),
  73 => 
  array (
    'T_PIPE' => 'r 52',
    'T_MODULUS' => 'r 52',
    'T_DIVISION' => 'r 52',
    'T_MULTIPLICATION' => 'r 52',
    'T_MINUS' => 'r 52',
    'T_PLUS' => 'r 52',
    'T_NOT_INX' => 'r 52',
    'T_INX' => 'r 52',
    'T_NOT_IN' => 'r 52',
    'T_IN' => 'r 52',
    'T_GE' => 'r 52',
    'T_GT' => 'r 52',
    'T_LE' => 'r 52',
    'T_LT' => 'r 52',
    'T_NX' => 'r 52',
    'T_EX' => 'r 52',
    'T_NE' => 'r 52',
    'T_EQ' => 'r 52',
    'T_AND_SYMBOL' => 'r 52',
    'T_OR_SYMBOL' => 'r 52',
    'T_QUESTION' => 'r 52',
    'T_AND' => 'r 52',
    'T_XOR' => 'r 52',
    'T_OR' => 'r 52',
    'T_COLON' => 'r 52',
    'T_VARIABLE_END' => 'r 52',
    'T_RIGHT_PAREN' => 'r 52',
    'T_RIGHT_BRACKET' => 'r 52',
    'T_RIGHT_BRACE' => 'r 52',
    'T_BLOCK_END' => 'r 52',
    'T_NOT' => 'r 52',
    'T_LEFT_PAREN' => 'r 52',
    'T_ID' => 'r 52',
    'T_NUMBER' => 'r 52',
    'T_SINGLE_QUOTED_STRING' => 'r 52',
    'T_DOUBLE_QUOTED_STRING' => 'r 52',
    'T_TRUE' => 'r 52',
    'T_FALSE' => 'r 52',
  ),
  74 => 
  array (
    'T_PIPE' => 'r 53',
    'T_MODULUS' => 'r 53',
    'T_DIVISION' => 'r 53',
    'T_MULTIPLICATION' => 'r 53',
    'T_MINUS' => 'r 53',
    'T_PLUS' => 'r 53',
    'T_NOT_INX' => 'r 53',
    'T_INX' => 'r 53',
    'T_NOT_IN' => 'r 53',
    'T_IN' => 'r 53',
    'T_GE' => 'r 53',
    'T_GT' => 'r 53',
    'T_LE' => 'r 53',
    'T_LT' => 'r 53',
    'T_NX' => 'r 53',
    'T_EX' => 'r 53',
    'T_NE' => 'r 53',
    'T_EQ' => 'r 53',
    'T_AND_SYMBOL' => 'r 53',
    'T_OR_SYMBOL' => 'r 53',
    'T_QUESTION' => 'r 53',
    'T_AND' => 'r 53',
    'T_XOR' => 'r 53',
    'T_OR' => 'r 53',
    'T_COLON' => 'r 53',
    'T_VARIABLE_END' => 'r 53',
    'T_RIGHT_PAREN' => 'r 53',
    'T_RIGHT_BRACKET' => 'r 53',
    'T_RIGHT_BRACE' => 'r 53',
    'T_BLOCK_END' => 'r 53',
    'T_NOT' => 'r 53',
    'T_LEFT_PAREN' => 'r 53',
    'T_ID' => 'r 53',
    'T_NUMBER' => 'r 53',
    'T_SINGLE_QUOTED_STRING' => 'r 53',
    'T_DOUBLE_QUOTED_STRING' => 'r 53',
    'T_TRUE' => 'r 53',
    'T_FALSE' => 'r 53',
  ),
  75 => 
  array (
    'T_PIPE' => 'r 54',
    'T_MODULUS' => 'r 54',
    'T_DIVISION' => 'r 54',
    'T_MULTIPLICATION' => 'r 54',
    'T_MINUS' => 'r 54',
    'T_PLUS' => 'r 54',
    'T_NOT_INX' => 'r 54',
    'T_INX' => 'r 54',
    'T_NOT_IN' => 'r 54',
    'T_IN' => 'r 54',
    'T_GE' => 'r 54',
    'T_GT' => 'r 54',
    'T_LE' => 'r 54',
    'T_LT' => 'r 54',
    'T_NX' => 'r 54',
    'T_EX' => 'r 54',
    'T_NE' => 'r 54',
    'T_EQ' => 'r 54',
    'T_AND_SYMBOL' => 'r 54',
    'T_OR_SYMBOL' => 'r 54',
    'T_QUESTION' => 'r 54',
    'T_AND' => 'r 54',
    'T_XOR' => 'r 54',
    'T_OR' => 'r 54',
    'T_COLON' => 'r 54',
    'T_VARIABLE_END' => 'r 54',
    'T_RIGHT_PAREN' => 'r 54',
    'T_RIGHT_BRACKET' => 'r 54',
    'T_RIGHT_BRACE' => 'r 54',
    'T_BLOCK_END' => 'r 54',
    'T_NOT' => 'r 54',
    'T_LEFT_PAREN' => 'r 54',
    'T_ID' => 'r 54',
    'T_NUMBER' => 'r 54',
    'T_SINGLE_QUOTED_STRING' => 'r 54',
    'T_DOUBLE_QUOTED_STRING' => 'r 54',
    'T_TRUE' => 'r 54',
    'T_FALSE' => 'r 54',
  ),
  76 => 
  array (
    'T_PIPE' => 'r 55',
    'T_MODULUS' => 'r 55',
    'T_DIVISION' => 'r 55',
    'T_MULTIPLICATION' => 'r 55',
    'T_MINUS' => 'r 55',
    'T_PLUS' => 'r 55',
    'T_NOT_INX' => 'r 55',
    'T_INX' => 'r 55',
    'T_NOT_IN' => 'r 55',
    'T_IN' => 'r 55',
    'T_GE' => 'r 55',
    'T_GT' => 'r 55',
    'T_LE' => 'r 55',
    'T_LT' => 'r 55',
    'T_NX' => 'r 55',
    'T_EX' => 'r 55',
    'T_NE' => 'r 55',
    'T_EQ' => 'r 55',
    'T_AND_SYMBOL' => 'r 55',
    'T_OR_SYMBOL' => 'r 55',
    'T_QUESTION' => 'r 55',
    'T_AND' => 'r 55',
    'T_XOR' => 'r 55',
    'T_OR' => 'r 55',
    'T_COLON' => 'r 55',
    'T_VARIABLE_END' => 'r 55',
    'T_RIGHT_PAREN' => 'r 55',
    'T_RIGHT_BRACKET' => 'r 55',
    'T_RIGHT_BRACE' => 'r 55',
    'T_BLOCK_END' => 'r 55',
    'T_NOT' => 'r 55',
    'T_LEFT_PAREN' => 'r 55',
    'T_ID' => 'r 55',
    'T_NUMBER' => 'r 55',
    'T_SINGLE_QUOTED_STRING' => 'r 55',
    'T_DOUBLE_QUOTED_STRING' => 'r 55',
    'T_TRUE' => 'r 55',
    'T_FALSE' => 'r 55',
  ),
  77 => 
  array (
    'T_PIPE' => 'r 56',
    'T_MODULUS' => 'r 56',
    'T_DIVISION' => 'r 56',
    'T_MULTIPLICATION' => 'r 56',
    'T_MINUS' => 'r 56',
    'T_PLUS' => 'r 56',
    'T_NOT_INX' => 'r 56',
    'T_INX' => 'r 56',
    'T_NOT_IN' => 'r 56',
    'T_IN' => 'r 56',
    'T_GE' => 'r 56',
    'T_GT' => 'r 56',
    'T_LE' => 'r 56',
    'T_LT' => 'r 56',
    'T_NX' => 'r 56',
    'T_EX' => 'r 56',
    'T_NE' => 'r 56',
    'T_EQ' => 'r 56',
    'T_AND_SYMBOL' => 'r 56',
    'T_OR_SYMBOL' => 'r 56',
    'T_QUESTION' => 'r 56',
    'T_AND' => 'r 56',
    'T_XOR' => 'r 56',
    'T_OR' => 'r 56',
    'T_COLON' => 'r 56',
    'T_VARIABLE_END' => 'r 56',
    'T_RIGHT_PAREN' => 'r 56',
    'T_RIGHT_BRACKET' => 'r 56',
    'T_RIGHT_BRACE' => 'r 56',
    'T_BLOCK_END' => 'r 56',
    'T_NOT' => 'r 56',
    'T_LEFT_PAREN' => 'r 56',
    'T_ID' => 'r 56',
    'T_NUMBER' => 'r 56',
    'T_SINGLE_QUOTED_STRING' => 'r 56',
    'T_DOUBLE_QUOTED_STRING' => 'r 56',
    'T_TRUE' => 'r 56',
    'T_FALSE' => 'r 56',
  ),
  78 => 
  array (
    'T_RIGHT_BRACKET' => 's 79',
  ),
  79 => 
  array (
    'T_ARROW' => 'r 60',
    'T_DOT' => 'r 60',
    'T_LEFT_BRACKET' => 'r 60',
    'T_PIPE' => 'r 60',
    'T_MODULUS' => 'r 60',
    'T_DIVISION' => 'r 60',
    'T_MULTIPLICATION' => 'r 60',
    'T_MINUS' => 'r 60',
    'T_PLUS' => 'r 60',
    'T_NOT_INX' => 'r 60',
    'T_INX' => 'r 60',
    'T_NOT_IN' => 'r 60',
    'T_IN' => 'r 60',
    'T_GE' => 'r 60',
    'T_GT' => 'r 60',
    'T_LE' => 'r 60',
    'T_LT' => 'r 60',
    'T_NX' => 'r 60',
    'T_EX' => 'r 60',
    'T_NE' => 'r 60',
    'T_EQ' => 'r 60',
    'T_AND_SYMBOL' => 'r 60',
    'T_OR_SYMBOL' => 'r 60',
    'T_QUESTION' => 'r 60',
    'T_AND' => 'r 60',
    'T_XOR' => 'r 60',
    'T_OR' => 'r 60',
    'T_COLON' => 'r 60',
    'T_VARIABLE_END' => 'r 60',
    'T_RIGHT_PAREN' => 'r 60',
    'T_RIGHT_BRACKET' => 'r 60',
    'T_RIGHT_BRACE' => 'r 60',
    'T_BLOCK_END' => 'r 60',
    'T_NOT' => 'r 60',
    'T_LEFT_PAREN' => 'r 60',
    'T_ID' => 'r 60',
    'T_NUMBER' => 'r 60',
    'T_SINGLE_QUOTED_STRING' => 'r 60',
    'T_DOUBLE_QUOTED_STRING' => 'r 60',
    'T_TRUE' => 'r 60',
    'T_FALSE' => 'r 60',
  ),
  80 => 
  array (
    'T_LEFT_BRACE' => 's 81',
    'T_ID' => 's 84',
  ),
  81 => 
  array (
    'expression' => 's 13',
    'terminal' => 's 62',
    'T_NOT' => 's 63',
    'T_MINUS' => 's 66',
    'T_LEFT_PAREN' => 's 65',
    'T_ID' => 's 68',
    'T_NUMBER' => 's 73',
    'T_SINGLE_QUOTED_STRING' => 's 74',
    'T_DOUBLE_QUOTED_STRING' => 's 75',
    'T_TRUE' => 's 76',
    'T_FALSE' => 's 77',
    'filtered_expression' => 's 82',
  ),
  82 => 
  array (
    'T_RIGHT_BRACE' => 's 83',
  ),
  83 => 
  array (
    'T_ARROW' => 'r 61',
    'T_DOT' => 'r 61',
    'T_LEFT_BRACKET' => 'r 61',
    'T_PIPE' => 'r 61',
    'T_MODULUS' => 'r 61',
    'T_DIVISION' => 'r 61',
    'T_MULTIPLICATION' => 'r 61',
    'T_MINUS' => 'r 61',
    'T_PLUS' => 'r 61',
    'T_NOT_INX' => 'r 61',
    'T_INX' => 'r 61',
    'T_NOT_IN' => 'r 61',
    'T_IN' => 'r 61',
    'T_GE' => 'r 61',
    'T_GT' => 'r 61',
    'T_LE' => 'r 61',
    'T_LT' => 'r 61',
    'T_NX' => 'r 61',
    'T_EX' => 'r 61',
    'T_NE' => 'r 61',
    'T_EQ' => 'r 61',
    'T_AND_SYMBOL' => 'r 61',
    'T_OR_SYMBOL' => 'r 61',
    'T_QUESTION' => 'r 61',
    'T_AND' => 'r 61',
    'T_XOR' => 'r 61',
    'T_OR' => 'r 61',
    'T_COLON' => 'r 61',
    'T_VARIABLE_END' => 'r 61',
    'T_RIGHT_PAREN' => 'r 61',
    'T_RIGHT_BRACKET' => 'r 61',
    'T_RIGHT_BRACE' => 'r 61',
    'T_BLOCK_END' => 'r 61',
    'T_NOT' => 'r 61',
    'T_LEFT_PAREN' => 'r 61',
    'T_ID' => 'r 61',
    'T_NUMBER' => 'r 61',
    'T_SINGLE_QUOTED_STRING' => 'r 61',
    'T_DOUBLE_QUOTED_STRING' => 'r 61',
    'T_TRUE' => 'r 61',
    'T_FALSE' => 'r 61',
  ),
  84 => 
  array (
    'T_ARROW' => 'r 63',
    'T_DOT' => 'r 63',
    'T_LEFT_BRACKET' => 'r 63',
    'T_PIPE' => 'r 63',
    'T_MODULUS' => 'r 63',
    'T_DIVISION' => 'r 63',
    'T_MULTIPLICATION' => 'r 63',
    'T_MINUS' => 'r 63',
    'T_PLUS' => 'r 63',
    'T_NOT_INX' => 'r 63',
    'T_INX' => 'r 63',
    'T_NOT_IN' => 'r 63',
    'T_IN' => 'r 63',
    'T_GE' => 'r 63',
    'T_GT' => 'r 63',
    'T_LE' => 'r 63',
    'T_LT' => 'r 63',
    'T_NX' => 'r 63',
    'T_EX' => 'r 63',
    'T_NE' => 'r 63',
    'T_EQ' => 'r 63',
    'T_AND_SYMBOL' => 'r 63',
    'T_OR_SYMBOL' => 'r 63',
    'T_QUESTION' => 'r 63',
    'T_AND' => 'r 63',
    'T_XOR' => 'r 63',
    'T_OR' => 'r 63',
    'T_COLON' => 'r 63',
    'T_VARIABLE_END' => 'r 63',
    'T_RIGHT_PAREN' => 'r 63',
    'T_RIGHT_BRACKET' => 'r 63',
    'T_RIGHT_BRACE' => 'r 63',
    'T_BLOCK_END' => 'r 63',
    'T_NOT' => 'r 63',
    'T_LEFT_PAREN' => 'r 63',
    'T_ID' => 'r 63',
    'T_NUMBER' => 'r 63',
    'T_SINGLE_QUOTED_STRING' => 'r 63',
    'T_DOUBLE_QUOTED_STRING' => 'r 63',
    'T_TRUE' => 'r 63',
    'T_FALSE' => 'r 63',
  ),
  85 => 
  array (
    'T_LEFT_BRACE' => 's 86',
    'T_ID' => 's 89',
  ),
  86 => 
  array (
    'expression' => 's 13',
    'terminal' => 's 62',
    'T_NOT' => 's 63',
    'T_MINUS' => 's 66',
    'T_LEFT_PAREN' => 's 65',
    'T_ID' => 's 68',
    'T_NUMBER' => 's 73',
    'T_SINGLE_QUOTED_STRING' => 's 74',
    'T_DOUBLE_QUOTED_STRING' => 's 75',
    'T_TRUE' => 's 76',
    'T_FALSE' => 's 77',
    'filtered_expression' => 's 87',
  ),
  87 => 
  array (
    'T_RIGHT_BRACE' => 's 88',
  ),
  88 => 
  array (
    'T_ARROW' => 'r 62',
    'T_DOT' => 'r 62',
    'T_LEFT_BRACKET' => 'r 62',
    'T_PIPE' => 'r 62',
    'T_MODULUS' => 'r 62',
    'T_DIVISION' => 'r 62',
    'T_MULTIPLICATION' => 'r 62',
    'T_MINUS' => 'r 62',
    'T_PLUS' => 'r 62',
    'T_NOT_INX' => 'r 62',
    'T_INX' => 'r 62',
    'T_NOT_IN' => 'r 62',
    'T_IN' => 'r 62',
    'T_GE' => 'r 62',
    'T_GT' => 'r 62',
    'T_LE' => 'r 62',
    'T_LT' => 'r 62',
    'T_NX' => 'r 62',
    'T_EX' => 'r 62',
    'T_NE' => 'r 62',
    'T_EQ' => 'r 62',
    'T_AND_SYMBOL' => 'r 62',
    'T_OR_SYMBOL' => 'r 62',
    'T_QUESTION' => 'r 62',
    'T_AND' => 'r 62',
    'T_XOR' => 'r 62',
    'T_OR' => 'r 62',
    'T_COLON' => 'r 62',
    'T_VARIABLE_END' => 'r 62',
    'T_RIGHT_PAREN' => 'r 62',
    'T_RIGHT_BRACKET' => 'r 62',
    'T_RIGHT_BRACE' => 'r 62',
    'T_BLOCK_END' => 'r 62',
    'T_NOT' => 'r 62',
    'T_LEFT_PAREN' => 'r 62',
    'T_ID' => 'r 62',
    'T_NUMBER' => 'r 62',
    'T_SINGLE_QUOTED_STRING' => 'r 62',
    'T_DOUBLE_QUOTED_STRING' => 'r 62',
    'T_TRUE' => 'r 62',
    'T_FALSE' => 'r 62',
  ),
  89 => 
  array (
    'T_ARROW' => 'r 64',
    'T_DOT' => 'r 64',
    'T_LEFT_BRACKET' => 'r 64',
    'T_PIPE' => 'r 64',
    'T_MODULUS' => 'r 64',
    'T_DIVISION' => 'r 64',
    'T_MULTIPLICATION' => 'r 64',
    'T_MINUS' => 'r 64',
    'T_PLUS' => 'r 64',
    'T_NOT_INX' => 'r 64',
    'T_INX' => 'r 64',
    'T_NOT_IN' => 'r 64',
    'T_IN' => 'r 64',
    'T_GE' => 'r 64',
    'T_GT' => 'r 64',
    'T_LE' => 'r 64',
    'T_LT' => 'r 64',
    'T_NX' => 'r 64',
    'T_EX' => 'r 64',
    'T_NE' => 'r 64',
    'T_EQ' => 'r 64',
    'T_AND_SYMBOL' => 'r 64',
    'T_OR_SYMBOL' => 'r 64',
    'T_QUESTION' => 'r 64',
    'T_AND' => 'r 64',
    'T_XOR' => 'r 64',
    'T_OR' => 'r 64',
    'T_COLON' => 'r 64',
    'T_VARIABLE_END' => 'r 64',
    'T_RIGHT_PAREN' => 'r 64',
    'T_RIGHT_BRACKET' => 'r 64',
    'T_RIGHT_BRACE' => 'r 64',
    'T_BLOCK_END' => 'r 64',
    'T_NOT' => 'r 64',
    'T_LEFT_PAREN' => 'r 64',
    'T_ID' => 'r 64',
    'T_NUMBER' => 'r 64',
    'T_SINGLE_QUOTED_STRING' => 'r 64',
    'T_DOUBLE_QUOTED_STRING' => 'r 64',
    'T_TRUE' => 'r 64',
    'T_FALSE' => 'r 64',
  ),
  90 => 
  array (
    'T_RIGHT_PAREN' => 's 91',
  ),
  91 => 
  array (
    'T_PIPE' => 'r 50',
    'T_MODULUS' => 'r 50',
    'T_DIVISION' => 'r 50',
    'T_MULTIPLICATION' => 'r 50',
    'T_MINUS' => 'r 50',
    'T_PLUS' => 'r 50',
    'T_NOT_INX' => 'r 50',
    'T_INX' => 'r 50',
    'T_NOT_IN' => 'r 50',
    'T_IN' => 'r 50',
    'T_GE' => 'r 50',
    'T_GT' => 'r 50',
    'T_LE' => 'r 50',
    'T_LT' => 'r 50',
    'T_NX' => 'r 50',
    'T_EX' => 'r 50',
    'T_NE' => 'r 50',
    'T_EQ' => 'r 50',
    'T_AND_SYMBOL' => 'r 50',
    'T_OR_SYMBOL' => 'r 50',
    'T_QUESTION' => 'r 50',
    'T_AND' => 'r 50',
    'T_XOR' => 'r 50',
    'T_OR' => 'r 50',
    'T_COLON' => 'r 50',
    'T_VARIABLE_END' => 'r 50',
    'T_RIGHT_PAREN' => 'r 50',
    'T_RIGHT_BRACKET' => 'r 50',
    'T_RIGHT_BRACE' => 'r 50',
    'T_BLOCK_END' => 'r 50',
    'T_NOT' => 'r 50',
    'T_LEFT_PAREN' => 'r 50',
    'T_ID' => 'r 50',
    'T_NUMBER' => 'r 50',
    'T_SINGLE_QUOTED_STRING' => 'r 50',
    'T_DOUBLE_QUOTED_STRING' => 'r 50',
    'T_TRUE' => 'r 50',
    'T_FALSE' => 'r 50',
  ),
  92 => 
  array (
    'T_PIPE' => 's 93',
    'T_VARIABLE_END' => 'r 65',
    'T_RIGHT_PAREN' => 'r 65',
    'T_RIGHT_BRACKET' => 'r 65',
    'T_RIGHT_BRACE' => 'r 65',
    'T_BLOCK_END' => 'r 65',
    'T_NOT' => 'r 65',
    'T_MINUS' => 'r 65',
    'T_LEFT_PAREN' => 'r 65',
    'T_ID' => 'r 65',
    'T_NUMBER' => 'r 65',
    'T_SINGLE_QUOTED_STRING' => 'r 65',
    'T_DOUBLE_QUOTED_STRING' => 'r 65',
    'T_TRUE' => 'r 65',
    'T_FALSE' => 'r 65',
  ),
  93 => 
  array (
    'T_ID' => 's 94',
  ),
  94 => 
  array (
    'parameters' => 's 95',
    'T_COLON' => 'r 69',
    'T_PIPE' => 'r 69',
    'T_VARIABLE_END' => 'r 69',
    'T_RIGHT_PAREN' => 'r 69',
    'T_RIGHT_BRACKET' => 'r 69',
    'T_RIGHT_BRACE' => 'r 69',
    'T_BLOCK_END' => 'r 69',
    'T_NOT' => 'r 69',
    'T_MINUS' => 'r 69',
    'T_LEFT_PAREN' => 'r 69',
    'T_ID' => 'r 69',
    'T_NUMBER' => 'r 69',
    'T_SINGLE_QUOTED_STRING' => 'r 69',
    'T_DOUBLE_QUOTED_STRING' => 'r 69',
    'T_TRUE' => 'r 69',
    'T_FALSE' => 'r 69',
  ),
  95 => 
  array (
    'T_COLON' => 's 96',
    'T_PIPE' => 'r 66',
    'T_VARIABLE_END' => 'r 66',
    'T_RIGHT_PAREN' => 'r 66',
    'T_RIGHT_BRACKET' => 'r 66',
    'T_RIGHT_BRACE' => 'r 66',
    'T_BLOCK_END' => 'r 66',
    'T_NOT' => 'r 66',
    'T_MINUS' => 'r 66',
    'T_LEFT_PAREN' => 'r 66',
    'T_ID' => 'r 66',
    'T_NUMBER' => 'r 66',
    'T_SINGLE_QUOTED_STRING' => 'r 66',
    'T_DOUBLE_QUOTED_STRING' => 'r 66',
    'T_TRUE' => 'r 66',
    'T_FALSE' => 'r 66',
  ),
  96 => 
  array (
    'expression' => 's 97',
    'terminal' => 's 62',
    'T_NOT' => 's 63',
    'T_MINUS' => 's 66',
    'T_LEFT_PAREN' => 's 65',
    'T_ID' => 's 68',
    'T_NUMBER' => 's 73',
    'T_SINGLE_QUOTED_STRING' => 's 74',
    'T_DOUBLE_QUOTED_STRING' => 's 75',
    'T_TRUE' => 's 76',
    'T_FALSE' => 's 77',
  ),
  97 => 
  array (
    'T_OR' => 's 14',
    'T_XOR' => 's 16',
    'T_AND' => 's 18',
    'T_QUESTION' => 's 20',
    'T_OR_SYMBOL' => 's 24',
    'T_AND_SYMBOL' => 's 26',
    'T_EQ' => 's 28',
    'T_NE' => 's 30',
    'T_EX' => 's 32',
    'T_NX' => 's 34',
    'T_LT' => 's 36',
    'T_LE' => 's 38',
    'T_GT' => 's 40',
    'T_GE' => 's 42',
    'T_IN' => 's 44',
    'T_NOT_IN' => 's 46',
    'T_INX' => 's 48',
    'T_NOT_INX' => 's 50',
    'T_PLUS' => 's 52',
    'T_MINUS' => 's 54',
    'T_MULTIPLICATION' => 's 56',
    'T_DIVISION' => 's 58',
    'T_MODULUS' => 's 60',
    'T_COLON' => 'r 68',
    'T_PIPE' => 'r 68',
    'T_VARIABLE_END' => 'r 68',
    'T_RIGHT_PAREN' => 'r 68',
    'T_RIGHT_BRACKET' => 'r 68',
    'T_RIGHT_BRACE' => 'r 68',
    'T_BLOCK_END' => 'r 68',
    'T_NOT' => 'r 68',
    'T_LEFT_PAREN' => 'r 68',
    'T_ID' => 'r 68',
    'T_NUMBER' => 'r 68',
    'T_SINGLE_QUOTED_STRING' => 'r 68',
    'T_DOUBLE_QUOTED_STRING' => 'r 68',
    'T_TRUE' => 'r 68',
    'T_FALSE' => 'r 68',
  ),
  98 => 
  array (
    'blocks' => 's 99',
    'T_BLOCK' => 's 100',
    'T_IF' => 's 109',
    'T_FOR' => 's 114',
    'T_COMMENT' => 's 129',
    'T_ID' => 's 135',
  ),
  99 => 
  array (
    'T_HTML' => 'r 11',
    'T_EXTENDS' => 'r 11',
    'T_VARIABLE_START' => 'r 11',
    'T_BLOCK_START' => 'r 11',
    '#' => 'r 11',
  ),
  100 => 
  array (
    'T_ID' => 's 101',
  ),
  101 => 
  array (
    'T_BLOCK_END' => 's 102',
  ),
  102 => 
  array (
    'statements' => 's 103',
    'T_BLOCK_START' => 'r 2',
    'T_HTML' => 'r 2',
    'T_EXTENDS' => 'r 2',
    'T_VARIABLE_START' => 'r 2',
  ),
  103 => 
  array (
    'statement' => 's 2',
    'T_HTML' => 's 3',
    'T_EXTENDS' => 's 4',
    'T_VARIABLE_START' => 's 10',
    'T_BLOCK_START' => 's 104',
  ),
  104 => 
  array (
    'blocks' => 's 99',
    'T_BLOCK' => 's 100',
    'T_ENDBLOCK' => 's 105',
    'T_IF' => 's 109',
    'T_FOR' => 's 114',
    'T_COMMENT' => 's 129',
    'T_ID' => 's 135',
  ),
  105 => 
  array (
    'T_ID' => 's 106',
    'id_or_void' => 's 107',
    'T_BLOCK_END' => 'r 7',
  ),
  106 => 
  array (
    'T_BLOCK_END' => 'r 6',
  ),
  107 => 
  array (
    'T_BLOCK_END' => 's 108',
  ),
  108 => 
  array (
    'T_HTML' => 'r 12',
    'T_EXTENDS' => 'r 12',
    'T_VARIABLE_START' => 'r 12',
    'T_BLOCK_START' => 'r 12',
    '#' => 'r 12',
  ),
  109 => 
  array (
    'filtered_expression' => 's 110',
    'expression' => 's 13',
    'terminal' => 's 62',
    'T_NOT' => 's 63',
    'T_MINUS' => 's 66',
    'T_LEFT_PAREN' => 's 65',
    'T_ID' => 's 68',
    'T_NUMBER' => 's 73',
    'T_SINGLE_QUOTED_STRING' => 's 74',
    'T_DOUBLE_QUOTED_STRING' => 's 75',
    'T_TRUE' => 's 76',
    'T_FALSE' => 's 77',
  ),
  110 => 
  array (
    'T_BLOCK_END' => 's 111',
  ),
  111 => 
  array (
    'statements' => 's 112',
    'elseif' => 's 152',
    'else' => 's 144',
    'T_BLOCK_START' => 'r 2',
    'T_HTML' => 'r 2',
    'T_EXTENDS' => 'r 2',
    'T_VARIABLE_START' => 'r 2',
  ),
  112 => 
  array (
    'statement' => 's 2',
    'T_HTML' => 's 3',
    'T_EXTENDS' => 's 4',
    'T_VARIABLE_START' => 's 10',
    'T_BLOCK_START' => 's 113',
  ),
  113 => 
  array (
    'blocks' => 's 99',
    'T_BLOCK' => 's 100',
    'T_IF' => 's 109',
    'T_FOR' => 's 114',
    'T_COMMENT' => 's 129',
    'T_ID' => 's 135',
    'T_ELSE' => 's 139',
    'T_ENDIF' => 's 150',
  ),
  114 => 
  array (
    'T_ID' => 's 115',
  ),
  115 => 
  array (
    'T_IN' => 's 116',
  ),
  116 => 
  array (
    'filtered_expression' => 's 117',
    'expression' => 's 13',
    'terminal' => 's 62',
    'T_NOT' => 's 63',
    'T_MINUS' => 's 66',
    'T_LEFT_PAREN' => 's 65',
    'T_ID' => 's 68',
    'T_NUMBER' => 's 73',
    'T_SINGLE_QUOTED_STRING' => 's 74',
    'T_DOUBLE_QUOTED_STRING' => 's 75',
    'T_TRUE' => 's 76',
    'T_FALSE' => 's 77',
  ),
  117 => 
  array (
    'T_BLOCK_END' => 's 118',
  ),
  118 => 
  array (
    'statements' => 's 119',
    'T_BLOCK_START' => 'r 2',
    'T_HTML' => 'r 2',
    'T_EXTENDS' => 'r 2',
    'T_VARIABLE_START' => 'r 2',
  ),
  119 => 
  array (
    'statement' => 's 2',
    'T_HTML' => 's 3',
    'T_EXTENDS' => 's 4',
    'T_VARIABLE_START' => 's 10',
    'T_BLOCK_START' => 's 120',
  ),
  120 => 
  array (
    'blocks' => 's 99',
    'T_BLOCK' => 's 100',
    'T_IF' => 's 109',
    'T_FOR' => 's 114',
    'T_ENDFOR' => 's 121',
    'T_EMPTY' => 's 123',
    'T_COMMENT' => 's 129',
    'T_ID' => 's 135',
  ),
  121 => 
  array (
    'T_BLOCK_END' => 's 122',
  ),
  122 => 
  array (
    'T_HTML' => 'r 14',
    'T_EXTENDS' => 'r 14',
    'T_VARIABLE_START' => 'r 14',
    'T_BLOCK_START' => 'r 14',
    '#' => 'r 14',
  ),
  123 => 
  array (
    'T_BLOCK_END' => 's 124',
  ),
  124 => 
  array (
    'statements' => 's 125',
    'T_BLOCK_START' => 'r 2',
    'T_HTML' => 'r 2',
    'T_EXTENDS' => 'r 2',
    'T_VARIABLE_START' => 'r 2',
  ),
  125 => 
  array (
    'statement' => 's 2',
    'T_HTML' => 's 3',
    'T_EXTENDS' => 's 4',
    'T_VARIABLE_START' => 's 10',
    'T_BLOCK_START' => 's 126',
  ),
  126 => 
  array (
    'blocks' => 's 99',
    'T_BLOCK' => 's 100',
    'T_IF' => 's 109',
    'T_FOR' => 's 114',
    'T_ENDFOR' => 's 127',
    'T_COMMENT' => 's 129',
    'T_ID' => 's 135',
  ),
  127 => 
  array (
    'T_BLOCK_END' => 's 128',
  ),
  128 => 
  array (
    'T_HTML' => 'r 15',
    'T_EXTENDS' => 'r 15',
    'T_VARIABLE_START' => 'r 15',
    'T_BLOCK_START' => 'r 15',
    '#' => 'r 15',
  ),
  129 => 
  array (
    'T_BLOCK_END' => 's 130',
  ),
  130 => 
  array (
    'statements' => 's 131',
    'T_BLOCK_START' => 'r 2',
    'T_HTML' => 'r 2',
    'T_EXTENDS' => 'r 2',
    'T_VARIABLE_START' => 'r 2',
  ),
  131 => 
  array (
    'statement' => 's 2',
    'T_HTML' => 's 3',
    'T_EXTENDS' => 's 4',
    'T_VARIABLE_START' => 's 10',
    'T_BLOCK_START' => 's 132',
  ),
  132 => 
  array (
    'blocks' => 's 99',
    'T_BLOCK' => 's 100',
    'T_IF' => 's 109',
    'T_FOR' => 's 114',
    'T_COMMENT' => 's 129',
    'T_ENDCOMMENT' => 's 133',
    'T_ID' => 's 135',
  ),
  133 => 
  array (
    'T_BLOCK_END' => 's 134',
  ),
  134 => 
  array (
    'T_HTML' => 'r 16',
    'T_EXTENDS' => 'r 16',
    'T_VARIABLE_START' => 'r 16',
    'T_BLOCK_START' => 'r 16',
    '#' => 'r 16',
  ),
  135 => 
  array (
    'expression_list' => 's 136',
    'T_BLOCK_END' => 'r 19',
    'T_NOT' => 'r 19',
    'T_MINUS' => 'r 19',
    'T_LEFT_PAREN' => 'r 19',
    'T_ID' => 'r 19',
    'T_NUMBER' => 'r 19',
    'T_SINGLE_QUOTED_STRING' => 'r 19',
    'T_DOUBLE_QUOTED_STRING' => 'r 19',
    'T_TRUE' => 'r 19',
    'T_FALSE' => 'r 19',
  ),
  136 => 
  array (
    'T_BLOCK_END' => 's 137',
    'filtered_expression' => 's 138',
    'expression' => 's 13',
    'terminal' => 's 62',
    'T_NOT' => 's 63',
    'T_MINUS' => 's 66',
    'T_LEFT_PAREN' => 's 65',
    'T_ID' => 's 68',
    'T_NUMBER' => 's 73',
    'T_SINGLE_QUOTED_STRING' => 's 74',
    'T_DOUBLE_QUOTED_STRING' => 's 75',
    'T_TRUE' => 's 76',
    'T_FALSE' => 's 77',
  ),
  137 => 
  array (
    'T_HTML' => 'r 17',
    'T_EXTENDS' => 'r 17',
    'T_VARIABLE_START' => 'r 17',
    'T_BLOCK_START' => 'r 17',
    '#' => 'r 17',
  ),
  138 => 
  array (
    'T_BLOCK_END' => 'r 18',
    'T_NOT' => 'r 18',
    'T_MINUS' => 'r 18',
    'T_LEFT_PAREN' => 'r 18',
    'T_ID' => 'r 18',
    'T_NUMBER' => 'r 18',
    'T_SINGLE_QUOTED_STRING' => 'r 18',
    'T_DOUBLE_QUOTED_STRING' => 'r 18',
    'T_TRUE' => 'r 18',
    'T_FALSE' => 'r 18',
  ),
  139 => 
  array (
    'T_IF' => 's 140',
    'T_BLOCK_END' => 's 145',
  ),
  140 => 
  array (
    'filtered_expression' => 's 141',
    'expression' => 's 13',
    'terminal' => 's 62',
    'T_NOT' => 's 63',
    'T_MINUS' => 's 66',
    'T_LEFT_PAREN' => 's 65',
    'T_ID' => 's 68',
    'T_NUMBER' => 's 73',
    'T_SINGLE_QUOTED_STRING' => 's 74',
    'T_DOUBLE_QUOTED_STRING' => 's 75',
    'T_TRUE' => 's 76',
    'T_FALSE' => 's 77',
  ),
  141 => 
  array (
    'T_BLOCK_END' => 's 142',
  ),
  142 => 
  array (
    'statements' => 's 112',
    'elseif' => 's 143',
    'else' => 's 144',
    'T_BLOCK_START' => 'r 2',
    'T_HTML' => 'r 2',
    'T_EXTENDS' => 'r 2',
    'T_VARIABLE_START' => 'r 2',
  ),
  143 => 
  array (
    'T_HTML' => 'r 20',
    'T_EXTENDS' => 'r 20',
    'T_VARIABLE_START' => 'r 20',
    'T_BLOCK_START' => 'r 20',
    '#' => 'r 20',
  ),
  144 => 
  array (
    'T_HTML' => 'r 21',
    'T_EXTENDS' => 'r 21',
    'T_VARIABLE_START' => 'r 21',
    'T_BLOCK_START' => 'r 21',
    '#' => 'r 21',
  ),
  145 => 
  array (
    'statements' => 's 146',
    'T_BLOCK_START' => 'r 2',
    'T_HTML' => 'r 2',
    'T_EXTENDS' => 'r 2',
    'T_VARIABLE_START' => 'r 2',
  ),
  146 => 
  array (
    'statement' => 's 2',
    'T_HTML' => 's 3',
    'T_EXTENDS' => 's 4',
    'T_VARIABLE_START' => 's 10',
    'T_BLOCK_START' => 's 147',
  ),
  147 => 
  array (
    'blocks' => 's 99',
    'T_BLOCK' => 's 100',
    'T_IF' => 's 109',
    'T_FOR' => 's 114',
    'T_COMMENT' => 's 129',
    'T_ID' => 's 135',
    'T_ENDIF' => 's 148',
  ),
  148 => 
  array (
    'T_BLOCK_END' => 's 149',
  ),
  149 => 
  array (
    'T_HTML' => 'r 22',
    'T_EXTENDS' => 'r 22',
    'T_VARIABLE_START' => 'r 22',
    'T_BLOCK_START' => 'r 22',
    '#' => 'r 22',
  ),
  150 => 
  array (
    'T_BLOCK_END' => 's 151',
  ),
  151 => 
  array (
    'T_HTML' => 'r 23',
    'T_EXTENDS' => 'r 23',
    'T_VARIABLE_START' => 'r 23',
    'T_BLOCK_START' => 'r 23',
    '#' => 'r 23',
  ),
  152 => 
  array (
    'T_HTML' => 'r 13',
    'T_EXTENDS' => 'r 13',
    'T_VARIABLE_START' => 'r 13',
    'T_BLOCK_START' => 'r 13',
    '#' => 'r 13',
  ),
  153 => 
  array (
    '#' => 'r 70',
  ),
);
function reduce_0_start_1($tokens, &$result) {
#
# (0) start :=  statements
#
$result = reset($tokens);
 $this->_code($tokens[0]); 
}

function reduce_1_statements_1($tokens, &$result) {
#
# (1) statements :=  statements  statement
#
$result = reset($tokens);

																						if (isset($tokens[1][0]))
																						{
																							$result = array_merge($tokens[0], $tokens[1]);
																						}
																						else if ($tokens[1])
																						{
																							$result = $tokens[0];
																							$result[] = $tokens[1];
																						}
																					
}

function reduce_2_statements_2($tokens, &$result) {
#
# (2) statements :=
#
$result = reset($tokens);
 $result = array(); 
}

function reduce_3_id_or_string_1($tokens, &$result) {
#
# (3) id_or_string :=  T_ID
#
$result = reset($tokens);

}

function reduce_4_id_or_string_2($tokens, &$result) {
#
# (4) id_or_string :=  T_SINGLE_QUOTED_STRING
#
$result = reset($tokens);

}

function reduce_5_id_or_string_3($tokens, &$result) {
#
# (5) id_or_string :=  T_DOUBLE_QUOTED_STRING
#
$result = reset($tokens);

}

function reduce_6_id_or_void_1($tokens, &$result) {
#
# (6) id_or_void :=  T_ID
#
$result = reset($tokens);

}

function reduce_7_id_or_void_2($tokens, &$result) {
#
# (7) id_or_void :=
#
$result = reset($tokens);

}

function reduce_8_statement_1($tokens, &$result) {
#
# (8) statement :=  T_HTML
#
$result = reset($tokens);
 $result = $this->_code_line('html', array($tokens[0])); 
}

function reduce_9_statement_2($tokens, &$result) {
#
# (9) statement :=  T_EXTENDS  id_or_string  T_BLOCK_END
#
$result = reset($tokens);
 $result = $this->_code_line('extends', array($tokens[1])); 
}

function reduce_10_statement_3($tokens, &$result) {
#
# (10) statement :=  T_VARIABLE_START  filtered_expression  T_VARIABLE_END
#
$result = reset($tokens);
 $result = $this->_code_line('variable', array($tokens[1]['expression'])); 
}

function reduce_11_statement_4($tokens, &$result) {
#
# (11) statement :=  T_BLOCK_START  blocks
#
$result = reset($tokens);
 $result = $tokens[1]; 
}

function reduce_12_blocks_1($tokens, &$result) {
#
# (12) blocks :=  T_BLOCK  T_ID  T_BLOCK_END  statements  T_BLOCK_START  T_ENDBLOCK  id_or_void  T_BLOCK_END
#
$result = reset($tokens);

																												$result = $tokens[3];
																												array_unshift($result, $this->_code_line('start_block', array($tokens[1])));
																												$result[] = $this->_code_line('end_block', array($tokens[6]));
																											
}

function reduce_13_blocks_2($tokens, &$result) {
#
# (13) blocks :=  T_IF  filtered_expression  T_BLOCK_END  elseif
#
$result = reset($tokens);

																												$result = $tokens[3];
																												array_unshift($result, $this->_code_line('if', array($tokens[1]['safe_expression'])));
																												$result[] = $this->_code_line('end_if');
																											
}

function reduce_14_blocks_3($tokens, &$result) {
#
# (14) blocks :=  T_FOR  T_ID  T_IN  filtered_expression  T_BLOCK_END  statements  T_BLOCK_START  T_ENDFOR  T_BLOCK_END
#
$result = reset($tokens);

																												$result = $tokens[5];
																												array_unshift($result, $this->_code_line('for', array('$'.$tokens[1], $tokens[3])));
																												$result[] = $this->_code_line('end_for');
																											
}

function reduce_15_blocks_4($tokens, &$result) {
#
# (15) blocks :=  T_FOR  T_ID  T_IN  filtered_expression  T_BLOCK_END  statements  T_BLOCK_START  T_EMPTY  T_BLOCK_END  statements  T_BLOCK_START  T_ENDFOR  T_BLOCK_END
#
$result = reset($tokens);

																												$result = $tokens[5];
																												array_unshift($result, $this->_code_line('for_empty', array('$'.$tokens[1], $tokens[3])));
																												$result = array_merge($result, $tokens[9]);
																												$result[] = $this->_code_line('end_for');
																											
}

function reduce_16_blocks_5($tokens, &$result) {
#
# (16) blocks :=  T_COMMENT  T_BLOCK_END  statements  T_BLOCK_START  T_ENDCOMMENT  T_BLOCK_END
#
$result = reset($tokens);
 $result = array(); 
}

function reduce_17_blocks_6($tokens, &$result) {
#
# (17) blocks :=  T_ID  expression_list  T_BLOCK_END
#
$result = reset($tokens);
 $result = $this->_code_line('custom_block', array($tokens[1]['expression'])); 
}

function reduce_18_expression_list_1($tokens, &$result) {
#
# (18) expression_list :=  expression_list  filtered_expression
#
$result = reset($tokens);

}

function reduce_19_expression_list_2($tokens, &$result) {
#
# (19) expression_list :=
#
$result = reset($tokens);

}

function reduce_20_elseif_1($tokens, &$result) {
#
# (20) elseif :=  statements  T_BLOCK_START  T_ELSE  T_IF  filtered_expression  T_BLOCK_END  elseif
#
$result = reset($tokens);

																												$result = $tokens[0];
																												$result[] = $this->_code_line('else_if', array($tokens[4]['safe_expression']));
																												$result = array_merge($result, $tokens[6]);
																											
}

function reduce_21_elseif_2($tokens, &$result) {
#
# (21) elseif :=  else
#
$result = reset($tokens);
 $result = $tokens[0]; 
}

function reduce_22_else_1($tokens, &$result) {
#
# (22) else :=  statements  T_BLOCK_START  T_ELSE  T_BLOCK_END  statements  T_BLOCK_START  T_ENDIF  T_BLOCK_END
#
$result = reset($tokens);

																												$result = array_merge($tokens[0], array($this->_code_line('else')), $tokens[4]);
																											
}

function reduce_23_else_2($tokens, &$result) {
#
# (23) else :=  statements  T_BLOCK_START  T_ENDIF  T_BLOCK_END
#
$result = reset($tokens);

}

function reduce_24_expression_1($tokens, &$result) {
#
# (24) expression :=  expression  T_OR  expression
#
$result = reset($tokens);
 $result = array('expression' => $tokens[0]['expression'].' OR '.$tokens[2]['expression'], 'safe_expression' => $tokens[0]['safe_expression'].' OR '.$tokens[2]['safe_expression']); 
}

function reduce_25_expression_2($tokens, &$result) {
#
# (25) expression :=  expression  T_XOR  expression
#
$result = reset($tokens);
 $result = array('expression' => $tokens[0]['expression'].' XOR '.$tokens[2]['expression'], 'safe_expression' => $tokens[0]['safe_expression'].' XOR '.$tokens[2]['safe_expression']); 
}

function reduce_26_expression_3($tokens, &$result) {
#
# (26) expression :=  expression  T_AND  expression
#
$result = reset($tokens);
 $result = array('expression' => $tokens[0]['expression'].' AND '.$tokens[2]['expression'], 'safe_expression' => $tokens[0]['safe_expression'].' AND '.$tokens[2]['safe_expression']); 
}

function reduce_27_expression_4($tokens, &$result) {
#
# (27) expression :=  expression  T_QUESTION  expression  T_COLON  expression
#
$result = reset($tokens);

																						$result = array
																						(
																							'expression' => $tokens[0]['expression'].'?'.$tokens[2]['expression'].':'.$tokens[4]['expression'],
																							'safe_expression' => $tokens[0]['safe_expression'].'?'.$tokens[2]['safe_expression'].':'.$tokens[4]['safe_expression']
																						);
																					
}

function reduce_28_expression_5($tokens, &$result) {
#
# (28) expression :=  expression  T_OR_SYMBOL  expression
#
$result = reset($tokens);
 $result = array('expression' => $tokens[0]['expression'].'||'.$tokens[2]['expression'], 'safe_expression' => $tokens[0]['safe_expression'].'||'.$tokens[2]['safe_expression']); 
}

function reduce_29_expression_6($tokens, &$result) {
#
# (29) expression :=  expression  T_AND_SYMBOL  expression
#
$result = reset($tokens);
 $result = array('expression' => $tokens[0]['expression'].'&&'.$tokens[2]['expression'], 'safe_expression' => $tokens[0]['safe_expression'].'&&'.$tokens[2]['safe_expression']); 
}

function reduce_30_expression_7($tokens, &$result) {
#
# (30) expression :=  expression  T_EQ  expression
#
$result = reset($tokens);
 $result = array('expression' => $tokens[0]['expression'].'=='.$tokens[2]['expression'], 'safe_expression' => $tokens[0]['safe_expression'].'=='.$tokens[2]['safe_expression']); 
}

function reduce_31_expression_8($tokens, &$result) {
#
# (31) expression :=  expression  T_NE  expression
#
$result = reset($tokens);
 $result = array('expression' => $tokens[0]['expression'].'!='.$tokens[2]['expression'], 'safe_expression' => $tokens[0]['safe_expression'].'!='.$tokens[2]['safe_expression']); 
}

function reduce_32_expression_9($tokens, &$result) {
#
# (32) expression :=  expression  T_EX  expression
#
$result = reset($tokens);
 $result = array('expression' => $tokens[0]['expression'].'==='.$tokens[2]['expression'], 'safe_expression' => $tokens[0]['safe_expression'].'==='.$tokens[2]['safe_expression']); 
}

function reduce_33_expression_10($tokens, &$result) {
#
# (33) expression :=  expression  T_NX  expression
#
$result = reset($tokens);
 $result = array('expression' => $tokens[0]['expression'].'!=='.$tokens[2]['expression'], 'safe_expression' => $tokens[0]['safe_expression'].'!=='.$tokens[2]['safe_expression']); 
}

function reduce_34_expression_11($tokens, &$result) {
#
# (34) expression :=  expression  T_LT  expression
#
$result = reset($tokens);
 $result = array('expression' => $tokens[0]['expression'].'<'.$tokens[2]['expression'], 'safe_expression' => $tokens[0]['safe_expression'].'<'.$tokens[2]['safe_expression']); 
}

function reduce_35_expression_12($tokens, &$result) {
#
# (35) expression :=  expression  T_LE  expression
#
$result = reset($tokens);
 $result = array('expression' => $tokens[0]['expression'].'<='.$tokens[2]['expression'], 'safe_expression' => $tokens[0]['safe_expression'].'<='.$tokens[2]['safe_expression']); 
}

function reduce_36_expression_13($tokens, &$result) {
#
# (36) expression :=  expression  T_GT  expression
#
$result = reset($tokens);
 $result = array('expression' => $tokens[0]['expression'].'>'.$tokens[2]['expression'], 'safe_expression' => $tokens[0]['safe_expression'].'>'.$tokens[2]['safe_expression']); 
}

function reduce_37_expression_14($tokens, &$result) {
#
# (37) expression :=  expression  T_GE  expression
#
$result = reset($tokens);
 $result = array('expression' => $tokens[0]['expression'].'>='.$tokens[2]['expression'], 'safe_expression' => $tokens[0]['safe_expression'].'>='.$tokens[2]['safe_expression']); 
}

function reduce_38_expression_15($tokens, &$result) {
#
# (38) expression :=  expression  T_IN  expression
#
$result = reset($tokens);

																						$result = array
																						(
																							'expression' => '(('.$tokens[2]['expression'].'===(array)'.$tokens[2]['expression'].')?in_array('.$tokens[0]['expression'].', '.$tokens[2]['expression'].'):FALSE!==strpos('.$tokens[2]['expression'].', '.$tokens[0]['expression'].'))',
																							'safe_expression' => '(is_array('.$tokens[2]['safe_expression'].')?in_array('.$tokens[0]['safe_expression'].', '.$tokens[2]['safe_expression'].'):FALSE!==strpos('.$tokens[2]['safe_expression'].', '.$tokens[0]['safe_expression'].'))',
																						);
																					
}

function reduce_39_expression_16($tokens, &$result) {
#
# (39) expression :=  expression  T_NOT_IN  expression
#
$result = reset($tokens);
 $result = '(is_array('.$tokens[2]['expression'].')?!in_array('.$tokens[0]['expression'].', '.$tokens[2]['expression'].'):FALSE===strpos('.$tokens[2]['expression'].', '.$tokens[0]['expression'].'))'; 
}

function reduce_40_expression_17($tokens, &$result) {
#
# (40) expression :=  expression  T_INX  expression
#
$result = reset($tokens);
 $result = '(is_array('.$tokens[2]['expression'].')?in_array('.$tokens[0]['expression'].', '.$tokens[2]['expression'].', TRUE):FALSE!==strpos('.$tokens[2]['expression'].', '.$tokens[0]['expression'].'))'; 
}

function reduce_41_expression_18($tokens, &$result) {
#
# (41) expression :=  expression  T_NOT_INX  expression
#
$result = reset($tokens);
 $result = '(is_array('.$tokens[2]['expression'].')?!in_array('.$tokens[0]['expression'].', '.$tokens[2]['expression'].', TRUE):FALSE===strpos('.$tokens[2]['expression'].', '.$tokens[0]['expression'].'))'; 
}

function reduce_42_expression_19($tokens, &$result) {
#
# (42) expression :=  expression  T_PLUS  expression
#
$result = reset($tokens);
 $result = array('expression' => $tokens[0]['expression'].'+'.$tokens[2]['expression'], 'safe_expression' => $tokens[0]['expression'].'+'.$tokens[2]); 
}

function reduce_43_expression_20($tokens, &$result) {
#
# (43) expression :=  expression  T_MINUS  expression
#
$result = reset($tokens);
 $result = array('expression' => $tokens[0]['expression'].'-'.$tokens[2]['expression'], 'safe_expression' => $tokens[0]['expression'].'-'.$tokens[2]); 
}

function reduce_44_expression_21($tokens, &$result) {
#
# (44) expression :=  expression  T_MULTIPLICATION  expression
#
$result = reset($tokens);
 $result = array('expression' => $tokens[0]['expression'].'*'.$tokens[2]['expression'], 'safe_expression' => $tokens[0]['expression'].'*'.$tokens[2]); 
}

function reduce_45_expression_22($tokens, &$result) {
#
# (45) expression :=  expression  T_DIVISION  expression
#
$result = reset($tokens);
 $result = array('expression' => $tokens[0]['expression'].'/'.$tokens[2]['expression'], 'safe_expression' => $tokens[0]['expression'].'/'.$tokens[2]); 
}

function reduce_46_expression_23($tokens, &$result) {
#
# (46) expression :=  expression  T_MODULUS  expression
#
$result = reset($tokens);
 $result = array('expression' => $tokens[0]['expression'].'%'.$tokens[2]['expression'], 'safe_expression' => $tokens[0]['expression'].'%'.$tokens[2]); 
}

function reduce_47_expression_24($tokens, &$result) {
#
# (47) expression :=  terminal
#
$result = reset($tokens);

}

function reduce_48_expression_25($tokens, &$result) {
#
# (48) expression :=  T_NOT  terminal
#
$result = reset($tokens);
 $result = array('expression' => '!'.$tokens[1]['expression'], 'safe_expression' => '!'.$tokens[1]['safe_expression']); 
}

function reduce_49_expression_26($tokens, &$result) {
#
# (49) expression :=  T_MINUS  terminal
#
$result = reset($tokens);
 $result = array('expression' => '-'.$tokens[1]['expression'], 'safe_expression' => '-'.$tokens[1]['safe_expression']); 
}

function reduce_50_terminal_1($tokens, &$result) {
#
# (50) terminal :=  T_LEFT_PAREN  filtered_expression  T_RIGHT_PAREN
#
$result = reset($tokens);
 $result = $tokens[1]; 
}

function reduce_51_terminal_2($tokens, &$result) {
#
# (51) terminal :=  T_ID  array_or_object
#
$result = reset($tokens);

																						$result = array
																						(
																							'expression'	=> '$'.$tokens[0].$tokens[1]['expression'],
																							'safe_expression'	=> '@$'.$tokens[0].$tokens[1]['safe_expression']
																						);
																					
}

function reduce_52_terminal_3($tokens, &$result) {
#
# (52) terminal :=  T_NUMBER
#
$result = reset($tokens);
 $result = array('expression' => $tokens[0], 'safe_expression' => $tokens[0]); 
}

function reduce_53_terminal_4($tokens, &$result) {
#
# (53) terminal :=  T_SINGLE_QUOTED_STRING
#
$result = reset($tokens);
 $result = array('expression' => $tokens[0], 'safe_expression' => $tokens[0]); 
}

function reduce_54_terminal_5($tokens, &$result) {
#
# (54) terminal :=  T_DOUBLE_QUOTED_STRING
#
$result = reset($tokens);
 $result = array('expression' => $tokens[0], 'safe_expression' => $tokens[0]); 
}

function reduce_55_terminal_6($tokens, &$result) {
#
# (55) terminal :=  T_TRUE
#
$result = reset($tokens);
 $result = array('expression' => 'TRUE', 'safe_expression' => 'TRUE'); 
}

function reduce_56_terminal_7($tokens, &$result) {
#
# (56) terminal :=  T_FALSE
#
$result = reset($tokens);
 $result = array('expression' => 'FALSE', 'safe_expression' => 'FALSE'); 
}

function reduce_57_array_or_object_1($tokens, &$result) {
#
# (57) array_or_object :=  array_or_object  array
#
$result = reset($tokens);

																						$result = array
																						(
																							'expression' => $tokens[0]['expression'].$tokens[1]['expression'],
																							'safe_expression' => $tokens[0]['safe_expression'].$tokens[1]['safe_expression']
																						);
																					
}

function reduce_58_array_or_object_2($tokens, &$result) {
#
# (58) array_or_object :=  array_or_object  object
#
$result = reset($tokens);

																						$result = array
																						(
																							'expression' => $tokens[0]['expression'].$tokens[1]['expression'],
																							'safe_expression' => $tokens[0]['safe_expression'].$tokens[1]['safe_expression']
																						);
																					
}

function reduce_59_array_or_object_3($tokens, &$result) {
#
# (59) array_or_object :=
#
$result = reset($tokens);
 $result = array('expression' => '', 'safe_expression' => ''); 
}

function reduce_60_array_1($tokens, &$result) {
#
# (60) array :=  T_LEFT_BRACKET  filtered_expression  T_RIGHT_BRACKET
#
$result = reset($tokens);

																						$result = array
																						(
																							'expression' => '['.$tokens[1]['expression'].']',
																							'safe_expression' => '['.$tokens[1]['safe_expression'].']'
																						);
																					
}

function reduce_61_object_1($tokens, &$result) {
#
# (61) object :=  T_ARROW  T_LEFT_BRACE  filtered_expression  T_RIGHT_BRACE
#
$result = reset($tokens);

																						$result = array
																						(
																							'expression' => '->{'.$tokens[2]['expression'].'}',
																							'safe_expression' => '->{'.$tokens[2]['safe_expression'].'}'
																						);
																					
}

function reduce_62_object_2($tokens, &$result) {
#
# (62) object :=  T_DOT  T_LEFT_BRACE  filtered_expression  T_RIGHT_BRACE
#
$result = reset($tokens);

																						$result = array
																						(
																							'expression' => '->{'.$tokens[2]['expression'].'}',
																							'safe_expression' => '->{'.$tokens[2]['safe_expression'].'}'
																						);
																					
}

function reduce_63_object_3($tokens, &$result) {
#
# (63) object :=  T_ARROW  T_ID
#
$result = reset($tokens);
 $result = array('expression' => '->'.$tokens[1], 'safe_expression' => '->'.$tokens[1]); 
}

function reduce_64_object_4($tokens, &$result) {
#
# (64) object :=  T_DOT  T_ID
#
$result = reset($tokens);
 $result = array('expression' => '->'.$tokens[1], 'safe_expression' => '->'.$tokens[1]); 
}

function reduce_65_filtered_expression_1($tokens, &$result) {
#
# (65) filtered_expression :=  expression  filters
#
$result = reset($tokens);
 $result = $this->_parse_filtered_expression($tokens[0], $tokens[1]); 
}

function reduce_66_filters_1($tokens, &$result) {
#
# (66) filters :=  filters  T_PIPE  T_ID  parameters
#
$result = reset($tokens);
 $tokens[0][] = array('name' => $tokens[2], 'parameters' => $tokens[3]); $result = $tokens[0]; 
}

function reduce_67_filters_2($tokens, &$result) {
#
# (67) filters :=
#
$result = reset($tokens);
 $result = array(); 
}

function reduce_68_parameters_1($tokens, &$result) {
#
# (68) parameters :=  parameters  T_COLON  expression
#
$result = reset($tokens);
 $tokens[0][] = $tokens[2]; $result = $tokens[0]; 
}

function reduce_69_parameters_2($tokens, &$result) {
#
# (69) parameters :=
#
$result = reset($tokens);
 $result = array(); 
}

function reduce_70_start_2($tokens, &$result) {
#
# (70) 'start' :=  start
#
$result = reset($tokens);

}

var $method = array (
  0 => 'reduce_0_start_1',
  1 => 'reduce_1_statements_1',
  2 => 'reduce_2_statements_2',
  3 => 'reduce_3_id_or_string_1',
  4 => 'reduce_4_id_or_string_2',
  5 => 'reduce_5_id_or_string_3',
  6 => 'reduce_6_id_or_void_1',
  7 => 'reduce_7_id_or_void_2',
  8 => 'reduce_8_statement_1',
  9 => 'reduce_9_statement_2',
  10 => 'reduce_10_statement_3',
  11 => 'reduce_11_statement_4',
  12 => 'reduce_12_blocks_1',
  13 => 'reduce_13_blocks_2',
  14 => 'reduce_14_blocks_3',
  15 => 'reduce_15_blocks_4',
  16 => 'reduce_16_blocks_5',
  17 => 'reduce_17_blocks_6',
  18 => 'reduce_18_expression_list_1',
  19 => 'reduce_19_expression_list_2',
  20 => 'reduce_20_elseif_1',
  21 => 'reduce_21_elseif_2',
  22 => 'reduce_22_else_1',
  23 => 'reduce_23_else_2',
  24 => 'reduce_24_expression_1',
  25 => 'reduce_25_expression_2',
  26 => 'reduce_26_expression_3',
  27 => 'reduce_27_expression_4',
  28 => 'reduce_28_expression_5',
  29 => 'reduce_29_expression_6',
  30 => 'reduce_30_expression_7',
  31 => 'reduce_31_expression_8',
  32 => 'reduce_32_expression_9',
  33 => 'reduce_33_expression_10',
  34 => 'reduce_34_expression_11',
  35 => 'reduce_35_expression_12',
  36 => 'reduce_36_expression_13',
  37 => 'reduce_37_expression_14',
  38 => 'reduce_38_expression_15',
  39 => 'reduce_39_expression_16',
  40 => 'reduce_40_expression_17',
  41 => 'reduce_41_expression_18',
  42 => 'reduce_42_expression_19',
  43 => 'reduce_43_expression_20',
  44 => 'reduce_44_expression_21',
  45 => 'reduce_45_expression_22',
  46 => 'reduce_46_expression_23',
  47 => 'reduce_47_expression_24',
  48 => 'reduce_48_expression_25',
  49 => 'reduce_49_expression_26',
  50 => 'reduce_50_terminal_1',
  51 => 'reduce_51_terminal_2',
  52 => 'reduce_52_terminal_3',
  53 => 'reduce_53_terminal_4',
  54 => 'reduce_54_terminal_5',
  55 => 'reduce_55_terminal_6',
  56 => 'reduce_56_terminal_7',
  57 => 'reduce_57_array_or_object_1',
  58 => 'reduce_58_array_or_object_2',
  59 => 'reduce_59_array_or_object_3',
  60 => 'reduce_60_array_1',
  61 => 'reduce_61_object_1',
  62 => 'reduce_62_object_2',
  63 => 'reduce_63_object_3',
  64 => 'reduce_64_object_4',
  65 => 'reduce_65_filtered_expression_1',
  66 => 'reduce_66_filters_1',
  67 => 'reduce_67_filters_2',
  68 => 'reduce_68_parameters_1',
  69 => 'reduce_69_parameters_2',
  70 => 'reduce_70_start_2',
);
var $a = array (
  0 => 
  array (
    'symbol' => 'start',
    'len' => 1,
    'replace' => true,
  ),
  1 => 
  array (
    'symbol' => 'statements',
    'len' => 2,
    'replace' => true,
  ),
  2 => 
  array (
    'symbol' => 'statements',
    'len' => 0,
    'replace' => true,
  ),
  3 => 
  array (
    'symbol' => 'id_or_string',
    'len' => 1,
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
    'symbol' => 'id_or_void',
    'len' => 1,
    'replace' => true,
  ),
  7 => 
  array (
    'symbol' => 'id_or_void',
    'len' => 0,
    'replace' => true,
  ),
  8 => 
  array (
    'symbol' => 'statement',
    'len' => 1,
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
    'len' => 3,
    'replace' => true,
  ),
  11 => 
  array (
    'symbol' => 'statement',
    'len' => 2,
    'replace' => true,
  ),
  12 => 
  array (
    'symbol' => 'blocks',
    'len' => 8,
    'replace' => true,
  ),
  13 => 
  array (
    'symbol' => 'blocks',
    'len' => 4,
    'replace' => true,
  ),
  14 => 
  array (
    'symbol' => 'blocks',
    'len' => 9,
    'replace' => true,
  ),
  15 => 
  array (
    'symbol' => 'blocks',
    'len' => 13,
    'replace' => true,
  ),
  16 => 
  array (
    'symbol' => 'blocks',
    'len' => 6,
    'replace' => true,
  ),
  17 => 
  array (
    'symbol' => 'blocks',
    'len' => 3,
    'replace' => true,
  ),
  18 => 
  array (
    'symbol' => 'expression_list',
    'len' => 2,
    'replace' => true,
  ),
  19 => 
  array (
    'symbol' => 'expression_list',
    'len' => 0,
    'replace' => true,
  ),
  20 => 
  array (
    'symbol' => 'elseif',
    'len' => 7,
    'replace' => true,
  ),
  21 => 
  array (
    'symbol' => 'elseif',
    'len' => 1,
    'replace' => true,
  ),
  22 => 
  array (
    'symbol' => 'else',
    'len' => 8,
    'replace' => true,
  ),
  23 => 
  array (
    'symbol' => 'else',
    'len' => 4,
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
    'len' => 5,
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
    'len' => 3,
    'replace' => true,
  ),
  35 => 
  array (
    'symbol' => 'expression',
    'len' => 3,
    'replace' => true,
  ),
  36 => 
  array (
    'symbol' => 'expression',
    'len' => 3,
    'replace' => true,
  ),
  37 => 
  array (
    'symbol' => 'expression',
    'len' => 3,
    'replace' => true,
  ),
  38 => 
  array (
    'symbol' => 'expression',
    'len' => 3,
    'replace' => true,
  ),
  39 => 
  array (
    'symbol' => 'expression',
    'len' => 3,
    'replace' => true,
  ),
  40 => 
  array (
    'symbol' => 'expression',
    'len' => 3,
    'replace' => true,
  ),
  41 => 
  array (
    'symbol' => 'expression',
    'len' => 3,
    'replace' => true,
  ),
  42 => 
  array (
    'symbol' => 'expression',
    'len' => 3,
    'replace' => true,
  ),
  43 => 
  array (
    'symbol' => 'expression',
    'len' => 3,
    'replace' => true,
  ),
  44 => 
  array (
    'symbol' => 'expression',
    'len' => 3,
    'replace' => true,
  ),
  45 => 
  array (
    'symbol' => 'expression',
    'len' => 3,
    'replace' => true,
  ),
  46 => 
  array (
    'symbol' => 'expression',
    'len' => 3,
    'replace' => true,
  ),
  47 => 
  array (
    'symbol' => 'expression',
    'len' => 1,
    'replace' => true,
  ),
  48 => 
  array (
    'symbol' => 'expression',
    'len' => 2,
    'replace' => true,
  ),
  49 => 
  array (
    'symbol' => 'expression',
    'len' => 2,
    'replace' => true,
  ),
  50 => 
  array (
    'symbol' => 'terminal',
    'len' => 3,
    'replace' => true,
  ),
  51 => 
  array (
    'symbol' => 'terminal',
    'len' => 2,
    'replace' => true,
  ),
  52 => 
  array (
    'symbol' => 'terminal',
    'len' => 1,
    'replace' => true,
  ),
  53 => 
  array (
    'symbol' => 'terminal',
    'len' => 1,
    'replace' => true,
  ),
  54 => 
  array (
    'symbol' => 'terminal',
    'len' => 1,
    'replace' => true,
  ),
  55 => 
  array (
    'symbol' => 'terminal',
    'len' => 1,
    'replace' => true,
  ),
  56 => 
  array (
    'symbol' => 'terminal',
    'len' => 1,
    'replace' => true,
  ),
  57 => 
  array (
    'symbol' => 'array_or_object',
    'len' => 2,
    'replace' => true,
  ),
  58 => 
  array (
    'symbol' => 'array_or_object',
    'len' => 2,
    'replace' => true,
  ),
  59 => 
  array (
    'symbol' => 'array_or_object',
    'len' => 0,
    'replace' => true,
  ),
  60 => 
  array (
    'symbol' => 'array',
    'len' => 3,
    'replace' => true,
  ),
  61 => 
  array (
    'symbol' => 'object',
    'len' => 4,
    'replace' => true,
  ),
  62 => 
  array (
    'symbol' => 'object',
    'len' => 4,
    'replace' => true,
  ),
  63 => 
  array (
    'symbol' => 'object',
    'len' => 2,
    'replace' => true,
  ),
  64 => 
  array (
    'symbol' => 'object',
    'len' => 2,
    'replace' => true,
  ),
  65 => 
  array (
    'symbol' => 'filtered_expression',
    'len' => 2,
    'replace' => true,
  ),
  66 => 
  array (
    'symbol' => 'filters',
    'len' => 4,
    'replace' => true,
  ),
  67 => 
  array (
    'symbol' => 'filters',
    'len' => 0,
    'replace' => true,
  ),
  68 => 
  array (
    'symbol' => 'parameters',
    'len' => 3,
    'replace' => true,
  ),
  69 => 
  array (
    'symbol' => 'parameters',
    'len' => 0,
    'replace' => true,
  ),
  70 => 
  array (
    'symbol' => '\'start\'',
    'len' => 1,
    'replace' => true,
  ),
);
}
