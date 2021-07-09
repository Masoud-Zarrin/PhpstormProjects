<?php
 class Prime {
  public $Current_Prime = 1;
  // return the next prime number every time needed
  public function Next_Prime(){
   
   for ($i = $this->Current_Prime+1 ;true; $i++ )
    if ($this->Is_Prime($i)){
     $this->Current_Prime = $i;
     return $i;
    }
   
  }
  // finding if the given number is prime
  public function Is_Prime($number){
   
   for ($i = 2 ; $i  < $number ; $i++)
    if ($number % $i == 0){
     return false;
    }
   
   return true;
  }
  
  public function Get_Prime_Factors($number){
   
   // loop for checking every prime number
   $factors = [];
   for ($i = 1;$i<= $number;$i++){
    
    $this->Next_Prime();
    // loop for finding out whether how many prime factor we have for this number
    while (true)
     if ($number % $this->Current_Prime == 0 ){
      
      if (!array_key_exists($this->Current_Prime,$factors))
       $factors[$this->Current_Prime] = 1
       ;
      
      else
       $factors[$this->Current_Prime]++
       ;
      
      // divide number by founded prime factor
      $number = $number / $this->Current_Prime;
      
     }
     else
      break
      ;
    
   }
   return $factors;
  }
 }
 
 
 $prime1 = new Prime();
 $prime2 = new Prime();
 
 $num1 = (int)readline('insert number one: ');
 $num2 = (int)readline('insert number two: ');
 
 $num1_factors = $prime1->Get_Prime_Factors($num1);
 $num2_factors = $prime2->Get_Prime_Factors($num2);
 
 $keys = [];
 foreach ($num1_factors as $key => $value){
 $keys[] = $key;
 }
 foreach ($num2_factors as $key => $value){
  if (!array_key_exists($key,$num1_factors)){
   $keys[] = $key;
  }
 }
 
 $list = [];
 
 foreach ($keys as $i){
  $num1_Key = array_key_exists($i ,$num1_factors);
  $num2_Key = array_key_exists($i,$num2_factors);
  if (
   $num1_Key && $num2_Key
  ){
    if ($num1_factors[$i] >= $num2_factors[$i]){
      $list[$i] = $num1_factors[$i];
    }
    else{
     $list[$i] = $num2_factors[$i];
    }
  }
  else{
     if ($num1_Key){
      $list[$i] = $num1_factors[$i];
     }
     if ($num2_Key){
      $list[$i] = $num2_factors[$i];
     }
  }
  
  
 }
 
 $final_number = 1;
 foreach ($list as $key => $item){
  $final_number *= $key ** $item;
 }
 
 echo $final_number;
 
 
 
 
 