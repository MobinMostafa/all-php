<?php

class Car 
{
  public string $color;  //property

  public function drive() :string {     //method
     return "The " . $this->color . " car is driving";
  }
}


$car1 = new Car();
$car1->color = "red";

$car2 = new Car();
$car2->color = "blue";

echo $car1->drive(); // Output: The red car is driving     object 1
echo "<br>";
echo $car2->drive(); // Output: The blue car is driving    object 2

