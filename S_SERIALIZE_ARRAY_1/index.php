<?php


include('students.php');



$get_data = file_get_contents('data');

$students = unserialize($get_data);

var_dump($students);