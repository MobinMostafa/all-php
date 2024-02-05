<?php
// you can use the array() construct or [] syntax to define an array. The [] syntax is shorter and more convenient

//Creating an array using array() construct

$fruits = array("apple", "mango", "orange");

echo "<pre>";
var_dump($fruits);
echo "</pre>";


// Creating an array using the [] syntax

$students = ["mobin", "rafi", "mostafa"];

echo "<pre>";
var_dump($students);
echo "</pre>";

// To add an element to an array, you use the following syntax:


$number = [1,2,3,4];

$number[] = 6;


echo "<pre>";
var_dump($number);
echo "</pre>";

echo count($number);
