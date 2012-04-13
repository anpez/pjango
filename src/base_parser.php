<?php

class Pjango_base_parser extends lime_parser {
var $qi = 0;
var $i = array (
  0 => 
  array (
    'statements' => 's 1',
    '\'start\'' => 'a \'start\'',
    'T_HTML' => 'r 1',
    'T_EXTENDS' => 'r 1',
    'T_VARIABLE_START' => 'r 1',
    'T_BLOCK_START' => 'r 1',
    '#' => 'r 1',
  ),
  1 => 
  array (
    'statement' => 's 2',
    'T_HTML' => 's 3',
    'T_EXTENDS' => 's 4',
    'T_VARIABLE_START' => 's 11',
    'T_BLOCK_START' => 's 93',
    '#' => 'r 62',
  ),
  2 => 
  array (
    'T_HTML' => 'r 0',
    'T_EXTENDS' => 'r 0',
    'T_VARIABLE_START' => 'r 0',
    'T_BLOCK_START' => 'r 0',
    '#' => 'r 0',
  ),
  3 => 
  array (
    'T_HTML' => 'r 7',
    'T_EXTENDS' => 'r 7',
    'T_VARIABLE_START' => 'r 7',
    'T_BLOCK_START' => 'r 7',
    '#' => 'r 7',
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
    'T_BLOCK_END' => 'r 2',
  ),
  6 => 
  array (
    'T_BLOCK_END' => 'r 3',
  ),
  7 => 
  array (
    'T_BLOCK_END' => 'r 4',
  ),
  8 => 
  array (
    'T_BLOCK_END' => 's 9',
  ),
  9 => 
  array (
    'statements' => 's 10',
    'T_HTML' => 'r 1',
    'T_EXTENDS' => 'r 1',
    'T_VARIABLE_START' => 'r 1',
    'T_BLOCK_START' => 'r 1',
    '#' => 'r 1',
  ),
  10 => 
  array (
    'statement' => 's 2',
    'T_HTML' => 's 3',
    'T_EXTENDS' => 's 4',
    'T_VARIABLE_START' => 's 11',
    'T_BLOCK_START' => 's 93',
    '#' => 'r 8',
  ),
  11 => 
  array (
    'filtered_expression' => 's 12',
    'expression' => 's 14',
    'terminal' => 's 59',
    'T_NOT' => 's 60',
    'T_MINUS' => 's 63',
    'T_LEFT_PAREN' => 's 62',
    'T_ID' => 's 65',
    'T_NUMBER' => 's 70',
    'T_SINGLE_QUOTED_STRING' => 's 71',
    'T_DOUBLE_QUOTED_STRING' => 's 72',
  ),
  12 => 
  array (
    'T_VARIABLE_END' => 's 13',
  ),
  13 => 
  array (
    'T_HTML' => 'r 9',
    'T_EXTENDS' => 'r 9',
    'T_VARIABLE_START' => 'r 9',
    'T_BLOCK_START' => 'r 9',
    '#' => 'r 9',
  ),
  14 => 
  array (
    'T_OR' => 's 15',
    'T_XOR' => 's 17',
    'T_AND' => 's 19',
    'T_QUESTION' => 's 21',
    'T_EQ' => 's 25',
    'T_NE' => 's 27',
    'T_EX' => 's 29',
    'T_NX' => 's 31',
    'T_LT' => 's 33',
    'T_LE' => 's 35',
    'T_GT' => 's 37',
    'T_GE' => 's 39',
    'T_IN' => 's 41',
    'T_NOT_IN' => 's 43',
    'T_INX' => 's 45',
    'T_NOT_INX' => 's 47',
    'T_PLUS' => 's 49',
    'T_MINUS' => 's 51',
    'T_MULTIPLICATION' => 's 53',
    'T_DIVISION' => 's 55',
    'T_MODULUS' => 's 57',
    'filters' => 's 87',
    'T_PIPE' => 'r 59',
    'T_VARIABLE_END' => 'r 59',
    'T_RIGHT_PAREN' => 'r 59',
    'T_RIGHT_BRACKET' => 'r 59',
    'T_RIGHT_BRACE' => 'r 59',
    'T_BLOCK_END' => 'r 59',
  ),
  15 => 
  array (
    'expression' => 's 16',
    'terminal' => 's 59',
    'T_NOT' => 's 60',
    'T_MINUS' => 's 63',
    'T_LEFT_PAREN' => 's 62',
    'T_ID' => 's 65',
    'T_NUMBER' => 's 70',
    'T_SINGLE_QUOTED_STRING' => 's 71',
    'T_DOUBLE_QUOTED_STRING' => 's 72',
  ),
  16 => 
  array (
    'T_OR' => 'r 20',
    'T_XOR' => 's 17',
    'T_AND' => 's 19',
    'T_QUESTION' => 's 21',
    'T_EQ' => 's 25',
    'T_NE' => 's 27',
    'T_EX' => 's 29',
    'T_NX' => 's 31',
    'T_LT' => 's 33',
    'T_LE' => 's 35',
    'T_GT' => 's 37',
    'T_GE' => 's 39',
    'T_IN' => 's 41',
    'T_NOT_IN' => 's 43',
    'T_INX' => 's 45',
    'T_NOT_INX' => 's 47',
    'T_PLUS' => 's 49',
    'T_MINUS' => 's 51',
    'T_MULTIPLICATION' => 's 53',
    'T_DIVISION' => 's 55',
    'T_MODULUS' => 's 57',
    'T_PIPE' => 'r 20',
    'T_COLON' => 'r 20',
    'T_VARIABLE_END' => 'r 20',
    'T_RIGHT_PAREN' => 'r 20',
    'T_RIGHT_BRACKET' => 'r 20',
    'T_RIGHT_BRACE' => 'r 20',
    'T_BLOCK_END' => 'r 20',
  ),
  17 => 
  array (
    'expression' => 's 18',
    'terminal' => 's 59',
    'T_NOT' => 's 60',
    'T_MINUS' => 's 63',
    'T_LEFT_PAREN' => 's 62',
    'T_ID' => 's 65',
    'T_NUMBER' => 's 70',
    'T_SINGLE_QUOTED_STRING' => 's 71',
    'T_DOUBLE_QUOTED_STRING' => 's 72',
  ),
  18 => 
  array (
    'T_OR' => 'r 21',
    'T_XOR' => 'r 21',
    'T_AND' => 's 19',
    'T_QUESTION' => 's 21',
    'T_EQ' => 's 25',
    'T_NE' => 's 27',
    'T_EX' => 's 29',
    'T_NX' => 's 31',
    'T_LT' => 's 33',
    'T_LE' => 's 35',
    'T_GT' => 's 37',
    'T_GE' => 's 39',
    'T_IN' => 's 41',
    'T_NOT_IN' => 's 43',
    'T_INX' => 's 45',
    'T_NOT_INX' => 's 47',
    'T_PLUS' => 's 49',
    'T_MINUS' => 's 51',
    'T_MULTIPLICATION' => 's 53',
    'T_DIVISION' => 's 55',
    'T_MODULUS' => 's 57',
    'T_PIPE' => 'r 21',
    'T_COLON' => 'r 21',
    'T_VARIABLE_END' => 'r 21',
    'T_RIGHT_PAREN' => 'r 21',
    'T_RIGHT_BRACKET' => 'r 21',
    'T_RIGHT_BRACE' => 'r 21',
    'T_BLOCK_END' => 'r 21',
  ),
  19 => 
  array (
    'expression' => 's 20',
    'terminal' => 's 59',
    'T_NOT' => 's 60',
    'T_MINUS' => 's 63',
    'T_LEFT_PAREN' => 's 62',
    'T_ID' => 's 65',
    'T_NUMBER' => 's 70',
    'T_SINGLE_QUOTED_STRING' => 's 71',
    'T_DOUBLE_QUOTED_STRING' => 's 72',
  ),
  20 => 
  array (
    'T_OR' => 'r 22',
    'T_XOR' => 'r 22',
    'T_AND' => 'r 22',
    'T_QUESTION' => 's 21',
    'T_EQ' => 's 25',
    'T_NE' => 's 27',
    'T_EX' => 's 29',
    'T_NX' => 's 31',
    'T_LT' => 's 33',
    'T_LE' => 's 35',
    'T_GT' => 's 37',
    'T_GE' => 's 39',
    'T_IN' => 's 41',
    'T_NOT_IN' => 's 43',
    'T_INX' => 's 45',
    'T_NOT_INX' => 's 47',
    'T_PLUS' => 's 49',
    'T_MINUS' => 's 51',
    'T_MULTIPLICATION' => 's 53',
    'T_DIVISION' => 's 55',
    'T_MODULUS' => 's 57',
    'T_PIPE' => 'r 22',
    'T_COLON' => 'r 22',
    'T_VARIABLE_END' => 'r 22',
    'T_RIGHT_PAREN' => 'r 22',
    'T_RIGHT_BRACKET' => 'r 22',
    'T_RIGHT_BRACE' => 'r 22',
    'T_BLOCK_END' => 'r 22',
  ),
  21 => 
  array (
    'expression' => 's 22',
    'terminal' => 's 59',
    'T_NOT' => 's 60',
    'T_MINUS' => 's 63',
    'T_LEFT_PAREN' => 's 62',
    'T_ID' => 's 65',
    'T_NUMBER' => 's 70',
    'T_SINGLE_QUOTED_STRING' => 's 71',
    'T_DOUBLE_QUOTED_STRING' => 's 72',
  ),
  22 => 
  array (
    'T_OR' => 's 15',
    'T_XOR' => 's 17',
    'T_AND' => 's 19',
    'T_QUESTION' => 's 21',
    'T_COLON' => 's 23',
    'T_EQ' => 's 25',
    'T_NE' => 's 27',
    'T_EX' => 's 29',
    'T_NX' => 's 31',
    'T_LT' => 's 33',
    'T_LE' => 's 35',
    'T_GT' => 's 37',
    'T_GE' => 's 39',
    'T_IN' => 's 41',
    'T_NOT_IN' => 's 43',
    'T_INX' => 's 45',
    'T_NOT_INX' => 's 47',
    'T_PLUS' => 's 49',
    'T_MINUS' => 's 51',
    'T_MULTIPLICATION' => 's 53',
    'T_DIVISION' => 's 55',
    'T_MODULUS' => 's 57',
  ),
  23 => 
  array (
    'expression' => 's 24',
    'terminal' => 's 59',
    'T_NOT' => 's 60',
    'T_MINUS' => 's 63',
    'T_LEFT_PAREN' => 's 62',
    'T_ID' => 's 65',
    'T_NUMBER' => 's 70',
    'T_SINGLE_QUOTED_STRING' => 's 71',
    'T_DOUBLE_QUOTED_STRING' => 's 72',
  ),
  24 => 
  array (
    'T_OR' => 'r 23',
    'T_XOR' => 'r 23',
    'T_AND' => 'r 23',
    'T_QUESTION' => 'r 23',
    'T_EQ' => 's 25',
    'T_NE' => 's 27',
    'T_EX' => 's 29',
    'T_NX' => 's 31',
    'T_LT' => 's 33',
    'T_LE' => 's 35',
    'T_GT' => 's 37',
    'T_GE' => 's 39',
    'T_IN' => 's 41',
    'T_NOT_IN' => 's 43',
    'T_INX' => 's 45',
    'T_NOT_INX' => 's 47',
    'T_PLUS' => 's 49',
    'T_MINUS' => 's 51',
    'T_MULTIPLICATION' => 's 53',
    'T_DIVISION' => 's 55',
    'T_MODULUS' => 's 57',
    'T_PIPE' => 'r 23',
    'T_COLON' => 'r 23',
    'T_VARIABLE_END' => 'r 23',
    'T_RIGHT_PAREN' => 'r 23',
    'T_RIGHT_BRACKET' => 'r 23',
    'T_RIGHT_BRACE' => 'r 23',
    'T_BLOCK_END' => 'r 23',
  ),
  25 => 
  array (
    'expression' => 's 26',
    'terminal' => 's 59',
    'T_NOT' => 's 60',
    'T_MINUS' => 's 63',
    'T_LEFT_PAREN' => 's 62',
    'T_ID' => 's 65',
    'T_NUMBER' => 's 70',
    'T_SINGLE_QUOTED_STRING' => 's 71',
    'T_DOUBLE_QUOTED_STRING' => 's 72',
  ),
  26 => 
  array (
    'T_OR' => 'r 24',
    'T_XOR' => 'r 24',
    'T_AND' => 'r 24',
    'T_QUESTION' => 'r 24',
    'T_LT' => 's 33',
    'T_LE' => 's 35',
    'T_GT' => 's 37',
    'T_GE' => 's 39',
    'T_IN' => 's 41',
    'T_NOT_IN' => 's 43',
    'T_INX' => 's 45',
    'T_NOT_INX' => 's 47',
    'T_PLUS' => 's 49',
    'T_MINUS' => 's 51',
    'T_MULTIPLICATION' => 's 53',
    'T_DIVISION' => 's 55',
    'T_MODULUS' => 's 57',
    'T_PIPE' => 'r 24',
    'T_COLON' => 'r 24',
    'T_VARIABLE_END' => 'r 24',
    'T_RIGHT_PAREN' => 'r 24',
    'T_RIGHT_BRACKET' => 'r 24',
    'T_RIGHT_BRACE' => 'r 24',
    'T_BLOCK_END' => 'r 24',
  ),
  27 => 
  array (
    'expression' => 's 28',
    'terminal' => 's 59',
    'T_NOT' => 's 60',
    'T_MINUS' => 's 63',
    'T_LEFT_PAREN' => 's 62',
    'T_ID' => 's 65',
    'T_NUMBER' => 's 70',
    'T_SINGLE_QUOTED_STRING' => 's 71',
    'T_DOUBLE_QUOTED_STRING' => 's 72',
  ),
  28 => 
  array (
    'T_OR' => 'r 25',
    'T_XOR' => 'r 25',
    'T_AND' => 'r 25',
    'T_QUESTION' => 'r 25',
    'T_LT' => 's 33',
    'T_LE' => 's 35',
    'T_GT' => 's 37',
    'T_GE' => 's 39',
    'T_IN' => 's 41',
    'T_NOT_IN' => 's 43',
    'T_INX' => 's 45',
    'T_NOT_INX' => 's 47',
    'T_PLUS' => 's 49',
    'T_MINUS' => 's 51',
    'T_MULTIPLICATION' => 's 53',
    'T_DIVISION' => 's 55',
    'T_MODULUS' => 's 57',
    'T_PIPE' => 'r 25',
    'T_COLON' => 'r 25',
    'T_VARIABLE_END' => 'r 25',
    'T_RIGHT_PAREN' => 'r 25',
    'T_RIGHT_BRACKET' => 'r 25',
    'T_RIGHT_BRACE' => 'r 25',
    'T_BLOCK_END' => 'r 25',
  ),
  29 => 
  array (
    'expression' => 's 30',
    'terminal' => 's 59',
    'T_NOT' => 's 60',
    'T_MINUS' => 's 63',
    'T_LEFT_PAREN' => 's 62',
    'T_ID' => 's 65',
    'T_NUMBER' => 's 70',
    'T_SINGLE_QUOTED_STRING' => 's 71',
    'T_DOUBLE_QUOTED_STRING' => 's 72',
  ),
  30 => 
  array (
    'T_OR' => 'r 26',
    'T_XOR' => 'r 26',
    'T_AND' => 'r 26',
    'T_QUESTION' => 'r 26',
    'T_LT' => 's 33',
    'T_LE' => 's 35',
    'T_GT' => 's 37',
    'T_GE' => 's 39',
    'T_IN' => 's 41',
    'T_NOT_IN' => 's 43',
    'T_INX' => 's 45',
    'T_NOT_INX' => 's 47',
    'T_PLUS' => 's 49',
    'T_MINUS' => 's 51',
    'T_MULTIPLICATION' => 's 53',
    'T_DIVISION' => 's 55',
    'T_MODULUS' => 's 57',
    'T_PIPE' => 'r 26',
    'T_COLON' => 'r 26',
    'T_VARIABLE_END' => 'r 26',
    'T_RIGHT_PAREN' => 'r 26',
    'T_RIGHT_BRACKET' => 'r 26',
    'T_RIGHT_BRACE' => 'r 26',
    'T_BLOCK_END' => 'r 26',
  ),
  31 => 
  array (
    'expression' => 's 32',
    'terminal' => 's 59',
    'T_NOT' => 's 60',
    'T_MINUS' => 's 63',
    'T_LEFT_PAREN' => 's 62',
    'T_ID' => 's 65',
    'T_NUMBER' => 's 70',
    'T_SINGLE_QUOTED_STRING' => 's 71',
    'T_DOUBLE_QUOTED_STRING' => 's 72',
  ),
  32 => 
  array (
    'T_OR' => 'r 27',
    'T_XOR' => 'r 27',
    'T_AND' => 'r 27',
    'T_QUESTION' => 'r 27',
    'T_LT' => 's 33',
    'T_LE' => 's 35',
    'T_GT' => 's 37',
    'T_GE' => 's 39',
    'T_IN' => 's 41',
    'T_NOT_IN' => 's 43',
    'T_INX' => 's 45',
    'T_NOT_INX' => 's 47',
    'T_PLUS' => 's 49',
    'T_MINUS' => 's 51',
    'T_MULTIPLICATION' => 's 53',
    'T_DIVISION' => 's 55',
    'T_MODULUS' => 's 57',
    'T_PIPE' => 'r 27',
    'T_COLON' => 'r 27',
    'T_VARIABLE_END' => 'r 27',
    'T_RIGHT_PAREN' => 'r 27',
    'T_RIGHT_BRACKET' => 'r 27',
    'T_RIGHT_BRACE' => 'r 27',
    'T_BLOCK_END' => 'r 27',
  ),
  33 => 
  array (
    'expression' => 's 34',
    'terminal' => 's 59',
    'T_NOT' => 's 60',
    'T_MINUS' => 's 63',
    'T_LEFT_PAREN' => 's 62',
    'T_ID' => 's 65',
    'T_NUMBER' => 's 70',
    'T_SINGLE_QUOTED_STRING' => 's 71',
    'T_DOUBLE_QUOTED_STRING' => 's 72',
  ),
  34 => 
  array (
    'T_OR' => 'r 28',
    'T_XOR' => 'r 28',
    'T_AND' => 'r 28',
    'T_QUESTION' => 'r 28',
    'T_EQ' => 'r 28',
    'T_NE' => 'r 28',
    'T_EX' => 'r 28',
    'T_NX' => 'r 28',
    'T_IN' => 's 41',
    'T_NOT_IN' => 's 43',
    'T_INX' => 's 45',
    'T_NOT_INX' => 's 47',
    'T_PLUS' => 's 49',
    'T_MINUS' => 's 51',
    'T_MULTIPLICATION' => 's 53',
    'T_DIVISION' => 's 55',
    'T_MODULUS' => 's 57',
    'T_PIPE' => 'r 28',
    'T_COLON' => 'r 28',
    'T_VARIABLE_END' => 'r 28',
    'T_RIGHT_PAREN' => 'r 28',
    'T_RIGHT_BRACKET' => 'r 28',
    'T_RIGHT_BRACE' => 'r 28',
    'T_BLOCK_END' => 'r 28',
  ),
  35 => 
  array (
    'expression' => 's 36',
    'terminal' => 's 59',
    'T_NOT' => 's 60',
    'T_MINUS' => 's 63',
    'T_LEFT_PAREN' => 's 62',
    'T_ID' => 's 65',
    'T_NUMBER' => 's 70',
    'T_SINGLE_QUOTED_STRING' => 's 71',
    'T_DOUBLE_QUOTED_STRING' => 's 72',
  ),
  36 => 
  array (
    'T_OR' => 'r 29',
    'T_XOR' => 'r 29',
    'T_AND' => 'r 29',
    'T_QUESTION' => 'r 29',
    'T_EQ' => 'r 29',
    'T_NE' => 'r 29',
    'T_EX' => 'r 29',
    'T_NX' => 'r 29',
    'T_IN' => 's 41',
    'T_NOT_IN' => 's 43',
    'T_INX' => 's 45',
    'T_NOT_INX' => 's 47',
    'T_PLUS' => 's 49',
    'T_MINUS' => 's 51',
    'T_MULTIPLICATION' => 's 53',
    'T_DIVISION' => 's 55',
    'T_MODULUS' => 's 57',
    'T_PIPE' => 'r 29',
    'T_COLON' => 'r 29',
    'T_VARIABLE_END' => 'r 29',
    'T_RIGHT_PAREN' => 'r 29',
    'T_RIGHT_BRACKET' => 'r 29',
    'T_RIGHT_BRACE' => 'r 29',
    'T_BLOCK_END' => 'r 29',
  ),
  37 => 
  array (
    'expression' => 's 38',
    'terminal' => 's 59',
    'T_NOT' => 's 60',
    'T_MINUS' => 's 63',
    'T_LEFT_PAREN' => 's 62',
    'T_ID' => 's 65',
    'T_NUMBER' => 's 70',
    'T_SINGLE_QUOTED_STRING' => 's 71',
    'T_DOUBLE_QUOTED_STRING' => 's 72',
  ),
  38 => 
  array (
    'T_OR' => 'r 30',
    'T_XOR' => 'r 30',
    'T_AND' => 'r 30',
    'T_QUESTION' => 'r 30',
    'T_EQ' => 'r 30',
    'T_NE' => 'r 30',
    'T_EX' => 'r 30',
    'T_NX' => 'r 30',
    'T_IN' => 's 41',
    'T_NOT_IN' => 's 43',
    'T_INX' => 's 45',
    'T_NOT_INX' => 's 47',
    'T_PLUS' => 's 49',
    'T_MINUS' => 's 51',
    'T_MULTIPLICATION' => 's 53',
    'T_DIVISION' => 's 55',
    'T_MODULUS' => 's 57',
    'T_PIPE' => 'r 30',
    'T_COLON' => 'r 30',
    'T_VARIABLE_END' => 'r 30',
    'T_RIGHT_PAREN' => 'r 30',
    'T_RIGHT_BRACKET' => 'r 30',
    'T_RIGHT_BRACE' => 'r 30',
    'T_BLOCK_END' => 'r 30',
  ),
  39 => 
  array (
    'expression' => 's 40',
    'terminal' => 's 59',
    'T_NOT' => 's 60',
    'T_MINUS' => 's 63',
    'T_LEFT_PAREN' => 's 62',
    'T_ID' => 's 65',
    'T_NUMBER' => 's 70',
    'T_SINGLE_QUOTED_STRING' => 's 71',
    'T_DOUBLE_QUOTED_STRING' => 's 72',
  ),
  40 => 
  array (
    'T_OR' => 'r 31',
    'T_XOR' => 'r 31',
    'T_AND' => 'r 31',
    'T_QUESTION' => 'r 31',
    'T_EQ' => 'r 31',
    'T_NE' => 'r 31',
    'T_EX' => 'r 31',
    'T_NX' => 'r 31',
    'T_IN' => 's 41',
    'T_NOT_IN' => 's 43',
    'T_INX' => 's 45',
    'T_NOT_INX' => 's 47',
    'T_PLUS' => 's 49',
    'T_MINUS' => 's 51',
    'T_MULTIPLICATION' => 's 53',
    'T_DIVISION' => 's 55',
    'T_MODULUS' => 's 57',
    'T_PIPE' => 'r 31',
    'T_COLON' => 'r 31',
    'T_VARIABLE_END' => 'r 31',
    'T_RIGHT_PAREN' => 'r 31',
    'T_RIGHT_BRACKET' => 'r 31',
    'T_RIGHT_BRACE' => 'r 31',
    'T_BLOCK_END' => 'r 31',
  ),
  41 => 
  array (
    'expression' => 's 42',
    'terminal' => 's 59',
    'T_NOT' => 's 60',
    'T_MINUS' => 's 63',
    'T_LEFT_PAREN' => 's 62',
    'T_ID' => 's 65',
    'T_NUMBER' => 's 70',
    'T_SINGLE_QUOTED_STRING' => 's 71',
    'T_DOUBLE_QUOTED_STRING' => 's 72',
  ),
  42 => 
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
    'T_PLUS' => 's 49',
    'T_MINUS' => 's 51',
    'T_MULTIPLICATION' => 's 53',
    'T_DIVISION' => 's 55',
    'T_MODULUS' => 's 57',
    'T_PIPE' => 'r 32',
    'T_COLON' => 'r 32',
    'T_VARIABLE_END' => 'r 32',
    'T_RIGHT_PAREN' => 'r 32',
    'T_RIGHT_BRACKET' => 'r 32',
    'T_RIGHT_BRACE' => 'r 32',
    'T_BLOCK_END' => 'r 32',
  ),
  43 => 
  array (
    'expression' => 's 44',
    'terminal' => 's 59',
    'T_NOT' => 's 60',
    'T_MINUS' => 's 63',
    'T_LEFT_PAREN' => 's 62',
    'T_ID' => 's 65',
    'T_NUMBER' => 's 70',
    'T_SINGLE_QUOTED_STRING' => 's 71',
    'T_DOUBLE_QUOTED_STRING' => 's 72',
  ),
  44 => 
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
    'T_PLUS' => 's 49',
    'T_MINUS' => 's 51',
    'T_MULTIPLICATION' => 's 53',
    'T_DIVISION' => 's 55',
    'T_MODULUS' => 's 57',
    'T_PIPE' => 'r 33',
    'T_COLON' => 'r 33',
    'T_VARIABLE_END' => 'r 33',
    'T_RIGHT_PAREN' => 'r 33',
    'T_RIGHT_BRACKET' => 'r 33',
    'T_RIGHT_BRACE' => 'r 33',
    'T_BLOCK_END' => 'r 33',
  ),
  45 => 
  array (
    'expression' => 's 46',
    'terminal' => 's 59',
    'T_NOT' => 's 60',
    'T_MINUS' => 's 63',
    'T_LEFT_PAREN' => 's 62',
    'T_ID' => 's 65',
    'T_NUMBER' => 's 70',
    'T_SINGLE_QUOTED_STRING' => 's 71',
    'T_DOUBLE_QUOTED_STRING' => 's 72',
  ),
  46 => 
  array (
    'T_OR' => 'r 34',
    'T_XOR' => 'r 34',
    'T_AND' => 'r 34',
    'T_QUESTION' => 'r 34',
    'T_EQ' => 'r 34',
    'T_NE' => 'r 34',
    'T_EX' => 'r 34',
    'T_NX' => 'r 34',
    'T_LT' => 'r 34',
    'T_LE' => 'r 34',
    'T_GT' => 'r 34',
    'T_GE' => 'r 34',
    'T_PLUS' => 's 49',
    'T_MINUS' => 's 51',
    'T_MULTIPLICATION' => 's 53',
    'T_DIVISION' => 's 55',
    'T_MODULUS' => 's 57',
    'T_PIPE' => 'r 34',
    'T_COLON' => 'r 34',
    'T_VARIABLE_END' => 'r 34',
    'T_RIGHT_PAREN' => 'r 34',
    'T_RIGHT_BRACKET' => 'r 34',
    'T_RIGHT_BRACE' => 'r 34',
    'T_BLOCK_END' => 'r 34',
  ),
  47 => 
  array (
    'expression' => 's 48',
    'terminal' => 's 59',
    'T_NOT' => 's 60',
    'T_MINUS' => 's 63',
    'T_LEFT_PAREN' => 's 62',
    'T_ID' => 's 65',
    'T_NUMBER' => 's 70',
    'T_SINGLE_QUOTED_STRING' => 's 71',
    'T_DOUBLE_QUOTED_STRING' => 's 72',
  ),
  48 => 
  array (
    'T_OR' => 'r 35',
    'T_XOR' => 'r 35',
    'T_AND' => 'r 35',
    'T_QUESTION' => 'r 35',
    'T_EQ' => 'r 35',
    'T_NE' => 'r 35',
    'T_EX' => 'r 35',
    'T_NX' => 'r 35',
    'T_LT' => 'r 35',
    'T_LE' => 'r 35',
    'T_GT' => 'r 35',
    'T_GE' => 'r 35',
    'T_PLUS' => 's 49',
    'T_MINUS' => 's 51',
    'T_MULTIPLICATION' => 's 53',
    'T_DIVISION' => 's 55',
    'T_MODULUS' => 's 57',
    'T_PIPE' => 'r 35',
    'T_COLON' => 'r 35',
    'T_VARIABLE_END' => 'r 35',
    'T_RIGHT_PAREN' => 'r 35',
    'T_RIGHT_BRACKET' => 'r 35',
    'T_RIGHT_BRACE' => 'r 35',
    'T_BLOCK_END' => 'r 35',
  ),
  49 => 
  array (
    'expression' => 's 50',
    'terminal' => 's 59',
    'T_NOT' => 's 60',
    'T_MINUS' => 's 63',
    'T_LEFT_PAREN' => 's 62',
    'T_ID' => 's 65',
    'T_NUMBER' => 's 70',
    'T_SINGLE_QUOTED_STRING' => 's 71',
    'T_DOUBLE_QUOTED_STRING' => 's 72',
  ),
  50 => 
  array (
    'T_OR' => 'r 36',
    'T_XOR' => 'r 36',
    'T_AND' => 'r 36',
    'T_QUESTION' => 'r 36',
    'T_EQ' => 'r 36',
    'T_NE' => 'r 36',
    'T_EX' => 'r 36',
    'T_NX' => 'r 36',
    'T_LT' => 'r 36',
    'T_LE' => 'r 36',
    'T_GT' => 'r 36',
    'T_GE' => 'r 36',
    'T_IN' => 'r 36',
    'T_NOT_IN' => 'r 36',
    'T_INX' => 'r 36',
    'T_NOT_INX' => 'r 36',
    'T_PLUS' => 'r 36',
    'T_MINUS' => 'r 36',
    'T_MULTIPLICATION' => 's 53',
    'T_DIVISION' => 's 55',
    'T_MODULUS' => 's 57',
    'T_PIPE' => 'r 36',
    'T_COLON' => 'r 36',
    'T_VARIABLE_END' => 'r 36',
    'T_RIGHT_PAREN' => 'r 36',
    'T_RIGHT_BRACKET' => 'r 36',
    'T_RIGHT_BRACE' => 'r 36',
    'T_BLOCK_END' => 'r 36',
  ),
  51 => 
  array (
    'expression' => 's 52',
    'terminal' => 's 59',
    'T_NOT' => 's 60',
    'T_MINUS' => 's 63',
    'T_LEFT_PAREN' => 's 62',
    'T_ID' => 's 65',
    'T_NUMBER' => 's 70',
    'T_SINGLE_QUOTED_STRING' => 's 71',
    'T_DOUBLE_QUOTED_STRING' => 's 72',
  ),
  52 => 
  array (
    'T_OR' => 'r 37',
    'T_XOR' => 'r 37',
    'T_AND' => 'r 37',
    'T_QUESTION' => 'r 37',
    'T_EQ' => 'r 37',
    'T_NE' => 'r 37',
    'T_EX' => 'r 37',
    'T_NX' => 'r 37',
    'T_LT' => 'r 37',
    'T_LE' => 'r 37',
    'T_GT' => 'r 37',
    'T_GE' => 'r 37',
    'T_IN' => 'r 37',
    'T_NOT_IN' => 'r 37',
    'T_INX' => 'r 37',
    'T_NOT_INX' => 'r 37',
    'T_PLUS' => 'r 37',
    'T_MINUS' => 'r 37',
    'T_MULTIPLICATION' => 's 53',
    'T_DIVISION' => 's 55',
    'T_MODULUS' => 's 57',
    'T_PIPE' => 'r 37',
    'T_COLON' => 'r 37',
    'T_VARIABLE_END' => 'r 37',
    'T_RIGHT_PAREN' => 'r 37',
    'T_RIGHT_BRACKET' => 'r 37',
    'T_RIGHT_BRACE' => 'r 37',
    'T_BLOCK_END' => 'r 37',
  ),
  53 => 
  array (
    'expression' => 's 54',
    'terminal' => 's 59',
    'T_NOT' => 's 60',
    'T_MINUS' => 's 63',
    'T_LEFT_PAREN' => 's 62',
    'T_ID' => 's 65',
    'T_NUMBER' => 's 70',
    'T_SINGLE_QUOTED_STRING' => 's 71',
    'T_DOUBLE_QUOTED_STRING' => 's 72',
  ),
  54 => 
  array (
    'T_OR' => 'r 38',
    'T_XOR' => 'r 38',
    'T_AND' => 'r 38',
    'T_QUESTION' => 'r 38',
    'T_EQ' => 'r 38',
    'T_NE' => 'r 38',
    'T_EX' => 'r 38',
    'T_NX' => 'r 38',
    'T_LT' => 'r 38',
    'T_LE' => 'r 38',
    'T_GT' => 'r 38',
    'T_GE' => 'r 38',
    'T_IN' => 'r 38',
    'T_NOT_IN' => 'r 38',
    'T_INX' => 'r 38',
    'T_NOT_INX' => 'r 38',
    'T_PLUS' => 'r 38',
    'T_MINUS' => 'r 38',
    'T_MULTIPLICATION' => 'r 38',
    'T_DIVISION' => 'r 38',
    'T_MODULUS' => 'r 38',
    'T_PIPE' => 'r 38',
    'T_COLON' => 'r 38',
    'T_VARIABLE_END' => 'r 38',
    'T_RIGHT_PAREN' => 'r 38',
    'T_RIGHT_BRACKET' => 'r 38',
    'T_RIGHT_BRACE' => 'r 38',
    'T_BLOCK_END' => 'r 38',
  ),
  55 => 
  array (
    'expression' => 's 56',
    'terminal' => 's 59',
    'T_NOT' => 's 60',
    'T_MINUS' => 's 63',
    'T_LEFT_PAREN' => 's 62',
    'T_ID' => 's 65',
    'T_NUMBER' => 's 70',
    'T_SINGLE_QUOTED_STRING' => 's 71',
    'T_DOUBLE_QUOTED_STRING' => 's 72',
  ),
  56 => 
  array (
    'T_OR' => 'r 39',
    'T_XOR' => 'r 39',
    'T_AND' => 'r 39',
    'T_QUESTION' => 'r 39',
    'T_EQ' => 'r 39',
    'T_NE' => 'r 39',
    'T_EX' => 'r 39',
    'T_NX' => 'r 39',
    'T_LT' => 'r 39',
    'T_LE' => 'r 39',
    'T_GT' => 'r 39',
    'T_GE' => 'r 39',
    'T_IN' => 'r 39',
    'T_NOT_IN' => 'r 39',
    'T_INX' => 'r 39',
    'T_NOT_INX' => 'r 39',
    'T_PLUS' => 'r 39',
    'T_MINUS' => 'r 39',
    'T_MULTIPLICATION' => 'r 39',
    'T_DIVISION' => 'r 39',
    'T_MODULUS' => 'r 39',
    'T_PIPE' => 'r 39',
    'T_COLON' => 'r 39',
    'T_VARIABLE_END' => 'r 39',
    'T_RIGHT_PAREN' => 'r 39',
    'T_RIGHT_BRACKET' => 'r 39',
    'T_RIGHT_BRACE' => 'r 39',
    'T_BLOCK_END' => 'r 39',
  ),
  57 => 
  array (
    'expression' => 's 58',
    'terminal' => 's 59',
    'T_NOT' => 's 60',
    'T_MINUS' => 's 63',
    'T_LEFT_PAREN' => 's 62',
    'T_ID' => 's 65',
    'T_NUMBER' => 's 70',
    'T_SINGLE_QUOTED_STRING' => 's 71',
    'T_DOUBLE_QUOTED_STRING' => 's 72',
  ),
  58 => 
  array (
    'T_OR' => 'r 40',
    'T_XOR' => 'r 40',
    'T_AND' => 'r 40',
    'T_QUESTION' => 'r 40',
    'T_EQ' => 'r 40',
    'T_NE' => 'r 40',
    'T_EX' => 'r 40',
    'T_NX' => 'r 40',
    'T_LT' => 'r 40',
    'T_LE' => 'r 40',
    'T_GT' => 'r 40',
    'T_GE' => 'r 40',
    'T_IN' => 'r 40',
    'T_NOT_IN' => 'r 40',
    'T_INX' => 'r 40',
    'T_NOT_INX' => 'r 40',
    'T_PLUS' => 'r 40',
    'T_MINUS' => 'r 40',
    'T_MULTIPLICATION' => 'r 40',
    'T_DIVISION' => 'r 40',
    'T_MODULUS' => 'r 40',
    'T_PIPE' => 'r 40',
    'T_COLON' => 'r 40',
    'T_VARIABLE_END' => 'r 40',
    'T_RIGHT_PAREN' => 'r 40',
    'T_RIGHT_BRACKET' => 'r 40',
    'T_RIGHT_BRACE' => 'r 40',
    'T_BLOCK_END' => 'r 40',
  ),
  59 => 
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
    'T_BLOCK_END' => 'r 41',
  ),
  60 => 
  array (
    'terminal' => 's 61',
    'T_LEFT_PAREN' => 's 62',
    'T_ID' => 's 65',
    'T_NUMBER' => 's 70',
    'T_SINGLE_QUOTED_STRING' => 's 71',
    'T_DOUBLE_QUOTED_STRING' => 's 72',
  ),
  61 => 
  array (
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
    'T_BLOCK_END' => 'r 42',
  ),
  62 => 
  array (
    'expression' => 's 14',
    'terminal' => 's 59',
    'T_NOT' => 's 60',
    'T_MINUS' => 's 63',
    'T_LEFT_PAREN' => 's 62',
    'filtered_expression' => 's 85',
    'T_ID' => 's 65',
    'T_NUMBER' => 's 70',
    'T_SINGLE_QUOTED_STRING' => 's 71',
    'T_DOUBLE_QUOTED_STRING' => 's 72',
  ),
  63 => 
  array (
    'terminal' => 's 64',
    'T_LEFT_PAREN' => 's 62',
    'T_ID' => 's 65',
    'T_NUMBER' => 's 70',
    'T_SINGLE_QUOTED_STRING' => 's 71',
    'T_DOUBLE_QUOTED_STRING' => 's 72',
  ),
  64 => 
  array (
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
    'T_BLOCK_END' => 'r 43',
  ),
  65 => 
  array (
    'array_or_object' => 's 66',
    'T_ARROW' => 'r 51',
    'T_DOT' => 'r 51',
    'T_LEFT_BRACKET' => 'r 51',
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
  ),
  66 => 
  array (
    'array' => 's 67',
    'object' => 's 68',
    'T_LEFT_BRACKET' => 's 69',
    'T_ARROW' => 's 75',
    'T_DOT' => 's 80',
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
    'T_BLOCK_END' => 'r 45',
  ),
  67 => 
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
    'T_BLOCK_END' => 'r 49',
  ),
  68 => 
  array (
    'T_ARROW' => 'r 50',
    'T_DOT' => 'r 50',
    'T_LEFT_BRACKET' => 'r 50',
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
  ),
  69 => 
  array (
    'expression' => 's 14',
    'terminal' => 's 59',
    'T_NOT' => 's 60',
    'T_MINUS' => 's 63',
    'T_LEFT_PAREN' => 's 62',
    'T_ID' => 's 65',
    'T_NUMBER' => 's 70',
    'T_SINGLE_QUOTED_STRING' => 's 71',
    'T_DOUBLE_QUOTED_STRING' => 's 72',
    'filtered_expression' => 's 73',
  ),
  70 => 
  array (
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
    'T_BLOCK_END' => 'r 46',
  ),
  71 => 
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
  ),
  72 => 
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
  ),
  73 => 
  array (
    'T_RIGHT_BRACKET' => 's 74',
  ),
  74 => 
  array (
    'T_ARROW' => 'r 52',
    'T_DOT' => 'r 52',
    'T_LEFT_BRACKET' => 'r 52',
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
  ),
  75 => 
  array (
    'T_LEFT_BRACE' => 's 76',
    'T_ID' => 's 79',
  ),
  76 => 
  array (
    'expression' => 's 14',
    'terminal' => 's 59',
    'T_NOT' => 's 60',
    'T_MINUS' => 's 63',
    'T_LEFT_PAREN' => 's 62',
    'T_ID' => 's 65',
    'T_NUMBER' => 's 70',
    'T_SINGLE_QUOTED_STRING' => 's 71',
    'T_DOUBLE_QUOTED_STRING' => 's 72',
    'filtered_expression' => 's 77',
  ),
  77 => 
  array (
    'T_RIGHT_BRACE' => 's 78',
  ),
  78 => 
  array (
    'T_ARROW' => 'r 53',
    'T_DOT' => 'r 53',
    'T_LEFT_BRACKET' => 'r 53',
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
  ),
  79 => 
  array (
    'T_ARROW' => 'r 55',
    'T_DOT' => 'r 55',
    'T_LEFT_BRACKET' => 'r 55',
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
  ),
  80 => 
  array (
    'T_LEFT_BRACE' => 's 81',
    'T_ID' => 's 84',
  ),
  81 => 
  array (
    'expression' => 's 14',
    'terminal' => 's 59',
    'T_NOT' => 's 60',
    'T_MINUS' => 's 63',
    'T_LEFT_PAREN' => 's 62',
    'T_ID' => 's 65',
    'T_NUMBER' => 's 70',
    'T_SINGLE_QUOTED_STRING' => 's 71',
    'T_DOUBLE_QUOTED_STRING' => 's 72',
    'filtered_expression' => 's 82',
  ),
  82 => 
  array (
    'T_RIGHT_BRACE' => 's 83',
  ),
  83 => 
  array (
    'T_ARROW' => 'r 54',
    'T_DOT' => 'r 54',
    'T_LEFT_BRACKET' => 'r 54',
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
  ),
  84 => 
  array (
    'T_ARROW' => 'r 56',
    'T_DOT' => 'r 56',
    'T_LEFT_BRACKET' => 'r 56',
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
  ),
  85 => 
  array (
    'T_RIGHT_PAREN' => 's 86',
  ),
  86 => 
  array (
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
    'T_BLOCK_END' => 'r 44',
  ),
  87 => 
  array (
    'T_PIPE' => 's 88',
    'T_VARIABLE_END' => 'r 57',
    'T_RIGHT_PAREN' => 'r 57',
    'T_RIGHT_BRACKET' => 'r 57',
    'T_RIGHT_BRACE' => 'r 57',
    'T_BLOCK_END' => 'r 57',
  ),
  88 => 
  array (
    'T_ID' => 's 89',
  ),
  89 => 
  array (
    'parameters' => 's 90',
    'T_COLON' => 'r 61',
    'T_PIPE' => 'r 61',
    'T_VARIABLE_END' => 'r 61',
    'T_RIGHT_PAREN' => 'r 61',
    'T_RIGHT_BRACKET' => 'r 61',
    'T_RIGHT_BRACE' => 'r 61',
    'T_BLOCK_END' => 'r 61',
  ),
  90 => 
  array (
    'T_COLON' => 's 91',
    'T_PIPE' => 'r 58',
    'T_VARIABLE_END' => 'r 58',
    'T_RIGHT_PAREN' => 'r 58',
    'T_RIGHT_BRACKET' => 'r 58',
    'T_RIGHT_BRACE' => 'r 58',
    'T_BLOCK_END' => 'r 58',
  ),
  91 => 
  array (
    'expression' => 's 92',
    'terminal' => 's 59',
    'T_NOT' => 's 60',
    'T_MINUS' => 's 63',
    'T_LEFT_PAREN' => 's 62',
    'T_ID' => 's 65',
    'T_NUMBER' => 's 70',
    'T_SINGLE_QUOTED_STRING' => 's 71',
    'T_DOUBLE_QUOTED_STRING' => 's 72',
  ),
  92 => 
  array (
    'T_OR' => 's 15',
    'T_XOR' => 's 17',
    'T_AND' => 's 19',
    'T_QUESTION' => 's 21',
    'T_EQ' => 's 25',
    'T_NE' => 's 27',
    'T_EX' => 's 29',
    'T_NX' => 's 31',
    'T_LT' => 's 33',
    'T_LE' => 's 35',
    'T_GT' => 's 37',
    'T_GE' => 's 39',
    'T_IN' => 's 41',
    'T_NOT_IN' => 's 43',
    'T_INX' => 's 45',
    'T_NOT_INX' => 's 47',
    'T_PLUS' => 's 49',
    'T_MINUS' => 's 51',
    'T_MULTIPLICATION' => 's 53',
    'T_DIVISION' => 's 55',
    'T_MODULUS' => 's 57',
    'T_COLON' => 'r 60',
    'T_PIPE' => 'r 60',
    'T_VARIABLE_END' => 'r 60',
    'T_RIGHT_PAREN' => 'r 60',
    'T_RIGHT_BRACKET' => 'r 60',
    'T_RIGHT_BRACE' => 'r 60',
    'T_BLOCK_END' => 'r 60',
  ),
  93 => 
  array (
    'blocks' => 's 94',
    'T_BLOCK' => 's 95',
    'T_IF' => 's 104',
    'T_COMMENT' => 's 109',
  ),
  94 => 
  array (
    'T_HTML' => 'r 10',
    'T_EXTENDS' => 'r 10',
    'T_VARIABLE_START' => 'r 10',
    'T_BLOCK_START' => 'r 10',
    '#' => 'r 10',
  ),
  95 => 
  array (
    'T_ID' => 's 96',
  ),
  96 => 
  array (
    'T_BLOCK_END' => 's 97',
  ),
  97 => 
  array (
    'statements' => 's 98',
    'T_BLOCK_START' => 'r 1',
    'T_HTML' => 'r 1',
    'T_EXTENDS' => 'r 1',
    'T_VARIABLE_START' => 'r 1',
  ),
  98 => 
  array (
    'statement' => 's 2',
    'T_HTML' => 's 3',
    'T_EXTENDS' => 's 4',
    'T_VARIABLE_START' => 's 11',
    'T_BLOCK_START' => 's 99',
  ),
  99 => 
  array (
    'blocks' => 's 94',
    'T_BLOCK' => 's 95',
    'T_ENDBLOCK' => 's 100',
    'T_IF' => 's 104',
    'T_COMMENT' => 's 109',
  ),
  100 => 
  array (
    'T_ID' => 's 101',
    'id_or_void' => 's 102',
    'T_BLOCK_END' => 'r 6',
  ),
  101 => 
  array (
    'T_BLOCK_END' => 'r 5',
  ),
  102 => 
  array (
    'T_BLOCK_END' => 's 103',
  ),
  103 => 
  array (
    'T_HTML' => 'r 11',
    'T_EXTENDS' => 'r 11',
    'T_VARIABLE_START' => 'r 11',
    'T_BLOCK_START' => 'r 11',
    '#' => 'r 11',
  ),
  104 => 
  array (
    'filtered_expression' => 's 105',
    'expression' => 's 14',
    'terminal' => 's 59',
    'T_NOT' => 's 60',
    'T_MINUS' => 's 63',
    'T_LEFT_PAREN' => 's 62',
    'T_ID' => 's 65',
    'T_NUMBER' => 's 70',
    'T_SINGLE_QUOTED_STRING' => 's 71',
    'T_DOUBLE_QUOTED_STRING' => 's 72',
  ),
  105 => 
  array (
    'T_BLOCK_END' => 's 106',
  ),
  106 => 
  array (
    'statements' => 's 107',
    'elseif' => 's 128',
    'else' => 's 120',
    'T_BLOCK_START' => 'r 1',
    'T_HTML' => 'r 1',
    'T_EXTENDS' => 'r 1',
    'T_VARIABLE_START' => 'r 1',
  ),
  107 => 
  array (
    'statement' => 's 2',
    'T_HTML' => 's 3',
    'T_EXTENDS' => 's 4',
    'T_VARIABLE_START' => 's 11',
    'T_BLOCK_START' => 's 108',
  ),
  108 => 
  array (
    'blocks' => 's 94',
    'T_BLOCK' => 's 95',
    'T_IF' => 's 104',
    'T_COMMENT' => 's 109',
    'T_ELSE' => 's 115',
    'T_ENDIF' => 's 126',
  ),
  109 => 
  array (
    'T_BLOCK_END' => 's 110',
  ),
  110 => 
  array (
    'statements' => 's 111',
    'T_BLOCK_START' => 'r 1',
    'T_HTML' => 'r 1',
    'T_EXTENDS' => 'r 1',
    'T_VARIABLE_START' => 'r 1',
  ),
  111 => 
  array (
    'statement' => 's 2',
    'T_HTML' => 's 3',
    'T_EXTENDS' => 's 4',
    'T_VARIABLE_START' => 's 11',
    'T_BLOCK_START' => 's 112',
  ),
  112 => 
  array (
    'blocks' => 's 94',
    'T_BLOCK' => 's 95',
    'T_IF' => 's 104',
    'T_COMMENT' => 's 109',
    'T_ENDCOMMENT' => 's 113',
  ),
  113 => 
  array (
    'T_BLOCK_END' => 's 114',
  ),
  114 => 
  array (
    'T_HTML' => 'r 13',
    'T_EXTENDS' => 'r 13',
    'T_VARIABLE_START' => 'r 13',
    'T_BLOCK_START' => 'r 13',
    '#' => 'r 13',
  ),
  115 => 
  array (
    'T_IF' => 's 116',
    'T_BLOCK_END' => 's 121',
  ),
  116 => 
  array (
    'filtered_expression' => 's 117',
    'expression' => 's 14',
    'terminal' => 's 59',
    'T_NOT' => 's 60',
    'T_MINUS' => 's 63',
    'T_LEFT_PAREN' => 's 62',
    'T_ID' => 's 65',
    'T_NUMBER' => 's 70',
    'T_SINGLE_QUOTED_STRING' => 's 71',
    'T_DOUBLE_QUOTED_STRING' => 's 72',
  ),
  117 => 
  array (
    'T_BLOCK_END' => 's 118',
  ),
  118 => 
  array (
    'statements' => 's 107',
    'elseif' => 's 119',
    'else' => 's 120',
    'T_BLOCK_START' => 'r 1',
    'T_HTML' => 'r 1',
    'T_EXTENDS' => 'r 1',
    'T_VARIABLE_START' => 'r 1',
  ),
  119 => 
  array (
    'T_HTML' => 'r 14',
    'T_EXTENDS' => 'r 14',
    'T_VARIABLE_START' => 'r 14',
    'T_BLOCK_START' => 'r 14',
    '#' => 'r 14',
  ),
  120 => 
  array (
    'T_HTML' => 'r 15',
    'T_EXTENDS' => 'r 15',
    'T_VARIABLE_START' => 'r 15',
    'T_BLOCK_START' => 'r 15',
    '#' => 'r 15',
  ),
  121 => 
  array (
    'statements' => 's 122',
    'T_BLOCK_START' => 'r 1',
    'T_HTML' => 'r 1',
    'T_EXTENDS' => 'r 1',
    'T_VARIABLE_START' => 'r 1',
  ),
  122 => 
  array (
    'statement' => 's 2',
    'T_HTML' => 's 3',
    'T_EXTENDS' => 's 4',
    'T_VARIABLE_START' => 's 11',
    'T_BLOCK_START' => 's 123',
  ),
  123 => 
  array (
    'blocks' => 's 94',
    'T_BLOCK' => 's 95',
    'T_IF' => 's 104',
    'T_COMMENT' => 's 109',
    'T_ENDIF' => 's 124',
  ),
  124 => 
  array (
    'T_BLOCK_END' => 's 125',
  ),
  125 => 
  array (
    'T_HTML' => 'r 16',
    'T_EXTENDS' => 'r 16',
    'T_VARIABLE_START' => 'r 16',
    'T_BLOCK_START' => 'r 16',
    '#' => 'r 16',
  ),
  126 => 
  array (
    'T_BLOCK_END' => 's 127',
  ),
  127 => 
  array (
    'T_HTML' => 'r 17',
    'T_EXTENDS' => 'r 17',
    'T_VARIABLE_START' => 'r 17',
    'T_BLOCK_START' => 'r 17',
    '#' => 'r 17',
  ),
  128 => 
  array (
    'T_HTML' => 'r 12',
    'T_EXTENDS' => 'r 12',
    'T_VARIABLE_START' => 'r 12',
    'T_BLOCK_START' => 'r 12',
    '#' => 'r 12',
  ),
);
function reduce_0_statements_1($tokens, &$result) {
#
# (0) statements :=  statements  statement
#
$result = reset($tokens);
 echo $tokens[1]; 
}

