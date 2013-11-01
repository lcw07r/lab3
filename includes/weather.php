<?php 
$weatherAll = file_get_contents('../info/all.php');
$weatherArray = json_decode($weatherAll, true);
//print_r($weatherAll);
//echo $weatherAll;
var_dump($weatherArray);


?>