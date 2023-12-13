<?php

include('student.php');



$rohit = new Student("Rohit");
$rohit -> greet();

$rohit_sz= serialize($rohit);
file_put_contents('variable', $rohit_sz); 