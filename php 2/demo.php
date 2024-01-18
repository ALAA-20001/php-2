
<?php 
$str = "hello \n world";
echo nl2br($str);
echo"<br>";


#print_r(array_keys($_SERVER));
foreach($_SERVER as $key=>$value){ echo "$key : $value <br>"};

$array1 = array(12,45,10,25);
$sum = array_sum($arr);
$avg = $sum / count($array1);
echo "sum of array = $sum <br>";
echo "avg of array = $avg <br>";
rsort($array1);



$myArray = array("Sara"=>31, "john"=>41, "Walaa"=>39, "Ramy"=>40);

 asort($myArray); //sort by value ascending
// foreach($myArr as $key=>$value){
//     echo"$value <br>"; }

 ksort($myArray); //sort by key ascending
// foreach($myArr as $key=>$value){
//     echo"$key <br>";}


 arsort($myArray); //sort descending by value
//  foreach($myArr as $key=>$value){
//     echo"$value <br>" }


 krsort($myArray); //sort descending by value

?>