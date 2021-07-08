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
 
 $number = readline('insert number: ');
 
 $prime = new Prime();
 
 $factors = $prime->Get_Prime_Factors($number);
 
 if ($factors === []){
  echo 'it is a prime number';
  return;
 }
 
 foreach ($factors as $key => $factor){
  echo $key.'^'.$factor.', ';
 }
 