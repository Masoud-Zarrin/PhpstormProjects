<?php


 $str1 = readline('insert1: ');
 $str2 = readline('insert2: ');
 
 
 $str1Chars = str_split($str1);
 $str2Chars = str_split($str2);
 
 $str1Count = count($str1Chars);
 $str2Count = count($str2Chars);
 
 $new = [];
 
 for ($i = 0 ;; $i++){
 $str1Flag = true;
 $str2Flag = true;
  if (array_key_exists($i,$str1Chars)){
   array_push($new,$str1Chars[$i]);
   $str1Flag = false;
  }
  if (array_key_exists($i,$str2Chars)){
   array_push($new,$str2Chars[$i]);
   $str2Flag = false;
  }
  
  if ($str1Flag && $str2Flag){
   break;
  }
 
 }
 
 
 $result = implode($new);
 
 echo $result;
 
 