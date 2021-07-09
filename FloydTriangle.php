<?php
 /*
  *
    How to write a Floyd's Triangle?
    1
    23
    456
    78910
    1112131415
  */

 
 $counter = 1;
for ($Line_Num = 1; $Line_Num <= 10;$Line_Num++){

 for ($j = 1 ; $j <= $Line_Num ; $j++){
  echo $counter.' ';
  $counter++;
 }
 echo PHP_EOL;

}