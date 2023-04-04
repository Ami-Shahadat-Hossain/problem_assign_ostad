<?php
//Sort array in ascending order by their length
$a=array('food', 'vegetables', 'cow', 'juice', 'standard', 'fish');
usort($a,function ($a, $b){
  return strlen($a)-strlen($b);
});
print_r($a);

//Concating two strings but second string started from the end
$i="Concating the first string with ";
$j=" The second string";
$k=strrev($j);
echo $i.$k;

//Removing first & last element of an array
$array=array('food', 'vegetables', 'cow', 'juice', 'standard', 'fish');
$new_array=(array_slice($array,1,4,true));
echo"\n";
print_r($new_array);

//Check strings contains only letters and whitespace
$text="009113133131";
 if(!preg_match("#^[a-zA-Z0-9]+$#",$text)){
  echo "String also contains characters \n";
 }else{
  echo "String only contains numbers and letters \n";
 }

//Find second largest number of an array
 $arr=array('food', 'vegetables', 'cow', 'juice', 'standard', 'fish');
 function secondHighest(array $arr){
  sort($arr);
  echo "Second highest number is => ".$arr[sizeof($arr)-2];
 }
 secondHighest(array(40,20,78,65,12,10,100,99));



