<?php
/*
 * Write a program to print the below format :
   1 5 9
   2 6 10
   3 7 11
   4 8 12
 * */

 $lineNumber = 9;
 
 $lastNumber = 120;
 
 $stopPoint = (int)($lastNumber / $lineNumber);
 if ($lastNumber % $lineNumber != 0 ){
  $stopPoint++;
 }
 
 $lines = [];

 $current_Number = 1;
 for ($k = 1 ;$k <= $lineNumber ;$k++){
  $lines[$k] = [];
 }
 
 for ($i = 1 ; $i <= $stopPoint  ; $i++) {
  for ($j = 1; $j <= $lineNumber ; $j++) {
   array_push($lines[$j],$current_Number++);
   
   if ($current_Number == $lastNumber+1)
    break 2
   ;
   
   }
 }
 
foreach ($lines as $line){
 foreach ($line as $value){
  echo $value.'  ';
 }
 echo PHP_EOL;
}