function reduce_1_statements_2($tokens, &$result) {
#
# (1) statements :=
#
$result = reset($tokens);
 $result = array(); 
}

function reduce_2_id_or_string_1($tokens, &$result) {
#
# (2) id_or_string :=  T_ID
#
$result = reset($tokens);

}

function reduce_3_id_or_string_2($tokens, &$result) {
#
# (3) id_or_string :=  T_SINGLE_QUOTED_STRING
#
$result = reset($tokens);

}

function reduce_4_id_or_string_3($tokens, &$result) {
#
# (4) id_or_string :=  T_DOUBLE_QUOTED_STRING
#
$result = reset($tokens);

}

function reduce_5_id_or_void_1($tokens, &$result) {
#
# (5) id_or_void :=  T_ID
#
$result = reset($tokens);

}

function reduce_6_id_or_void_2($tokens, &$result) {
#
# (6) id_or_void :=
#
$result = reset($tokens);

}

function reduce_7_statement_1($tokens, &$result) {
#
# (7) statement :=  T_HTML
#
$result = reset($tokens);
 $result = NULL; 
}

function reduce_8_statement_2($tokens, &$result) {
#
# (8) statement :=  T_EXTENDS  id_or_string  T_BLOCK_END  statements
#
$result = reset($tokens);
 echo 'extends '.$tokens[2]."\n"; foreach($tokens[4] as $c) echo $c; 
}

