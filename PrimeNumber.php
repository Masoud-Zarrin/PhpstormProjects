<?php

 $number = (int)readline('insert number: ');
 
 if ($number == 1){
  echo 'number is not prime nor composite';
  return;
 }
 
 
 if ($number % 2 == 0){
  echo 'number is not prime aa';
  return;
 }
 
 
 for ($i = 3 ; $i  < $number ; $i++)
 if ($number % $i == 0){
  echo 'number is not prime';
  return;
 }
 
 echo 'number is prime';