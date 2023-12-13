<?php


class Student
{
    public $name;

    public function __construct($name){
        $this -> name = $name;
    }

    public function greet() {
       echo "Hello ".$this -> name."!";
    }
}