<?php

class Pjango_base_parser extends lime_parser {
var $qi = 0;
var $i = array (
  0 => 
  array (
    'statement' => 's 1',
    'T_HTML' => 's 3',
    'T_VARIABLE_START' => 's 4',
    'T_BLOCK_START' => 's 90',
    'start' => 's 92',
    '\'start\'' => 'a \'start\'',
    '#' => 'r 1',
  ),
  1 => 
  array (
    'statement' => 's 1',
    'start' => 's 2',
    'T_HTML' => 's 3',
    'T_VARIABLE_START' => 's 4',
    'T_BLOCK_START' => 's 90',
    '#' => 'r 1',
  ),
  2 => 
  array (
    '#' => 'r 0',
  ),
  3 => 
  array (
    'T_HTML' => 'r 2',
    'T_VARIABLE_START' => 'r 2',
    'T_BLOCK_START' => 'r 2',
    '#' => 'r 2',
  ),
  4 => 
  array (
    'filtered_expression' => 's 5',
    'expression' => 's 7',
    'terminal' => 's 52',
    'T_NOT' => 's 53',
    'T_MINUS' => 's 56',
    'T_LEFT_PAREN' => 's 55',
    'T_ID' => 's 58',
    'T_NUMBER' => 's 65',
    'T_SINGLE_QUOTED_STRING' => 's 66',
    'T_DOUBLE_QUOTED_STRING' => 's 67',
  ),
  5 => 
  array (
    'T_VARIABLE_END' => 's 6',
  ),
  6 => 
  array (
    'T_HTML' => 'r 3',
    'T_VARIABLE_START' => 'r 3',
    'T_BLOCK_START' => 'r 3',
    '#' => 'r 3',
  ),
  7 => 
  array (
    'T_OR' => 's 8',
    'T_XOR' => 's 10',
    'T_AND' => 's 12',
    'T_QUESTION' => 's 14',
    'T_EQ' => 's 18',
    'T_NE' => 's 20',
    'T_EX' => 's 22',
    'T_NX' => 's 24',
    'T_LT' => 's 26',
    'T_LE' => 's 28',
    'T_GT' => 's 30',
    'T_GE' => 's 32',
    'T_IN' => 's 34',
    'T_NOT_IN' => 's 36',
    'T_INX' => 's 38',
    'T_NOT_INX' => 's 40',
    'T_PLUS' => 's 42',
    'T_MINUS' => 's 44',
    'T_MULTIPLICATION' => 's 46',
    'T_DIVISION' => 's 48',
    'T_MODULUS' => 's 50',
    'filters' => 's 82',
    'T_PIPE' => 's 83',
    'T_VARIABLE_END' => 'r 44',
    'T_RIGHT_PAREN' => 'r 44',
    'T_RIGHT_BRACKET' => 'r 44',
    'T_RIGHT_BRACE' => 'r 44',
  ),
  8 => 
  array (
    'expression' => 's 9',
    'terminal' => 's 52',
    'T_NOT' => 's 53',
    'T_MINUS' => 's 56',
    'T_LEFT_PAREN' => 's 55',
    'T_ID' => 's 58',
    'T_NUMBER' => 's 65',
    'T_SINGLE_QUOTED_STRING' => 's 66',
    'T_DOUBLE_QUOTED_STRING' => 's 67',
  ),
  9 => 
  array (
    'T_OR' => 'r 5',
    'T_XOR' => 's 10',
    'T_AND' => 's 12',
    'T_QUESTION' => 's 14',
    'T_EQ' => 's 18',
    'T_NE' => 's 20',
    'T_EX' => 's 22',
    'T_NX' => 's 24',
    'T_LT' => 's 26',
    'T_LE' => 's 28',
    'T_GT' => 's 30',
    'T_GE' => 's 32',
    'T_IN' => 's 34',
    'T_NOT_IN' => 's 36',
    'T_INX' => 's 38',
    'T_NOT_INX' => 's 40',
    'T_PLUS' => 's 42',
    'T_MINUS' => 's 44',
    'T_MULTIPLICATION' => 's 46',
    'T_DIVISION' => 's 48',
    'T_MODULUS' => 's 50',
    'T_PIPE' => 'r 5',
    'T_COLON' => 'r 5',
    'T_VARIABLE_END' => 'r 5',
    'T_RIGHT_PAREN' => 'r 5',
    'T_RIGHT_BRACKET' => 'r 5',
    'T_RIGHT_BRACE' => 'r 5',
  ),
  10 => 
  array (
    'expression' => 's 11',
    'terminal' => 's 52',
    'T_NOT' => 's 53',
    'T_MINUS' => 's 56',
    'T_LEFT_PAREN' => 's 55',
    'T_ID' => 's 58',
    'T_NUMBER' => 's 65',
    'T_SINGLE_QUOTED_STRING' => 's 66',
    'T_DOUBLE_QUOTED_STRING' => 's 67',
  ),
  11 => 
  array (
    'T_OR' => 'r 6',
    'T_XOR' => 'r 6',
    'T_AND' => 's 12',
    'T_QUESTION' => 's 14',
    'T_EQ' => 's 18',
    'T_NE' => 's 20',
    'T_EX' => 's 22',
    'T_NX' => 's 24',
    'T_LT' => 's 26',
    'T_LE' => 's 28',
    'T_GT' => 's 30',
    'T_GE' => 's 32',
    'T_IN' => 's 34',
    'T_NOT_IN' => 's 36',
    'T_INX' => 's 38',
    'T_NOT_INX' => 's 40',
    'T_PLUS' => 's 42',
    'T_MINUS' => 's 44',
    'T_MULTIPLICATION' => 's 46',
    'T_DIVISION' => 's 48',
    'T_MODULUS' => 's 50',
    'T_PIPE' => 'r 6',
    'T_COLON' => 'r 6',
    'T_VARIABLE_END' => 'r 6',
    'T_RIGHT_PAREN' => 'r 6',
    'T_RIGHT_BRACKET' => 'r 6',
    'T_RIGHT_BRACE' => 'r 6',
  ),
  12 => 
  array (
    'expression' => 's 13',
    'terminal' => 's 52',
    'T_NOT' => 's 53',
    'T_MINUS' => 's 56',
    'T_LEFT_PAREN' => 's 55',
    'T_ID' => 's 58',
    'T_NUMBER' => 's 65',
    'T_SINGLE_QUOTED_STRING' => 's 66',
    'T_DOUBLE_QUOTED_STRING' => 's 67',
  ),
  13 => 
  array (
    'T_OR' => 'r 7',
    'T_XOR' => 'r 7',
    'T_AND' => 'r 7',
    'T_QUESTION' => 's 14',
    'T_EQ' => 's 18',
    'T_NE' => 's 20',
    'T_EX' => 's 22',
    'T_NX' => 's 24',
    'T_LT' => 's 26',
    'T_LE' => 's 28',
    'T_GT' => 's 30',
    'T_GE' => 's 32',
    'T_IN' => 's 34',
    'T_NOT_IN' => 's 36',
    'T_INX' => 's 38',
    'T_NOT_INX' => 's 40',
    'T_PLUS' => 's 42',
    'T_MINUS' => 's 44',
    'T_MULTIPLICATION' => 's 46',
    'T_DIVISION' => 's 48',
    'T_MODULUS' => 's 50',
    'T_PIPE' => 'r 7',
    'T_COLON' => 'r 7',
    'T_VARIABLE_END' => 'r 7',
    'T_RIGHT_PAREN' => 'r 7',
    'T_RIGHT_BRACKET' => 'r 7',
    'T_RIGHT_BRACE' => 'r 7',
  ),
  14 => 
  array (
    'expression' => 's 15',
    'terminal' => 's 52',
    'T_NOT' => 's 53',
    'T_MINUS' => 's 56',
    'T_LEFT_PAREN' => 's 55',
    'T_ID' => 's 58',
    'T_NUMBER' => 's 65',
    'T_SINGLE_QUOTED_STRING' => 's 66',
    'T_DOUBLE_QUOTED_STRING' => 's 67',
  ),
  15 => 
  array (
    'T_OR' => 's 8',
    'T_XOR' => 's 10',
    'T_AND' => 's 12',
    'T_QUESTION' => 's 14',
    'T_COLON' => 's 16',
    'T_EQ' => 's 18',
    'T_NE' => 's 20',
    'T_EX' => 's 22',
    'T_NX' => 's 24',
    'T_LT' => 's 26',
    'T_LE' => 's 28',
    'T_GT' => 's 30',
    'T_GE' => 's 32',
    'T_IN' => 's 34',
    'T_NOT_IN' => 's 36',
    'T_INX' => 's 38',
    'T_NOT_INX' => 's 40',
    'T_PLUS' => 's 42',
    'T_MINUS' => 's 44',
    'T_MULTIPLICATION' => 's 46',
    'T_DIVISION' => 's 48',
    'T_MODULUS' => 's 50',
  ),
  16 => 
  array (
    'expression' => 's 17',
    'terminal' => 's 52',
    'T_NOT' => 's 53',
    'T_MINUS' => 's 56',
    'T_LEFT_PAREN' => 's 55',
    'T_ID' => 's 58',
    'T_NUMBER' => 's 65',
    'T_SINGLE_QUOTED_STRING' => 's 66',
    'T_DOUBLE_QUOTED_STRING' => 's 67',
  ),
  17 => 
  array (
    'T_OR' => 'r 8',
    'T_XOR' => 'r 8',
    'T_AND' => 'r 8',
    'T_QUESTION' => 'r 8',
    'T_EQ' => 's 18',
    'T_NE' => 's 20',
    'T_EX' => 's 22',
    'T_NX' => 's 24',
    'T_LT' => 's 26',
    'T_LE' => 's 28',
    'T_GT' => 's 30',
    'T_GE' => 's 32',
    'T_IN' => 's 34',
    'T_NOT_IN' => 's 36',
    'T_INX' => 's 38',
    'T_NOT_INX' => 's 40',
    'T_PLUS' => 's 42',
    'T_MINUS' => 's 44',
    'T_MULTIPLICATION' => 's 46',
    'T_DIVISION' => 's 48',
    'T_MODULUS' => 's 50',
    'T_PIPE' => 'r 8',
    'T_COLON' => 'r 8',
    'T_VARIABLE_END' => 'r 8',
    'T_RIGHT_PAREN' => 'r 8',
    'T_RIGHT_BRACKET' => 'r 8',
    'T_RIGHT_BRACE' => 'r 8',
  ),
  18 => 
  array (
    'expression' => 's 19',
    'terminal' => 's 52',
    'T_NOT' => 's 53',
    'T_MINUS' => 's 56',
    'T_LEFT_PAREN' => 's 55',
    'T_ID' => 's 58',
    'T_NUMBER' => 's 65',
    'T_SINGLE_QUOTED_STRING' => 's 66',
    'T_DOUBLE_QUOTED_STRING' => 's 67',
  ),
  19 => 
  array (
    'T_OR' => 'r 9',
    'T_XOR' => 'r 9',
    'T_AND' => 'r 9',
    'T_QUESTION' => 'r 9',
    'T_LT' => 's 26',
    'T_LE' => 's 28',
    'T_GT' => 's 30',
    'T_GE' => 's 32',
    'T_IN' => 's 34',
    'T_NOT_IN' => 's 36',
    'T_INX' => 's 38',
    'T_NOT_INX' => 's 40',
    'T_PLUS' => 's 42',
    'T_MINUS' => 's 44',
    'T_MULTIPLICATION' => 's 46',
    'T_DIVISION' => 's 48',
    'T_MODULUS' => 's 50',
    'T_PIPE' => 'r 9',
    'T_COLON' => 'r 9',
    'T_VARIABLE_END' => 'r 9',
    'T_RIGHT_PAREN' => 'r 9',
    'T_RIGHT_BRACKET' => 'r 9',
    'T_RIGHT_BRACE' => 'r 9',
  ),
  20 => 
  array (
    'expression' => 's 21',
    'terminal' => 's 52',
    'T_NOT' => 's 53',
    'T_MINUS' => 's 56',
    'T_LEFT_PAREN' => 's 55',
    'T_ID' => 's 58',
    'T_NUMBER' => 's 65',
    'T_SINGLE_QUOTED_STRING' => 's 66',
    'T_DOUBLE_QUOTED_STRING' => 's 67',
  ),
  21 => 
  array (
    'T_OR' => 'r 10',
    'T_XOR' => 'r 10',
    'T_AND' => 'r 10',
    'T_QUESTION' => 'r 10',
    'T_LT' => 's 26',
    'T_LE' => 's 28',
    'T_GT' => 's 30',
    'T_GE' => 's 32',
    'T_IN' => 's 34',
    'T_NOT_IN' => 's 36',
    'T_INX' => 's 38',
    'T_NOT_INX' => 's 40',
    'T_PLUS' => 's 42',
    'T_MINUS' => 's 44',
    'T_MULTIPLICATION' => 's 46',
    'T_DIVISION' => 's 48',
    'T_MODULUS' => 's 50',
    'T_PIPE' => 'r 10',
    'T_COLON' => 'r 10',
    'T_VARIABLE_END' => 'r 10',
    'T_RIGHT_PAREN' => 'r 10',
    'T_RIGHT_BRACKET' => 'r 10',
    'T_RIGHT_BRACE' => 'r 10',
  ),
  22 => 
  array (
    'expression' => 's 23',
    'terminal' => 's 52',
    'T_NOT' => 's 53',
    'T_MINUS' => 's 56',
    'T_LEFT_PAREN' => 's 55',
    'T_ID' => 's 58',
    'T_NUMBER' => 's 65',
    'T_SINGLE_QUOTED_STRING' => 's 66',
    'T_DOUBLE_QUOTED_STRING' => 's 67',
  ),
  23 => 
  array (
    'T_OR' => 'r 11',
    'T_XOR' => 'r 11',
    'T_AND' => 'r 11',
    'T_QUESTION' => 'r 11',
    'T_LT' => 's 26',
    'T_LE' => 's 28',
    'T_GT' => 's 30',
    'T_GE' => 's 32',
    'T_IN' => 's 34',
    'T_NOT_IN' => 's 36',
    'T_INX' => 's 38',
    'T_NOT_INX' => 's 40',
    'T_PLUS' => 's 42',
    'T_MINUS' => 's 44',
    'T_MULTIPLICATION' => 's 46',
    'T_DIVISION' => 's 48',
    'T_MODULUS' => 's 50',
    'T_PIPE' => 'r 11',
    'T_COLON' => 'r 11',
    'T_VARIABLE_END' => 'r 11',
    'T_RIGHT_PAREN' => 'r 11',
    'T_RIGHT_BRACKET' => 'r 11',
    'T_RIGHT_BRACE' => 'r 11',
  ),
  24 => 
  array (
    'expression' => 's 25',
    'terminal' => 's 52',
    'T_NOT' => 's 53',
    'T_MINUS' => 's 56',
    'T_LEFT_PAREN' => 's 55',
    'T_ID' => 's 58',
    'T_NUMBER' => 's 65',
    'T_SINGLE_QUOTED_STRING' => 's 66',
    'T_DOUBLE_QUOTED_STRING' => 's 67',
  ),
  25 => 
  array (
    'T_OR' => 'r 12',
    'T_XOR' => 'r 12',
    'T_AND' => 'r 12',
    'T_QUESTION' => 'r 12',
    'T_LT' => 's 26',
    'T_LE' => 's 28',
    'T_GT' => 's 30',
    'T_GE' => 's 32',
    'T_IN' => 's 34',
    'T_NOT_IN' => 's 36',
    'T_INX' => 's 38',
    'T_NOT_INX' => 's 40',
    'T_PLUS' => 's 42',
    'T_MINUS' => 's 44',
    'T_MULTIPLICATION' => 's 46',
    'T_DIVISION' => 's 48',
    'T_MODULUS' => 's 50',
    'T_PIPE' => 'r 12',
    'T_COLON' => 'r 12',
    'T_VARIABLE_END' => 'r 12',
    'T_RIGHT_PAREN' => 'r 12',
    'T_RIGHT_BRACKET' => 'r 12',
    'T_RIGHT_BRACE' => 'r 12',
  ),
  26 => 
  array (
    'expression' => 's 27',
    'terminal' => 's 52',
    'T_NOT' => 's 53',
    'T_MINUS' => 's 56',
    'T_LEFT_PAREN' => 's 55',
    'T_ID' => 's 58',
    'T_NUMBER' => 's 65',
    'T_SINGLE_QUOTED_STRING' => 's 66',
    'T_DOUBLE_QUOTED_STRING' => 's 67',
  ),
  27 => 
  array (
    'T_OR' => 'r 13',
    'T_XOR' => 'r 13',
    'T_AND' => 'r 13',
    'T_QUESTION' => 'r 13',
    'T_EQ' => 'r 13',
    'T_NE' => 'r 13',
    'T_EX' => 'r 13',
    'T_NX' => 'r 13',
    'T_IN' => 's 34',
    'T_NOT_IN' => 's 36',
    'T_INX' => 's 38',
    'T_NOT_INX' => 's 40',
    'T_PLUS' => 's 42',
    'T_MINUS' => 's 44',
    'T_MULTIPLICATION' => 's 46',
    'T_DIVISION' => 's 48',
    'T_MODULUS' => 's 50',
    'T_PIPE' => 'r 13',
    'T_COLON' => 'r 13',
    'T_VARIABLE_END' => 'r 13',
    'T_RIGHT_PAREN' => 'r 13',
    'T_RIGHT_BRACKET' => 'r 13',
    'T_RIGHT_BRACE' => 'r 13',
  ),
  28 => 
  array (
    'expression' => 's 29',
    'terminal' => 's 52',
    'T_NOT' => 's 53',
    'T_MINUS' => 's 56',
    'T_LEFT_PAREN' => 's 55',
    'T_ID' => 's 58',
    'T_NUMBER' => 's 65',
    'T_SINGLE_QUOTED_STRING' => 's 66',
    'T_DOUBLE_QUOTED_STRING' => 's 67',
  ),
  29 => 
  array (
    'T_OR' => 'r 14',
    'T_XOR' => 'r 14',
    'T_AND' => 'r 14',
    'T_QUESTION' => 'r 14',
    'T_EQ' => 'r 14',
    'T_NE' => 'r 14',
    'T_EX' => 'r 14',
    'T_NX' => 'r 14',
    'T_IN' => 's 34',
    'T_NOT_IN' => 's 36',
    'T_INX' => 's 38',
    'T_NOT_INX' => 's 40',
    'T_PLUS' => 's 42',
    'T_MINUS' => 's 44',
    'T_MULTIPLICATION' => 's 46',
    'T_DIVISION' => 's 48',
    'T_MODULUS' => 's 50',
    'T_PIPE' => 'r 14',
    'T_COLON' => 'r 14',
    'T_VARIABLE_END' => 'r 14',
    'T_RIGHT_PAREN' => 'r 14',
    'T_RIGHT_BRACKET' => 'r 14',
    'T_RIGHT_BRACE' => 'r 14',
  ),
  30 => 
  array (
    'expression' => 's 31',
    'terminal' => 's 52',
    'T_NOT' => 's 53',
    'T_MINUS' => 's 56',
    'T_LEFT_PAREN' => 's 55',
    'T_ID' => 's 58',
    'T_NUMBER' => 's 65',
    'T_SINGLE_QUOTED_STRING' => 's 66',
    'T_DOUBLE_QUOTED_STRING' => 's 67',
  ),
  31 => 
  array (
    'T_OR' => 'r 15',
    'T_XOR' => 'r 15',
    'T_AND' => 'r 15',
    'T_QUESTION' => 'r 15',
    'T_EQ' => 'r 15',
    'T_NE' => 'r 15',
    'T_EX' => 'r 15',
    'T_NX' => 'r 15',
    'T_IN' => 's 34',
    'T_NOT_IN' => 's 36',
    'T_INX' => 's 38',
    'T_NOT_INX' => 's 40',
    'T_PLUS' => 's 42',
    'T_MINUS' => 's 44',
    'T_MULTIPLICATION' => 's 46',
    'T_DIVISION' => 's 48',
    'T_MODULUS' => 's 50',
    'T_PIPE' => 'r 15',
    'T_COLON' => 'r 15',
    'T_VARIABLE_END' => 'r 15',
    'T_RIGHT_PAREN' => 'r 15',
    'T_RIGHT_BRACKET' => 'r 15',
    'T_RIGHT_BRACE' => 'r 15',
  ),
  32 => 
  array (
    'expression' => 's 33',
    'terminal' => 's 52',
    'T_NOT' => 's 53',
    'T_MINUS' => 's 56',
    'T_LEFT_PAREN' => 's 55',
    'T_ID' => 's 58',
    'T_NUMBER' => 's 65',
    'T_SINGLE_QUOTED_STRING' => 's 66',
    'T_DOUBLE_QUOTED_STRING' => 's 67',
  ),
  33 => 
  array (
    'T_OR' => 'r 16',
    'T_XOR' => 'r 16',
    'T_AND' => 'r 16',
    'T_QUESTION' => 'r 16',
    'T_EQ' => 'r 16',
    'T_NE' => 'r 16',
    'T_EX' => 'r 16',
    'T_NX' => 'r 16',
    'T_IN' => 's 34',
    'T_NOT_IN' => 's 36',
    'T_INX' => 's 38',
    'T_NOT_INX' => 's 40',
    'T_PLUS' => 's 42',
    'T_MINUS' => 's 44',
    'T_MULTIPLICATION' => 's 46',
    'T_DIVISION' => 's 48',
    'T_MODULUS' => 's 50',
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
    'terminal' => 's 52',
    'T_NOT' => 's 53',
    'T_MINUS' => 's 56',
    'T_LEFT_PAREN' => 's 55',
    'T_ID' => 's 58',
    'T_NUMBER' => 's 65',
    'T_SINGLE_QUOTED_STRING' => 's 66',
    'T_DOUBLE_QUOTED_STRING' => 's 67',
  ),
  35 => 
  array (
    'T_OR' => 'r 17',
    'T_XOR' => 'r 17',
    'T_AND' => 'r 17',
    'T_QUESTION' => 'r 17',
    'T_EQ' => 'r 17',
    'T_NE' => 'r 17',
    'T_EX' => 'r 17',
    'T_NX' => 'r 17',
    'T_LT' => 'r 17',
    'T_LE' => 'r 17',
    'T_GT' => 'r 17',
    'T_GE' => 'r 17',
    'T_PLUS' => 's 42',
    'T_MINUS' => 's 44',
    'T_MULTIPLICATION' => 's 46',
    'T_DIVISION' => 's 48',
    'T_MODULUS' => 's 50',
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
    'terminal' => 's 52',
    'T_NOT' => 's 53',
    'T_MINUS' => 's 56',
    'T_LEFT_PAREN' => 's 55',
    'T_ID' => 's 58',
    'T_NUMBER' => 's 65',
    'T_SINGLE_QUOTED_STRING' => 's 66',
    'T_DOUBLE_QUOTED_STRING' => 's 67',
  ),
  37 => 
  array (
    'T_OR' => 'r 18',
    'T_XOR' => 'r 18',
    'T_AND' => 'r 18',
    'T_QUESTION' => 'r 18',
    'T_EQ' => 'r 18',
    'T_NE' => 'r 18',
    'T_EX' => 'r 18',
    'T_NX' => 'r 18',
    'T_LT' => 'r 18',
    'T_LE' => 'r 18',
    'T_GT' => 'r 18',
    'T_GE' => 'r 18',
    'T_PLUS' => 's 42',
    'T_MINUS' => 's 44',
    'T_MULTIPLICATION' => 's 46',
    'T_DIVISION' => 's 48',
    'T_MODULUS' => 's 50',
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
    'terminal' => 's 52',
    'T_NOT' => 's 53',
    'T_MINUS' => 's 56',
    'T_LEFT_PAREN' => 's 55',
    'T_ID' => 's 58',
    'T_NUMBER' => 's 65',
    'T_SINGLE_QUOTED_STRING' => 's 66',
    'T_DOUBLE_QUOTED_STRING' => 's 67',
  ),
  39 => 
  array (
    'T_OR' => 'r 19',
    'T_XOR' => 'r 19',
    'T_AND' => 'r 19',
    'T_QUESTION' => 'r 19',
    'T_EQ' => 'r 19',
    'T_NE' => 'r 19',
    'T_EX' => 'r 19',
    'T_NX' => 'r 19',
    'T_LT' => 'r 19',
    'T_LE' => 'r 19',
    'T_GT' => 'r 19',
    'T_GE' => 'r 19',
    'T_PLUS' => 's 42',
    'T_MINUS' => 's 44',
    'T_MULTIPLICATION' => 's 46',
    'T_DIVISION' => 's 48',
    'T_MODULUS' => 's 50',
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
    'terminal' => 's 52',
    'T_NOT' => 's 53',
    'T_MINUS' => 's 56',
    'T_LEFT_PAREN' => 's 55',
    'T_ID' => 's 58',
    'T_NUMBER' => 's 65',
    'T_SINGLE_QUOTED_STRING' => 's 66',
    'T_DOUBLE_QUOTED_STRING' => 's 67',
  ),
  41 => 
  array (
    'T_OR' => 'r 20',
    'T_XOR' => 'r 20',
    'T_AND' => 'r 20',
    'T_QUESTION' => 'r 20',
    'T_EQ' => 'r 20',
    'T_NE' => 'r 20',
    'T_EX' => 'r 20',
    'T_NX' => 'r 20',
    'T_LT' => 'r 20',
    'T_LE' => 'r 20',
    'T_GT' => 'r 20',
    'T_GE' => 'r 20',
    'T_PLUS' => 's 42',
    'T_MINUS' => 's 44',
    'T_MULTIPLICATION' => 's 46',
    'T_DIVISION' => 's 48',
    'T_MODULUS' => 's 50',
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
    'terminal' => 's 52',
    'T_NOT' => 's 53',
    'T_MINUS' => 's 56',
    'T_LEFT_PAREN' => 's 55',
    'T_ID' => 's 58',
    'T_NUMBER' => 's 65',
    'T_SINGLE_QUOTED_STRING' => 's 66',
    'T_DOUBLE_QUOTED_STRING' => 's 67',
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
    'T_LT' => 'r 21',
    'T_LE' => 'r 21',
    'T_GT' => 'r 21',
    'T_GE' => 'r 21',
    'T_IN' => 'r 21',
    'T_NOT_IN' => 'r 21',
    'T_INX' => 'r 21',
    'T_NOT_INX' => 'r 21',
    'T_PLUS' => 'r 21',
    'T_MINUS' => 'r 21',
    'T_MULTIPLICATION' => 's 46',
    'T_DIVISION' => 's 48',
    'T_MODULUS' => 's 50',
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
    'terminal' => 's 52',
    'T_NOT' => 's 53',
    'T_MINUS' => 's 56',
    'T_LEFT_PAREN' => 's 55',
    'T_ID' => 's 58',
    'T_NUMBER' => 's 65',
    'T_SINGLE_QUOTED_STRING' => 's 66',
    'T_DOUBLE_QUOTED_STRING' => 's 67',
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
    'T_LT' => 'r 22',
    'T_LE' => 'r 22',
    'T_GT' => 'r 22',
    'T_GE' => 'r 22',
    'T_IN' => 'r 22',
    'T_NOT_IN' => 'r 22',
    'T_INX' => 'r 22',
    'T_NOT_INX' => 'r 22',
    'T_PLUS' => 'r 22',
    'T_MINUS' => 'r 22',
    'T_MULTIPLICATION' => 's 46',
    'T_DIVISION' => 's 48',
    'T_MODULUS' => 's 50',
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
    'terminal' => 's 52',
    'T_NOT' => 's 53',
    'T_MINUS' => 's 56',
    'T_LEFT_PAREN' => 's 55',
    'T_ID' => 's 58',
    'T_NUMBER' => 's 65',
    'T_SINGLE_QUOTED_STRING' => 's 66',
    'T_DOUBLE_QUOTED_STRING' => 's 67',
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
    'T_LT' => 'r 23',
    'T_LE' => 'r 23',
    'T_GT' => 'r 23',
    'T_GE' => 'r 23',
    'T_IN' => 'r 23',
    'T_NOT_IN' => 'r 23',
    'T_INX' => 'r 23',
    'T_NOT_INX' => 'r 23',
    'T_PLUS' => 'r 23',
    'T_MINUS' => 'r 23',
    'T_MULTIPLICATION' => 'r 23',
    'T_DIVISION' => 'r 23',
    'T_MODULUS' => 'r 23',
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
    'terminal' => 's 52',
    'T_NOT' => 's 53',
    'T_MINUS' => 's 56',
    'T_LEFT_PAREN' => 's 55',
    'T_ID' => 's 58',
    'T_NUMBER' => 's 65',
    'T_SINGLE_QUOTED_STRING' => 's 66',
    'T_DOUBLE_QUOTED_STRING' => 's 67',
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
    'T_LT' => 'r 24',
    'T_LE' => 'r 24',
    'T_GT' => 'r 24',
    'T_GE' => 'r 24',
    'T_IN' => 'r 24',
    'T_NOT_IN' => 'r 24',
    'T_INX' => 'r 24',
    'T_NOT_INX' => 'r 24',
    'T_PLUS' => 'r 24',
    'T_MINUS' => 'r 24',
    'T_MULTIPLICATION' => 'r 24',
    'T_DIVISION' => 'r 24',
    'T_MODULUS' => 'r 24',
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
    'terminal' => 's 52',
    'T_NOT' => 's 53',
    'T_MINUS' => 's 56',
    'T_LEFT_PAREN' => 's 55',
    'T_ID' => 's 58',
    'T_NUMBER' => 's 65',
    'T_SINGLE_QUOTED_STRING' => 's 66',
    'T_DOUBLE_QUOTED_STRING' => 's 67',
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
    'T_IN' => 'r 25',
    'T_NOT_IN' => 'r 25',
    'T_INX' => 'r 25',
    'T_NOT_INX' => 'r 25',
    'T_PLUS' => 'r 25',
    'T_MINUS' => 'r 25',
    'T_MULTIPLICATION' => 'r 25',
    'T_DIVISION' => 'r 25',
    'T_MODULUS' => 'r 25',
    'T_PIPE' => 'r 25',
    'T_COLON' => 'r 25',
    'T_VARIABLE_END' => 'r 25',
    'T_RIGHT_PAREN' => 'r 25',
    'T_RIGHT_BRACKET' => 'r 25',
    'T_RIGHT_BRACE' => 'r 25',
  ),
  52 => 
  array (
    'T_PIPE' => 'r 26',
    'T_MODULUS' => 'r 26',
    'T_DIVISION' => 'r 26',
    'T_MULTIPLICATION' => 'r 26',
    'T_MINUS' => 'r 26',
    'T_PLUS' => 'r 26',
    'T_NOT_INX' => 'r 26',
    'T_INX' => 'r 26',
    'T_NOT_IN' => 'r 26',
    'T_IN' => 'r 26',
    'T_GE' => 'r 26',
    'T_GT' => 'r 26',
    'T_LE' => 'r 26',
    'T_LT' => 'r 26',
    'T_NX' => 'r 26',
    'T_EX' => 'r 26',
    'T_NE' => 'r 26',
    'T_EQ' => 'r 26',
    'T_QUESTION' => 'r 26',
    'T_AND' => 'r 26',
    'T_XOR' => 'r 26',
    'T_OR' => 'r 26',
    'T_COLON' => 'r 26',
    'T_VARIABLE_END' => 'r 26',
    'T_RIGHT_PAREN' => 'r 26',
    'T_RIGHT_BRACKET' => 'r 26',
    'T_RIGHT_BRACE' => 'r 26',
  ),
  53 => 
  array (
    'terminal' => 's 54',
    'T_LEFT_PAREN' => 's 55',
    'T_ID' => 's 58',
    'T_NUMBER' => 's 65',
    'T_SINGLE_QUOTED_STRING' => 's 66',
    'T_DOUBLE_QUOTED_STRING' => 's 67',
  ),
  54 => 
  array (
    'T_PIPE' => 'r 27',
    'T_MODULUS' => 'r 27',
    'T_DIVISION' => 'r 27',
    'T_MULTIPLICATION' => 'r 27',
    'T_MINUS' => 'r 27',
    'T_PLUS' => 'r 27',
    'T_NOT_INX' => 'r 27',
    'T_INX' => 'r 27',
    'T_NOT_IN' => 'r 27',
    'T_IN' => 'r 27',
    'T_GE' => 'r 27',
    'T_GT' => 'r 27',
    'T_LE' => 'r 27',
    'T_LT' => 'r 27',
    'T_NX' => 'r 27',
    'T_EX' => 'r 27',
    'T_NE' => 'r 27',
    'T_EQ' => 'r 27',
    'T_QUESTION' => 'r 27',
    'T_AND' => 'r 27',
    'T_XOR' => 'r 27',
    'T_OR' => 'r 27',
    'T_COLON' => 'r 27',
    'T_VARIABLE_END' => 'r 27',
    'T_RIGHT_PAREN' => 'r 27',
    'T_RIGHT_BRACKET' => 'r 27',
    'T_RIGHT_BRACE' => 'r 27',
  ),
  55 => 
  array (
    'expression' => 's 7',
    'terminal' => 's 52',
    'T_NOT' => 's 53',
    'T_MINUS' => 's 56',
    'T_LEFT_PAREN' => 's 55',
    'filtered_expression' => 's 80',
    'T_ID' => 's 58',
    'T_NUMBER' => 's 65',
    'T_SINGLE_QUOTED_STRING' => 's 66',
    'T_DOUBLE_QUOTED_STRING' => 's 67',
  ),
  56 => 
  array (
    'terminal' => 's 57',
    'T_LEFT_PAREN' => 's 55',
    'T_ID' => 's 58',
    'T_NUMBER' => 's 65',
    'T_SINGLE_QUOTED_STRING' => 's 66',
    'T_DOUBLE_QUOTED_STRING' => 's 67',
  ),
  57 => 
  array (
    'T_PIPE' => 'r 28',
    'T_MODULUS' => 'r 28',
    'T_DIVISION' => 'r 28',
    'T_MULTIPLICATION' => 'r 28',
    'T_MINUS' => 'r 28',
    'T_PLUS' => 'r 28',
    'T_NOT_INX' => 'r 28',
    'T_INX' => 'r 28',
    'T_NOT_IN' => 'r 28',
    'T_IN' => 'r 28',
    'T_GE' => 'r 28',
    'T_GT' => 'r 28',
    'T_LE' => 'r 28',
    'T_LT' => 'r 28',
    'T_NX' => 'r 28',
    'T_EX' => 'r 28',
    'T_NE' => 'r 28',
    'T_EQ' => 'r 28',
    'T_QUESTION' => 'r 28',
    'T_AND' => 'r 28',
    'T_XOR' => 'r 28',
    'T_OR' => 'r 28',
    'T_COLON' => 'r 28',
    'T_VARIABLE_END' => 'r 28',
    'T_RIGHT_PAREN' => 'r 28',
    'T_RIGHT_BRACKET' => 'r 28',
    'T_RIGHT_BRACE' => 'r 28',
  ),
  58 => 
  array (
    'array_or_object' => 's 59',
    'array' => 's 60',
    'object' => 's 62',
    'T_LEFT_BRACKET' => 's 64',
    'T_ARROW' => 's 70',
    'T_DOT' => 's 75',
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
  59 => 
  array (
    'T_PIPE' => 'r 30',
    'T_MODULUS' => 'r 30',
    'T_DIVISION' => 'r 30',
    'T_MULTIPLICATION' => 'r 30',
    'T_MINUS' => 'r 30',
    'T_PLUS' => 'r 30',
    'T_NOT_INX' => 'r 30',
    'T_INX' => 'r 30',
    'T_NOT_IN' => 'r 30',
    'T_IN' => 'r 30',
    'T_GE' => 'r 30',
    'T_GT' => 'r 30',
    'T_LE' => 'r 30',
    'T_LT' => 'r 30',
    'T_NX' => 'r 30',
    'T_EX' => 'r 30',
    'T_NE' => 'r 30',
    'T_EQ' => 'r 30',
    'T_QUESTION' => 'r 30',
    'T_AND' => 'r 30',
    'T_XOR' => 'r 30',
    'T_OR' => 'r 30',
    'T_COLON' => 'r 30',
    'T_VARIABLE_END' => 'r 30',
    'T_RIGHT_PAREN' => 'r 30',
    'T_RIGHT_BRACKET' => 'r 30',
    'T_RIGHT_BRACE' => 'r 30',
  ),
  60 => 
  array (
    'array' => 's 60',
    'array_or_object' => 's 61',
    'object' => 's 62',
    'T_LEFT_BRACKET' => 's 64',
    'T_ARROW' => 's 70',
    'T_DOT' => 's 75',
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
  61 => 
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
  62 => 
  array (
    'array' => 's 60',
    'object' => 's 62',
    'array_or_object' => 's 63',
    'T_LEFT_BRACKET' => 's 64',
    'T_ARROW' => 's 70',
    'T_DOT' => 's 75',
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
  63 => 
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
  64 => 
  array (
    'expression' => 's 7',
    'terminal' => 's 52',
    'T_NOT' => 's 53',
    'T_MINUS' => 's 56',
    'T_LEFT_PAREN' => 's 55',
    'T_ID' => 's 58',
    'T_NUMBER' => 's 65',
    'T_SINGLE_QUOTED_STRING' => 's 66',
    'T_DOUBLE_QUOTED_STRING' => 's 67',
    'filtered_expression' => 's 68',
  ),
  65 => 
  array (
    'T_PIPE' => 'r 31',
    'T_MODULUS' => 'r 31',
    'T_DIVISION' => 'r 31',
    'T_MULTIPLICATION' => 'r 31',
    'T_MINUS' => 'r 31',
    'T_PLUS' => 'r 31',
    'T_NOT_INX' => 'r 31',
    'T_INX' => 'r 31',
    'T_NOT_IN' => 'r 31',
    'T_IN' => 'r 31',
    'T_GE' => 'r 31',
    'T_GT' => 'r 31',
    'T_LE' => 'r 31',
    'T_LT' => 'r 31',
    'T_NX' => 'r 31',
    'T_EX' => 'r 31',
    'T_NE' => 'r 31',
    'T_EQ' => 'r 31',
    'T_QUESTION' => 'r 31',
    'T_AND' => 'r 31',
    'T_XOR' => 'r 31',
    'T_OR' => 'r 31',
    'T_COLON' => 'r 31',
    'T_VARIABLE_END' => 'r 31',
    'T_RIGHT_PAREN' => 'r 31',
    'T_RIGHT_BRACKET' => 'r 31',
    'T_RIGHT_BRACE' => 'r 31',
  ),
  66 => 
  array (
    'T_PIPE' => 'r 32',
    'T_MODULUS' => 'r 32',
    'T_DIVISION' => 'r 32',
    'T_MULTIPLICATION' => 'r 32',
    'T_MINUS' => 'r 32',
    'T_PLUS' => 'r 32',
    'T_NOT_INX' => 'r 32',
    'T_INX' => 'r 32',
    'T_NOT_IN' => 'r 32',
    'T_IN' => 'r 32',
    'T_GE' => 'r 32',
    'T_GT' => 'r 32',
    'T_LE' => 'r 32',
    'T_LT' => 'r 32',
    'T_NX' => 'r 32',
    'T_EX' => 'r 32',
    'T_NE' => 'r 32',
    'T_EQ' => 'r 32',
    'T_QUESTION' => 'r 32',
    'T_AND' => 'r 32',
    'T_XOR' => 'r 32',
    'T_OR' => 'r 32',
    'T_COLON' => 'r 32',
    'T_VARIABLE_END' => 'r 32',
    'T_RIGHT_PAREN' => 'r 32',
    'T_RIGHT_BRACKET' => 'r 32',
    'T_RIGHT_BRACE' => 'r 32',
  ),
  67 => 
  array (
    'T_PIPE' => 'r 33',
    'T_MODULUS' => 'r 33',
    'T_DIVISION' => 'r 33',
    'T_MULTIPLICATION' => 'r 33',
    'T_MINUS' => 'r 33',
    'T_PLUS' => 'r 33',
    'T_NOT_INX' => 'r 33',
    'T_INX' => 'r 33',
    'T_NOT_IN' => 'r 33',
    'T_IN' => 'r 33',
    'T_GE' => 'r 33',
    'T_GT' => 'r 33',
    'T_LE' => 'r 33',
    'T_LT' => 'r 33',
    'T_NX' => 'r 33',
    'T_EX' => 'r 33',
    'T_NE' => 'r 33',
    'T_EQ' => 'r 33',
    'T_QUESTION' => 'r 33',
    'T_AND' => 'r 33',
    'T_XOR' => 'r 33',
    'T_OR' => 'r 33',
    'T_COLON' => 'r 33',
    'T_VARIABLE_END' => 'r 33',
    'T_RIGHT_PAREN' => 'r 33',
    'T_RIGHT_BRACKET' => 'r 33',
    'T_RIGHT_BRACE' => 'r 33',
  ),
  68 => 
  array (
    'T_RIGHT_BRACKET' => 's 69',
  ),
  69 => 
  array (
    'T_LEFT_BRACKET' => 'r 37',
    'T_ARROW' => 'r 37',
    'T_DOT' => 'r 37',
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
  70 => 
  array (
    'T_LEFT_BRACE' => 's 71',
    'T_ID' => 's 74',
  ),
  71 => 
  array (
    'expression' => 's 7',
    'terminal' => 's 52',
    'T_NOT' => 's 53',
    'T_MINUS' => 's 56',
    'T_LEFT_PAREN' => 's 55',
    'T_ID' => 's 58',
    'T_NUMBER' => 's 65',
    'T_SINGLE_QUOTED_STRING' => 's 66',
    'T_DOUBLE_QUOTED_STRING' => 's 67',
    'filtered_expression' => 's 72',
  ),
  72 => 
  array (
    'T_RIGHT_BRACE' => 's 73',
  ),
  73 => 
  array (
    'T_LEFT_BRACKET' => 'r 38',
    'T_ARROW' => 'r 38',
    'T_DOT' => 'r 38',
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
  74 => 
  array (
    'T_LEFT_BRACKET' => 'r 40',
    'T_ARROW' => 'r 40',
    'T_DOT' => 'r 40',
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
  75 => 
  array (
    'T_LEFT_BRACE' => 's 76',
    'T_ID' => 's 79',
  ),
  76 => 
  array (
    'expression' => 's 7',
    'terminal' => 's 52',
    'T_NOT' => 's 53',
    'T_MINUS' => 's 56',
    'T_LEFT_PAREN' => 's 55',
    'T_ID' => 's 58',
    'T_NUMBER' => 's 65',
    'T_SINGLE_QUOTED_STRING' => 's 66',
    'T_DOUBLE_QUOTED_STRING' => 's 67',
    'filtered_expression' => 's 77',
  ),
  77 => 
  array (
    'T_RIGHT_BRACE' => 's 78',
  ),
  78 => 
  array (
    'T_LEFT_BRACKET' => 'r 39',
    'T_ARROW' => 'r 39',
    'T_DOT' => 'r 39',
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
  79 => 
  array (
    'T_LEFT_BRACKET' => 'r 41',
    'T_ARROW' => 'r 41',
    'T_DOT' => 'r 41',
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
  80 => 
  array (
    'T_RIGHT_PAREN' => 's 81',
  ),
  81 => 
  array (
    'T_PIPE' => 'r 29',
    'T_MODULUS' => 'r 29',
    'T_DIVISION' => 'r 29',
    'T_MULTIPLICATION' => 'r 29',
    'T_MINUS' => 'r 29',
    'T_PLUS' => 'r 29',
    'T_NOT_INX' => 'r 29',
    'T_INX' => 'r 29',
    'T_NOT_IN' => 'r 29',
    'T_IN' => 'r 29',
    'T_GE' => 'r 29',
    'T_GT' => 'r 29',
    'T_LE' => 'r 29',
    'T_LT' => 'r 29',
    'T_NX' => 'r 29',
    'T_EX' => 'r 29',
    'T_NE' => 'r 29',
    'T_EQ' => 'r 29',
    'T_QUESTION' => 'r 29',
    'T_AND' => 'r 29',
    'T_XOR' => 'r 29',
    'T_OR' => 'r 29',
    'T_COLON' => 'r 29',
    'T_VARIABLE_END' => 'r 29',
    'T_RIGHT_PAREN' => 'r 29',
    'T_RIGHT_BRACKET' => 'r 29',
    'T_RIGHT_BRACE' => 'r 29',
  ),
  82 => 
  array (
    'T_VARIABLE_END' => 'r 42',
    'T_RIGHT_PAREN' => 'r 42',
    'T_RIGHT_BRACKET' => 'r 42',
    'T_RIGHT_BRACE' => 'r 42',
  ),
  83 => 
  array (
    'T_ID' => 's 84',
  ),
  84 => 
  array (
    'parameters' => 's 85',
    'T_COLON' => 's 87',
    'T_PIPE' => 'r 46',
    'T_VARIABLE_END' => 'r 46',
    'T_RIGHT_PAREN' => 'r 46',
    'T_RIGHT_BRACKET' => 'r 46',
    'T_RIGHT_BRACE' => 'r 46',
  ),
  85 => 
  array (
    'T_PIPE' => 's 83',
    'filters' => 's 86',
    'T_VARIABLE_END' => 'r 44',
    'T_RIGHT_PAREN' => 'r 44',
    'T_RIGHT_BRACKET' => 'r 44',
    'T_RIGHT_BRACE' => 'r 44',
  ),
  86 => 
  array (
    'T_VARIABLE_END' => 'r 43',
    'T_RIGHT_PAREN' => 'r 43',
    'T_RIGHT_BRACKET' => 'r 43',
    'T_RIGHT_BRACE' => 'r 43',
  ),
  87 => 
  array (
    'expression' => 's 88',
    'terminal' => 's 52',
    'T_NOT' => 's 53',
    'T_MINUS' => 's 56',
    'T_LEFT_PAREN' => 's 55',
    'T_ID' => 's 58',
    'T_NUMBER' => 's 65',
    'T_SINGLE_QUOTED_STRING' => 's 66',
    'T_DOUBLE_QUOTED_STRING' => 's 67',
  ),
  88 => 
  array (
    'T_OR' => 's 8',
    'T_XOR' => 's 10',
    'T_AND' => 's 12',
    'T_QUESTION' => 's 14',
    'T_EQ' => 's 18',
    'T_NE' => 's 20',
    'T_EX' => 's 22',
    'T_NX' => 's 24',
    'T_LT' => 's 26',
    'T_LE' => 's 28',
    'T_GT' => 's 30',
    'T_GE' => 's 32',
    'T_IN' => 's 34',
    'T_NOT_IN' => 's 36',
    'T_INX' => 's 38',
    'T_NOT_INX' => 's 40',
    'T_PLUS' => 's 42',
    'T_MINUS' => 's 44',
    'T_MULTIPLICATION' => 's 46',
    'T_DIVISION' => 's 48',
    'T_MODULUS' => 's 50',
    'T_COLON' => 's 87',
    'parameters' => 's 89',
    'T_PIPE' => 'r 46',
    'T_VARIABLE_END' => 'r 46',
    'T_RIGHT_PAREN' => 'r 46',
    'T_RIGHT_BRACKET' => 'r 46',
    'T_RIGHT_BRACE' => 'r 46',
  ),
  89 => 
  array (
    'T_PIPE' => 'r 45',
    'T_VARIABLE_END' => 'r 45',
    'T_RIGHT_PAREN' => 'r 45',
    'T_RIGHT_BRACKET' => 'r 45',
    'T_RIGHT_BRACE' => 'r 45',
  ),
  90 => 
  array (
    'T_BLOCK_END' => 's 91',
  ),
  91 => 
  array (
    'T_HTML' => 'r 4',
    'T_VARIABLE_START' => 'r 4',
    'T_BLOCK_START' => 'r 4',
    '#' => 'r 4',
  ),
  92 => 
  array (
    '#' => 'r 47',
  ),
);
function reduce_0_start_1($tokens, &$result) {
#
# (0) start :=  statement  start
#
$result = reset($tokens);

}

function reduce_1_start_2($tokens, &$result) {
#
# (1) start :=
#
$result = reset($tokens);

}

function reduce_2_statement_1($tokens, &$result) {
#
# (2) statement :=  T_HTML
#
$result = reset($tokens);
 echo $tokens[0]; 
}

function reduce_3_statement_2($tokens, &$result) {
#
# (3) statement :=  T_VARIABLE_START  filtered_expression  T_VARIABLE_END
#
$result = reset($tokens);
 echo $tokens[1]; 
}

function reduce_4_statement_3($tokens, &$result) {
#
# (4) statement :=  T_BLOCK_START  T_BLOCK_END
#
$result = reset($tokens);
 echo ""; 
}

function reduce_5_expression_1($tokens, &$result) {
#
# (5) expression :=  expression  T_OR  expression
#
$result = reset($tokens);
 $result = $tokens[0].'||'.$tokens[2]; 
}

function reduce_6_expression_2($tokens, &$result) {
#
# (6) expression :=  expression  T_XOR  expression
#
$result = reset($tokens);
 $result = $tokens[0].' XOR '.$tokens[2]; 
}

function reduce_7_expression_3($tokens, &$result) {
#
# (7) expression :=  expression  T_AND  expression
#
$result = reset($tokens);
 $result = $tokens[0].'&&'.$tokens[2]; 
}

function reduce_8_expression_4($tokens, &$result) {
#
# (8) expression :=  expression  T_QUESTION  expression  T_COLON  expression
#
$result = reset($tokens);
 $result = $tokens[0].'?'.$tokens[2].':'.$tokens[4]; 
}

function reduce_9_expression_5($tokens, &$result) {
#
# (9) expression :=  expression  T_EQ  expression
#
$result = reset($tokens);
 $result = $tokens[0].'=='.$tokens[2]; 
}

function reduce_10_expression_6($tokens, &$result) {
#
# (10) expression :=  expression  T_NE  expression
#
$result = reset($tokens);
 $result = $tokens[0].'!='.$tokens[2]; 
}

function reduce_11_expression_7($tokens, &$result) {
#
# (11) expression :=  expression  T_EX  expression
#
$result = reset($tokens);
 $result = $tokens[0].'==='.$tokens[2]; 
}

function reduce_12_expression_8($tokens, &$result) {
#
# (12) expression :=  expression  T_NX  expression
#
$result = reset($tokens);
 $result = $tokens[0].'!=='.$tokens[2]; 
}

function reduce_13_expression_9($tokens, &$result) {
#
# (13) expression :=  expression  T_LT  expression
#
$result = reset($tokens);
 $result = $tokens[0].'<'.$tokens[2]; 
}

function reduce_14_expression_10($tokens, &$result) {
#
# (14) expression :=  expression  T_LE  expression
#
$result = reset($tokens);
 $result = $tokens[0].'<='.$tokens[2]; 
}

function reduce_15_expression_11($tokens, &$result) {
#
# (15) expression :=  expression  T_GT  expression
#
$result = reset($tokens);
 $result = $tokens[0].'>'.$tokens[2]; 
}

function reduce_16_expression_12($tokens, &$result) {
#
# (16) expression :=  expression  T_GE  expression
#
$result = reset($tokens);
 $result = $tokens[0].'>='.$tokens[2]; 
}

function reduce_17_expression_13($tokens, &$result) {
#
# (17) expression :=  expression  T_IN  expression
#
$result = reset($tokens);
 $result = '(is_array('.$tokens[2].')?in_array('.$tokens[0].', '.$tokens[2].'):FALSE!==strpos('.$tokens[2].', '.$tokens[0].'))'; 
}

function reduce_18_expression_14($tokens, &$result) {
#
# (18) expression :=  expression  T_NOT_IN  expression
#
$result = reset($tokens);
 $result = '(is_array('.$tokens[2].')?!in_array('.$tokens[0].', '.$tokens[2].'):FALSE===strpos('.$tokens[2].', '.$tokens[0].'))'; 
}

function reduce_19_expression_15($tokens, &$result) {
#
# (19) expression :=  expression  T_INX  expression
#
$result = reset($tokens);
 $result = '(is_array('.$tokens[2].')?in_array('.$tokens[0].', '.$tokens[2].', TRUE):FALSE!==strpos('.$tokens[2].', '.$tokens[0].'))'; 
}

function reduce_20_expression_16($tokens, &$result) {
#
# (20) expression :=  expression  T_NOT_INX  expression
#
$result = reset($tokens);
 $result = '(is_array('.$tokens[2].')?!in_array('.$tokens[0].', '.$tokens[2].', TRUE):FALSE===strpos('.$tokens[2].', '.$tokens[0].'))'; 
}

function reduce_21_expression_17($tokens, &$result) {
#
# (21) expression :=  expression  T_PLUS  expression
#
$result = reset($tokens);
 $result = $tokens[0].'+'.$tokens[2]; 
}

function reduce_22_expression_18($tokens, &$result) {
#
# (22) expression :=  expression  T_MINUS  expression
#
$result = reset($tokens);
 $result = $tokens[0].'-'.$tokens[2]; 
}

function reduce_23_expression_19($tokens, &$result) {
#
# (23) expression :=  expression  T_MULTIPLICATION  expression
#
$result = reset($tokens);
 $result = $tokens[0].'*'.$tokens[2]; 
}

function reduce_24_expression_20($tokens, &$result) {
#
# (24) expression :=  expression  T_DIVISION  expression
#
$result = reset($tokens);
 $result = $tokens[0].'/'.$tokens[2]; 
}

function reduce_25_expression_21($tokens, &$result) {
#
# (25) expression :=  expression  T_MODULUS  expression
#
$result = reset($tokens);
 $result = $tokens[0].'%'.$tokens[2]; 
}

function reduce_26_expression_22($tokens, &$result) {
#
# (26) expression :=  terminal
#
$result = reset($tokens);

}

function reduce_27_expression_23($tokens, &$result) {
#
# (27) expression :=  T_NOT  terminal
#
$result = reset($tokens);
 $result = '!'.$tokens[1]; 
}

function reduce_28_expression_24($tokens, &$result) {
#
# (28) expression :=  T_MINUS  terminal
#
$result = reset($tokens);
 $result = '-'.$tokens[1]; 
}

function reduce_29_terminal_1($tokens, &$result) {
#
# (29) terminal :=  T_LEFT_PAREN  filtered_expression  T_RIGHT_PAREN
#
$result = reset($tokens);
 $result = $tokens[1]; 
}

function reduce_30_terminal_2($tokens, &$result) {
#
# (30) terminal :=  T_ID  array_or_object
#
$result = reset($tokens);
 $result = '$'.$tokens[0].$tokens[1]; 
}

function reduce_31_terminal_3($tokens, &$result) {
#
# (31) terminal :=  T_NUMBER
#
$result = reset($tokens);

}

function reduce_32_terminal_4($tokens, &$result) {
#
# (32) terminal :=  T_SINGLE_QUOTED_STRING
#
$result = reset($tokens);

}

function reduce_33_terminal_5($tokens, &$result) {
#
# (33) terminal :=  T_DOUBLE_QUOTED_STRING
#
$result = reset($tokens);

}

function reduce_34_array_or_object_1($tokens, &$result) {
#
# (34) array_or_object :=  array  array_or_object
#
$result = reset($tokens);
 $result = $tokens[0].$tokens[1]; 
}

function reduce_35_array_or_object_2($tokens, &$result) {
#
# (35) array_or_object :=  object  array_or_object
#
$result = reset($tokens);
 $result = $tokens[0].$tokens[1]; 
}

function reduce_36_array_or_object_3($tokens, &$result) {
#
# (36) array_or_object :=
#
$result = reset($tokens);

}

function reduce_37_array_1($tokens, &$result) {
#
# (37) array :=  T_LEFT_BRACKET  filtered_expression  T_RIGHT_BRACKET
#
$result = reset($tokens);
 $result = '['.$tokens[1].']'; 
}

function reduce_38_object_1($tokens, &$result) {
#
# (38) object :=  T_ARROW  T_LEFT_BRACE  filtered_expression  T_RIGHT_BRACE
#
$result = reset($tokens);
 $result = '->{'.$tokens[2].'}'; 
}

function reduce_39_object_2($tokens, &$result) {
#
# (39) object :=  T_DOT  T_LEFT_BRACE  filtered_expression  T_RIGHT_BRACE
#
$result = reset($tokens);
 $result = '->{'.$tokens[2].'}'; 
}

function reduce_40_object_3($tokens, &$result) {
#
# (40) object :=  T_ARROW  T_ID
#
$result = reset($tokens);
 $result = '->'.$tokens[1]; 
}

function reduce_41_object_4($tokens, &$result) {
#
# (41) object :=  T_DOT  T_ID
#
$result = reset($tokens);
 $result = '->'.$tokens[1]; 
}

function reduce_42_filtered_expression_1($tokens, &$result) {
#
# (42) filtered_expression :=  expression  filters
#
$result = reset($tokens);
 $result = $this->_parse_filtered_expression($tokens[0], $tokens[1]); 
}

function reduce_43_filters_1($tokens, &$result) {
#
# (43) filters :=  T_PIPE  T_ID  parameters  filters
#
$result = reset($tokens);
 array_unshift($tokens[3], array('name' => $tokens[1], 'parameters' => $tokens[2])); $result = $tokens[3]; 
}

function reduce_44_filters_2($tokens, &$result) {
#
# (44) filters :=
#
$result = reset($tokens);
 $result = array(); 
}

function reduce_45_parameters_1($tokens, &$result) {
#
# (45) parameters :=  T_COLON  expression  parameters
#
$result = reset($tokens);
 array_unshift($tokens[2], $tokens[1]); $result = $tokens[2]; 
}

function reduce_46_parameters_2($tokens, &$result) {
#
# (46) parameters :=
#
$result = reset($tokens);
 $result = array(); 
}

function reduce_47_start_3($tokens, &$result) {
#
# (47) 'start' :=  start
#
$result = reset($tokens);

}

var $method = array (
  0 => 'reduce_0_start_1',
  1 => 'reduce_1_start_2',
  2 => 'reduce_2_statement_1',
  3 => 'reduce_3_statement_2',
  4 => 'reduce_4_statement_3',
  5 => 'reduce_5_expression_1',
  6 => 'reduce_6_expression_2',
  7 => 'reduce_7_expression_3',
  8 => 'reduce_8_expression_4',
  9 => 'reduce_9_expression_5',
  10 => 'reduce_10_expression_6',
  11 => 'reduce_11_expression_7',
  12 => 'reduce_12_expression_8',
  13 => 'reduce_13_expression_9',
  14 => 'reduce_14_expression_10',
  15 => 'reduce_15_expression_11',
  16 => 'reduce_16_expression_12',
  17 => 'reduce_17_expression_13',
  18 => 'reduce_18_expression_14',
  19 => 'reduce_19_expression_15',
  20 => 'reduce_20_expression_16',
  21 => 'reduce_21_expression_17',
  22 => 'reduce_22_expression_18',
  23 => 'reduce_23_expression_19',
  24 => 'reduce_24_expression_20',
  25 => 'reduce_25_expression_21',
  26 => 'reduce_26_expression_22',
  27 => 'reduce_27_expression_23',
  28 => 'reduce_28_expression_24',
  29 => 'reduce_29_terminal_1',
  30 => 'reduce_30_terminal_2',
  31 => 'reduce_31_terminal_3',
  32 => 'reduce_32_terminal_4',
  33 => 'reduce_33_terminal_5',
  34 => 'reduce_34_array_or_object_1',
  35 => 'reduce_35_array_or_object_2',
  36 => 'reduce_36_array_or_object_3',
  37 => 'reduce_37_array_1',
  38 => 'reduce_38_object_1',
  39 => 'reduce_39_object_2',
  40 => 'reduce_40_object_3',
  41 => 'reduce_41_object_4',
  42 => 'reduce_42_filtered_expression_1',
  43 => 'reduce_43_filters_1',
  44 => 'reduce_44_filters_2',
  45 => 'reduce_45_parameters_1',
  46 => 'reduce_46_parameters_2',
  47 => 'reduce_47_start_3',
);
var $a = array (
  0 => 
  array (
    'symbol' => 'start',
    'len' => 2,
    'replace' => true,
  ),
  1 => 
  array (
    'symbol' => 'start',
    'len' => 0,
    'replace' => true,
  ),
  2 => 
  array (
    'symbol' => 'statement',
    'len' => 1,
    'replace' => true,
  ),
  3 => 
  array (
    'symbol' => 'statement',
    'len' => 3,
    'replace' => true,
  ),
  4 => 
  array (
    'symbol' => 'statement',
    'len' => 2,
    'replace' => true,
  ),
  5 => 
  array (
    'symbol' => 'expression',
    'len' => 3,
    'replace' => true,
  ),
  6 => 
  array (
    'symbol' => 'expression',
    'len' => 3,
    'replace' => true,
  ),
  7 => 
  array (
    'symbol' => 'expression',
    'len' => 3,
    'replace' => true,
  ),
  8 => 
  array (
    'symbol' => 'expression',
    'len' => 5,
    'replace' => true,
  ),
  9 => 
  array (
    'symbol' => 'expression',
    'len' => 3,
    'replace' => true,
  ),
  10 => 
  array (
    'symbol' => 'expression',
    'len' => 3,
    'replace' => true,
  ),
  11 => 
  array (
    'symbol' => 'expression',
    'len' => 3,
    'replace' => true,
  ),
  12 => 
  array (
    'symbol' => 'expression',
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
    'len' => 3,
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
    'len' => 1,
    'replace' => true,
  ),
  27 => 
  array (
    'symbol' => 'expression',
    'len' => 2,
    'replace' => true,
  ),
  28 => 
  array (
    'symbol' => 'expression',
    'len' => 2,
    'replace' => true,
  ),
  29 => 
  array (
    'symbol' => 'terminal',
    'len' => 3,
    'replace' => true,
  ),
  30 => 
  array (
    'symbol' => 'terminal',
    'len' => 2,
    'replace' => true,
  ),
  31 => 
  array (
    'symbol' => 'terminal',
    'len' => 1,
    'replace' => true,
  ),
  32 => 
  array (
    'symbol' => 'terminal',
    'len' => 1,
    'replace' => true,
  ),
  33 => 
  array (
    'symbol' => 'terminal',
    'len' => 1,
    'replace' => true,
  ),
  34 => 
  array (
    'symbol' => 'array_or_object',
    'len' => 2,
    'replace' => true,
  ),
  35 => 
  array (
    'symbol' => 'array_or_object',
    'len' => 2,
    'replace' => true,
  ),
  36 => 
  array (
    'symbol' => 'array_or_object',
    'len' => 0,
    'replace' => true,
  ),
  37 => 
  array (
    'symbol' => 'array',
    'len' => 3,
    'replace' => true,
  ),
  38 => 
  array (
    'symbol' => 'object',
    'len' => 4,
    'replace' => true,
  ),
  39 => 
  array (
    'symbol' => 'object',
    'len' => 4,
    'replace' => true,
  ),
  40 => 
  array (
    'symbol' => 'object',
    'len' => 2,
    'replace' => true,
  ),
  41 => 
  array (
    'symbol' => 'object',
    'len' => 2,
    'replace' => true,
  ),
  42 => 
  array (
    'symbol' => 'filtered_expression',
    'len' => 2,
    'replace' => true,
  ),
  43 => 
  array (
    'symbol' => 'filters',
    'len' => 4,
    'replace' => true,
  ),
  44 => 
  array (
    'symbol' => 'filters',
    'len' => 0,
    'replace' => true,
  ),
  45 => 
  array (
    'symbol' => 'parameters',
    'len' => 3,
    'replace' => true,
  ),
  46 => 
  array (
    'symbol' => 'parameters',
    'len' => 0,
    'replace' => true,
  ),
  47 => 
  array (
    'symbol' => '\'start\'',
    'len' => 1,
    'replace' => true,
  ),
);
}
