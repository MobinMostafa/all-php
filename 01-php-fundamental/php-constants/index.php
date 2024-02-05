<?php



// you learn about PHP constants and how to use the define() function and const keyword to define constants.


// A constant is simply a name that holds a single value. As its name implies, the value of a constant cannot be changed during the execution of the PHP script

// To define a constant, you use the  define() function. The  define() function takes the constant’s name as the first argument and the constant value as the second argument. For example:


define("WIDTH", "320px");

define("NAME", "mobin mostafa");

// define("FRUITS", ["Apple", "Mango", "Orange"]);
 const fruits = ["Apple", "Mango", "Orange"];

//  for($i = 0; $i <= count(fruits); $i++){
//     echo fruits[$i];
//  }
foreach(fruits as $fruit){
    echo "$fruit <br>";
}

//The var_dump() is a built-in function that allows you to dump the information about a variable. The var_dump() function accepts a variable and displays its type and value.

$balance = 100;
$message = 'Insufficient balance';
echo "<pre>";
var_dump($message);
echo "</pre>";


//By convention, constant names are uppercase. Unlike a variable, the constant name doesn’t start with the dollar sign($).
require("index.view.php");
