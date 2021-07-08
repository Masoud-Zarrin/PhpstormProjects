<?php
// Write a Program for finding the biggest
// number in an array without using any array functions.

$numbers = range(1,100);

$biggest = 0;

foreach ($numbers as $number){
 if ($biggest <= $number){
  $biggest = $number;
 }
}

echo $biggest;