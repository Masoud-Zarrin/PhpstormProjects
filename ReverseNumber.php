<?php

 $number = readline('insert number: ');
 // return number into digits
 $digit = str_split($number);
 // make the number reverse
 $reversed_digit = array_reverse($digit);
 // concat reversed array
 $reversed_string = implode($reversed_digit);
 
 echo $reversed_string;