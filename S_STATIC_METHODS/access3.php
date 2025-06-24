<?php

/* To call a static method from a child class, use the parent keyword inside the child class. 
Here, the static method can be public or protected.*/


class Polygon {
   protected static function presentation() {
    return "I am a polygon.";
  }
}

class Triangle extends Polygon {
  public $firstWords;
  public function __construct() {
    $this->firstWords = parent::presentation();
  }
}

$triangle1 = new Triangle;
echo $triangle1 -> firstWords;