function reduce_9_statement_3($tokens, &$result) {
#
# (9) statement :=  T_VARIABLE_START  filtered_expression  T_VARIABLE_END
#
$result = reset($tokens);
 $result = NULL; 
}

function reduce_10_statement_4($tokens, &$result) {
#
# (10) statement :=  T_BLOCK_START  blocks
#
$result = reset($tokens);
 $result = $tokens[1]; 
}

function reduce_11_blocks_1($tokens, &$result) {
#
# (11) blocks :=  T_BLOCK  T_ID  T_BLOCK_END  statements  T_BLOCK_START  T_ENDBLOCK  id_or_void  T_BLOCK_END
#
$result = reset($tokens);
 $result = NULL; 
}

function reduce_12_blocks_2($tokens, &$result) {
#
# (12) blocks :=  T_IF  filtered_expression  T_BLOCK_END  elseif
#
$result = reset($tokens);
 $result = NULL; 
}

function reduce_13_blocks_3($tokens, &$result) {
#
# (13) blocks :=  T_COMMENT  T_BLOCK_END  statements  T_BLOCK_START  T_ENDCOMMENT  T_BLOCK_END
#
$result = reset($tokens);
 $result = NULL; 
}

function reduce_14_elseif_1($tokens, &$result) {
#
# (14) elseif :=  statements  T_BLOCK_START  T_ELSE  T_IF  filtered_expression  T_BLOCK_END  elseif
#
$result = reset($tokens);

}

