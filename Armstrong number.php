<?php
 /*
  * calculating whether the given number is Armstrong
  */
 $number = readline('insert number: ');
 // store every digit in an array
 $digits = str_split($number);
 
 $number = (int)$number;
 // calculate as the armstrong formula
 $result = 0;
 foreach ($digits as $item)
  $result += (int)$item ** 3
 ;


 if ($result === $number)
  echo 'Number is Armstrong'
 ;

 else
  echo 'Number is not Armstrong'
 ;

