<?php
/*
 * Program to print the below format
 * * * * * * * * * * * * * * *
 * * * * * * * * * * * * *
 * * * * * * * * * * *
 * * * * * * * * *
 * * * * * * *
 * * * * *
 * * *
 * *
 */
 

for ($i = 30; $i >= 0; $i-=2){
 for ($j = 0; $j <= $i ;$j++){
  echo '*';
 }
 echo PHP_EOL;
}