function reduce_15_elseif_2($tokens, &$result) {
#
# (15) elseif :=  else
#
$result = reset($tokens);

}

function reduce_16_else_1($tokens, &$result) {
#
# (16) else :=  statements  T_BLOCK_START  T_ELSE  T_BLOCK_END  statements  T_BLOCK_START  T_ENDIF  T_BLOCK_END
#
$result = reset($tokens);

}

function reduce_17_else_2($tokens, &$result) {
#
# (17) else :=  statements  T_BLOCK_START  T_ENDIF  T_BLOCK_END
#
$result = reset($tokens);

}

function reduce_18_end_block_1($tokens, &$result) {
#
# (18) end_block :=  T_ID
#
$result = reset($tokens);

}

function reduce_19_end_block_2($tokens, &$result) {
#
# (19) end_block :=
#
$result = reset($tokens);
 $result = NULL; 
}

function reduce_20_expression_1($tokens, &$result) {
#
# (20) expression :=  expression  T_OR  expression
#
$result = reset($tokens);
 $result = $tokens[0].'||'.$tokens[2]; 
}

function reduce_21_expression_2($tokens, &$result) {
#
# (21) expression :=  expression  T_XOR  expression
#
$result = reset($tokens);
 $result = $tokens[0].' XOR '.$tokens[2]; 
}

