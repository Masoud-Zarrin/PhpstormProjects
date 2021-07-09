<?php

 
 $numbers = [98,496,41,964,96,4,984,98,165496,56,2,965,96,5,95];
 
 $smallest = $numbers[0];
 foreach ($numbers as $number)
   if ($number < $smallest)
    $smallest = $number
 ;
 
 echo $smallest;