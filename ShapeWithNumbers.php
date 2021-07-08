<?php
/*
 *
  Program to print below format.
  1 2 3 4 5 6 7 8
  1 2 3 4 5 6 7
  1 2 3 4 5 6
  1 2 3 4 5
  1 2 3 4
  1 2 3
  1 2
  1
 */

for ($i = 8; $i > 0; $i--){
 for ($j = 1 ; $j <= $i ; $j++ ){
  echo $j.' ';
 }
 echo PHP_EOL;
}