function reduce_22_expression_3($tokens, &$result) {
#
# (22) expression :=  expression  T_AND  expression
#
$result = reset($tokens);
 $result = $tokens[0].'&&'.$tokens[2]; 
}

function reduce_23_expression_4($tokens, &$result) {
#
# (23) expression :=  expression  T_QUESTION  expression  T_COLON  expression
#
$result = reset($tokens);
 $result = $tokens[0].'?'.$tokens[2].':'.$tokens[4]; 
}

function reduce_24_expression_5($tokens, &$result) {
#
# (24) expression :=  expression  T_EQ  expression
#
$result = reset($tokens);
 $result = $tokens[0].'=='.$tokens[2]; 
}

function reduce_25_expression_6($tokens, &$result) {
#
# (25) expression :=  expression  T_NE  expression
#
$result = reset($tokens);
 $result = $tokens[0].'!='.$tokens[2]; 
}

function reduce_26_expression_7($tokens, &$result) {
#
# (26) expression :=  expression  T_EX  expression
#
$result = reset($tokens);
 $result = $tokens[0].'==='.$tokens[2]; 
}

function reduce_27_expression_8($tokens, &$result) {
#
# (27) expression :=  expression  T_NX  expression
#
$result = reset($tokens);
 $result = $tokens[0].'!=='.$tokens[2]; 
}

