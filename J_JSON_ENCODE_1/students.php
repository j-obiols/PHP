<?php



$students = array("Rohit", "Mayur", "Paresh", "Chetan");

//array to json:
$output = json_encode($students);

echo $output."<br>";

//json to array:
$data = json_decode($output);

print_r($data);