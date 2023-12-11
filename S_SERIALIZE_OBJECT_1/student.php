<?php


class Student 
{

    public $name;

    public function __construct($name) {
        $this -> name = $name;
    }

    public function hello() {
       echo "Hello ".$this -> name."!";
    }

}

$rohit = new Student("Rohit");

$rohit_sz= serialize($rohit);

//or: fopen() + fwrite() + fclose()
file_put_contents('variable', $rohit_sz); 