function reduce_28_expression_9($tokens, &$result) {
#
# (28) expression :=  expression  T_LT  expression
#
$result = reset($tokens);
 $result = $tokens[0].'<'.$tokens[2]; 
}

function reduce_29_expression_10($tokens, &$result) {
#
# (29) expression :=  expression  T_LE  expression
#
$result = reset($tokens);
 $result = $tokens[0].'<='.$tokens[2]; 
}

function reduce_30_expression_11($tokens, &$result) {
#
# (30) expression :=  expression  T_GT  expression
#
$result = reset($tokens);
 $result = $tokens[0].'>'.$tokens[2]; 
}

function reduce_31_expression_12($tokens, &$result) {
#
# (31) expression :=  expression  T_GE  expression
#
$result = reset($tokens);
 $result = $tokens[0].'>='.$tokens[2]; 
}

function reduce_32_expression_13($tokens, &$result) {
#
# (32) expression :=  expression  T_IN  expression
#
$result = reset($tokens);
 $result = '(is_array('.$tokens[2].')?in_array('.$tokens[0].', '.$tokens[2].'):FALSE!==strpos('.$tokens[2].', '.$tokens[0].'))'; 
}

function reduce_33_expression_14($tokens, &$result) {
#
# (33) expression :=  expression  T_NOT_IN  expression
#
$result = reset($tokens);
 $result = '(is_array('.$tokens[2].')?!in_array('.$tokens[0].', '.$tokens[2].'):FALSE===strpos('.$tokens[2].', '.$tokens[0].'))'; 
}

