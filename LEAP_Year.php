<?php
 $my_year = readline('insert year: ');
 
 if ($my_year % 4 == 0 || $my_year % 400 == 0)
  print("It is a leap year")
 ;
 else if ($my_year % 100 == 0)
  print("It is not a leap year")
 ;
 else
  print("It is not a leap year")
 ;
 
 