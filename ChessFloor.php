<?php


 for ($i = 1 ; $i <= 8 ;$i ++){
  
  if ($i % 2 != 0)
   for($j = 1 ;$j <= 8; $j++)
    echo ' #'
  ;
  
  else
   for($j = 1 ;$j <= 8; $j++)
    echo '# '
  ;
  
  
  echo PHP_EOL;
 }