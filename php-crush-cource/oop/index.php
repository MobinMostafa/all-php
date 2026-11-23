<?php
require_once "Person.php";
require_once "Student.php";

// $p = new Person("Mobin", "Mostafa", 28);

// echo $p->address() . "<br>";
// echo Person::call_counter();
//   echo "<pre>";
//   var_dump($p);
//   echo "</pre>";

$student = new Student("Nahian", "rafi", "121");

echo "<pre>";
var_dump($student);
echo "</pre>";