<?php

/* Static methods can also be called from methods in other classes. 
To do this, the static method can't be private*/

class A {
   public static function welcome() {
    echo "Hello World!";
  }
}

class B {
    function message() {
    A::welcome();
  }
}

$obj = new B();
echo $obj -> message();