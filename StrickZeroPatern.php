<?php
 /*
   How to print this Pattern:
   *0
   ***00
   ******000
   **********0000
   ***************00000
  
  
  * */
 $zero_numbers = 1;
 $asterisk_current = 1;
 $asterisk_for_add = 0;
 
for ($i = 1; $i <=15; $i++){
 
 
 $all = $asterisk_current + $asterisk_for_add;
 for ($j = 1 ; $j <=$all ;$j++ )
  echo '*'
 ;
 $asterisk_for_add++;
 $asterisk_current = $j;
 
 
 
 for ($k = 1; $k <= $zero_numbers ;$k++)
  echo '0'
 ;
 $zero_numbers++;
 
 
 echo PHP_EOL;
 
}