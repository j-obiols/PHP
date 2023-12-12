<?php




$students = array("Rohit", "Mayur", "Paresh", "Chetan");

$serialized_data = serialize($students);

file_put_contents('data', $serialized_data);