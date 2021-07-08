<?php

 $numbers = [4545,6,16,87498,4,98,98,4,984,98,49,84,65,16,74,51,65,1,1,9,81,9,19,851,9,1,985,19,81,9,1,8,16,51,651,6,516,1,6,16,6,168496,9,84,981,6,84,84,75,68,10];
 $number_count = count($numbers);
 
 while (true){
  
  $flag = true;
  for($i = 0; $i < $number_count - 1 ; $i++)
   if ($numbers[$i] > $numbers[$i+1]){
    $temp = $numbers[$i+1];
    $numbers[$i+1] = $numbers[$i];
    $numbers[$i] = $temp;
    $flag = false;
   }
  
  
  if ($flag)
   break
  ;
  
 }
 
 var_dump($numbers);
 