function reduce_34_expression_15($tokens, &$result) {
#
# (34) expression :=  expression  T_INX  expression
#
$result = reset($tokens);
 $result = '(is_array('.$tokens[2].')?in_array('.$tokens[0].', '.$tokens[2].', TRUE):FALSE!==strpos('.$tokens[2].', '.$tokens[0].'))'; 
}

function reduce_35_expression_16($tokens, &$result) {
#
# (35) expression :=  expression  T_NOT_INX  expression
#
$result = reset($tokens);
 $result = '(is_array('.$tokens[2].')?!in_array('.$tokens[0].', '.$tokens[2].', TRUE):FALSE===strpos('.$tokens[2].', '.$tokens[0].'))'; 
}

function reduce_36_expression_17($tokens, &$result) {
#
# (36) expression :=  expression  T_PLUS  expression
#
$result = reset($tokens);
 $result = $tokens[0].'+'.$tokens[2]; 
}

function reduce_37_expression_18($tokens, &$result) {
#
# (37) expression :=  expression  T_MINUS  expression
#
$result = reset($tokens);
 $result = $tokens[0].'-'.$tokens[2]; 
}

function reduce_38_expression_19($tokens, &$result) {
#
# (38) expression :=  expression  T_MULTIPLICATION  expression
#
$result = reset($tokens);
 $result = $tokens[0].'*'.$tokens[2]; 
}

function reduce_39_expression_20($tokens, &$result) {
#
# (39) expression :=  expression  T_DIVISION  expression
#
$result = reset($tokens);
 $result = $tokens[0].'/'.$tokens[2]; 
}

function reduce_40_expression_21($tokens, &$result) {
#
# (40) expression :=  expression  T_MODULUS  expression
#
$result = reset($tokens);
 $result = $tokens[0].'%'.$tokens[2]; 
}

function reduce_41_expression_22($tokens, &$result) {
#
# (41) expression :=  terminal
#
$result = reset($tokens);

}

function reduce_42_expression_23($tokens, &$result) {
#
# (42) expression :=  T_NOT  terminal
#
$result = reset($tokens);
 $result = '!'.$tokens[1]; 
}

function reduce_43_expression_24($tokens, &$result) {
#
# (43) expression :=  T_MINUS  terminal
#
$result = reset($tokens);
 $result = '-'.$tokens[1]; 
}

function reduce_44_terminal_1($tokens, &$result) {
#
# (44) terminal :=  T_LEFT_PAREN  filtered_expression  T_RIGHT_PAREN
#
$result = reset($tokens);
 $result = $tokens[1]; 
}

function reduce_45_terminal_2($tokens, &$result) {
#
# (45) terminal :=  T_ID  array_or_object
#
$result = reset($tokens);
 $result = '$'.$tokens[0].$tokens[1]; 
}

function reduce_46_terminal_3($tokens, &$result) {
#
# (46) terminal :=  T_NUMBER
#
$result = reset($tokens);

}

function reduce_47_terminal_4($tokens, &$result) {
#
# (47) terminal :=  T_SINGLE_QUOTED_STRING
#
$result = reset($tokens);

}

function reduce_48_terminal_5($tokens, &$result) {
#
# (48) terminal :=  T_DOUBLE_QUOTED_STRING
#
$result = reset($tokens);

}

function reduce_49_array_or_object_1($tokens, &$result) {
#
# (49) array_or_object :=  array_or_object  array
#
$result = reset($tokens);
 $result = $tokens[0].$tokens[1]; 
}

function reduce_50_array_or_object_2($tokens, &$result) {
#
# (50) array_or_object :=  array_or_object  object
#
$result = reset($tokens);
 $result = $tokens[0].$tokens[1]; 
}

function reduce_51_array_or_object_3($tokens, &$result) {
#
# (51) array_or_object :=
#
$result = reset($tokens);
 $result = ''; 
}

