<?php


 $numbers = [6,1,615,65,16,41,68,-4984,6,295,95,95,9,59,5,5,95,5,95];
 
 
 if ($numbers[0] >= $numbers[1] ){
  
  $first_highest = $numbers[0];
  $second_highest = $numbers[1];
 }
 else{
  $first_highest = $numbers[1];
  $second_highest = $numbers[0];
 }
 
 foreach ($numbers as $number){
  if (
   $number > $second_highest
   && $number < $first_highest
  ){
  $second_highest = $number;
  }
  if ($number >= $first_highest ){
   $second_highest = $first_highest;
   $first_highest = $number;
  }
  
 }
 
 echo $second_highest.' '.$first_highest;
 
 
 