<?php

include('student.php');


$content = file_get_contents('variable');

$student = unserialize($content);

$student -> greet();