<?php
 /*
  * calculating prime 
  */
 // working with Prime Numbers
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

// find in common prime factors
$final = [];
foreach ($num1_factors as $key => $num1_factor){
 if (array_key_exists($key,$num2_factors)){
  if ($num1_factors[$key] <= $num2_factors[$key]){
   $final[$key] = $num1_factors[$key];
  }
  else{
   $final[$key] = $num2_factors[$key];
  }
  
 }
}
// calculate prime factor into actual number
$final_number = 1;
foreach ($final as $key => $item){
  $final_number *= $key ** $item;
}

echo $final_number;