function reduce_52_array_1($tokens, &$result) {
#
# (52) array :=  T_LEFT_BRACKET  filtered_expression  T_RIGHT_BRACKET
#
$result = reset($tokens);
 $result = '['.$tokens[1].']'; 
}

function reduce_53_object_1($tokens, &$result) {
#
# (53) object :=  T_ARROW  T_LEFT_BRACE  filtered_expression  T_RIGHT_BRACE
#
$result = reset($tokens);
 $result = '->{'.$tokens[2].'}'; 
}

function reduce_54_object_2($tokens, &$result) {
#
# (54) object :=  T_DOT  T_LEFT_BRACE  filtered_expression  T_RIGHT_BRACE
#
$result = reset($tokens);
 $result = '->{'.$tokens[2].'}'; 
}

function reduce_55_object_3($tokens, &$result) {
#
# (55) object :=  T_ARROW  T_ID
#
$result = reset($tokens);
 $result = '->'.$tokens[1]; 
}

function reduce_56_object_4($tokens, &$result) {
#
# (56) object :=  T_DOT  T_ID
#
$result = reset($tokens);
 $result = '->'.$tokens[1]; 
}

function reduce_57_filtered_expression_1($tokens, &$result) {
#
# (57) filtered_expression :=  expression  filters
#
$result = reset($tokens);
 $result = $this->_parse_filtered_expression($tokens[0], $tokens[1]); 
}

function reduce_58_filters_1($tokens, &$result) {
#
# (58) filters :=  filters  T_PIPE  T_ID  parameters
#
$result = reset($tokens);
 $tokens[0][] = array('name' => $tokens[2], 'parameters' => $tokens[3]); $result = $tokens[0]; 
}

function reduce_59_filters_2($tokens, &$result) {
#
# (59) filters :=
#
$result = reset($tokens);
 $result = array(); 
}

function reduce_60_parameters_1($tokens, &$result) {
#
# (60) parameters :=  parameters  T_COLON  expression
#
$result = reset($tokens);
 $tokens[0][] = $tokens[2]; $result = $tokens[0]; 
}

function reduce_61_parameters_2($tokens, &$result) {
#
# (61) parameters :=
#
$result = reset($tokens);
 $result = array(); 
}

function reduce_62_start_1($tokens, &$result) {
#
# (62) 'start' :=  statements
#
$result = reset($tokens);

}

var $method = array (
  0 => 'reduce_0_statements_1',
  1 => 'reduce_1_statements_2',
  2 => 'reduce_2_id_or_string_1',
  3 => 'reduce_3_id_or_string_2',
  4 => 'reduce_4_id_or_string_3',
  5 => 'reduce_5_id_or_void_1',
  6 => 'reduce_6_id_or_void_2',
  7 => 'reduce_7_statement_1',
  8 => 'reduce_8_statement_2',
  9 => 'reduce_9_statement_3',
  10 => 'reduce_10_statement_4',
  11 => 'reduce_11_blocks_1',
  12 => 'reduce_12_blocks_2',
  13 => 'reduce_13_blocks_3',
  14 => 'reduce_14_elseif_1',
  15 => 'reduce_15_elseif_2',
  16 => 'reduce_16_else_1',
  17 => 'reduce_17_else_2',
  18 => 'reduce_18_end_block_1',
  19 => 'reduce_19_end_block_2',
  20 => 'reduce_20_expression_1',
  21 => 'reduce_21_expression_2',
  22 => 'reduce_22_expression_3',
  23 => 'reduce_23_expression_4',
  24 => 'reduce_24_expression_5',
  25 => 'reduce_25_expression_6',
  26 => 'reduce_26_expression_7',
  27 => 'reduce_27_expression_8',
  28 => 'reduce_28_expression_9',
  29 => 'reduce_29_expression_10',
  30 => 'reduce_30_expression_11',
  31 => 'reduce_31_expression_12',
  32 => 'reduce_32_expression_13',
  33 => 'reduce_33_expression_14',
  34 => 'reduce_34_expression_15',
  35 => 'reduce_35_expression_16',
  36 => 'reduce_36_expression_17',
  37 => 'reduce_37_expression_18',
  38 => 'reduce_38_expression_19',
  39 => 'reduce_39_expression_20',
  40 => 'reduce_40_expression_21',
  41 => 'reduce_41_expression_22',
  42 => 'reduce_42_expression_23',
  43 => 'reduce_43_expression_24',
  44 => 'reduce_44_terminal_1',
  45 => 'reduce_45_terminal_2',
  46 => 'reduce_46_terminal_3',
  47 => 'reduce_47_terminal_4',
  48 => 'reduce_48_terminal_5',
  49 => 'reduce_49_array_or_object_1',
  50 => 'reduce_50_array_or_object_2',
  51 => 'reduce_51_array_or_object_3',
  52 => 'reduce_52_array_1',
  53 => 'reduce_53_object_1',
  54 => 'reduce_54_object_2',
  55 => 'reduce_55_object_3',
  56 => 'reduce_56_object_4',
  57 => 'reduce_57_filtered_expression_1',
  58 => 'reduce_58_filters_1',
  59 => 'reduce_59_filters_2',
  60 => 'reduce_60_parameters_1',
  61 => 'reduce_61_parameters_2',
  62 => 'reduce_62_start_1',
);
var $a = array (
  0 => 
  array (
    'symbol' => 'statements',
    'len' => 2,
    'replace' => true,
  ),
  1 => 
  array (
    'symbol' => 'statements',
    'len' => 0,
    'replace' => true,
  ),
  2 => 
  array (
    'symbol' => 'id_or_string',
    'len' => 1,
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
    'symbol' => 'id_or_void',
    'len' => 1,
    'replace' => true,
  ),
  6 => 
  array (
    'symbol' => 'id_or_void',
    'len' => 0,
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
    'len' => 4,
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
    'len' => 2,
    'replace' => true,
  ),
  11 => 
  array (
    'symbol' => 'blocks',
    'len' => 8,
    'replace' => true,
  ),
  12 => 
  array (
    'symbol' => 'blocks',
    'len' => 4,
    'replace' => true,
  ),
  13 => 
  array (
    'symbol' => 'blocks',
    'len' => 6,
    'replace' => true,
  ),
  14 => 
  array (
    'symbol' => 'elseif',
    'len' => 7,
    'replace' => true,
  ),
  15 => 
  array (
    'symbol' => 'elseif',
    'len' => 1,
    'replace' => true,
  ),
  16 => 
  array (
    'symbol' => 'else',
    'len' => 8,
    'replace' => true,
  ),
  17 => 
  array (
    'symbol' => 'else',
    'len' => 4,
    'replace' => true,
  ),
  18 => 
  array (
    'symbol' => 'end_block',
    'len' => 1,
    'replace' => true,
  ),
  19 => 
  array (
    'symbol' => 'end_block',
    'len' => 0,
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
    'len' => 5,
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
    'len' => 1,
    'replace' => true,
  ),
  42 => 
  array (
    'symbol' => 'expression',
    'len' => 2,
    'replace' => true,
  ),
  43 => 
  array (
    'symbol' => 'expression',
    'len' => 2,
    'replace' => true,
  ),
  44 => 
  array (
    'symbol' => 'terminal',
    'len' => 3,
    'replace' => true,
  ),
  45 => 
  array (
    'symbol' => 'terminal',
    'len' => 2,
    'replace' => true,
  ),
  46 => 
  array (
    'symbol' => 'terminal',
    'len' => 1,
    'replace' => true,
  ),
  47 => 
  array (
    'symbol' => 'terminal',
    'len' => 1,
    'replace' => true,
  ),
  48 => 
  array (
    'symbol' => 'terminal',
    'len' => 1,
    'replace' => true,
  ),
  49 => 
  array (
    'symbol' => 'array_or_object',
    'len' => 2,
    'replace' => true,
  ),
  50 => 
  array (
    'symbol' => 'array_or_object',
    'len' => 2,
    'replace' => true,
  ),
  51 => 
  array (
    'symbol' => 'array_or_object',
    'len' => 0,
    'replace' => true,
  ),
  52 => 
  array (
    'symbol' => 'array',
    'len' => 3,
    'replace' => true,
  ),
  53 => 
  array (
    'symbol' => 'object',
    'len' => 4,
    'replace' => true,
  ),
  54 => 
  array (
    'symbol' => 'object',
    'len' => 4,
    'replace' => true,
  ),
  55 => 
  array (
    'symbol' => 'object',
    'len' => 2,
    'replace' => true,
  ),
  56 => 
  array (
    'symbol' => 'object',
    'len' => 2,
    'replace' => true,
  ),
  57 => 
  array (
    'symbol' => 'filtered_expression',
    'len' => 2,
    'replace' => true,
  ),
  58 => 
  array (
    'symbol' => 'filters',
    'len' => 4,
    'replace' => true,
  ),
  59 => 
  array (
    'symbol' => 'filters',
    'len' => 0,
    'replace' => true,
  ),
  60 => 
  array (
    'symbol' => 'parameters',
    'len' => 3,
    'replace' => true,
  ),
  61 => 
  array (
    'symbol' => 'parameters',
    'len' => 0,
    'replace' => true,
  ),
  62 => 
  array (
    'symbol' => '\'start\'',
    'len' => 1,
    'replace' => true,
  ),
);
}
