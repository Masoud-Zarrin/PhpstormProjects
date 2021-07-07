<?php
 /*
  * printing fibonacci series
  */
 
$number = 10; // the number of sentence in fibonacci
$fibo = [1,1,];

for($i= 2;$i<$number;$i++){
 $fibo[$i] = $fibo[$i-1] + $fibo[$i-2];
}

foreach($fibo as $item){
 echo $item.', ';
}
