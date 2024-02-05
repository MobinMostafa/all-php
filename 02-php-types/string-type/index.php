<?php

$name = "mobin";
$address = "dharmapur";


// echo $name;

// you can use the concatenate operator (.) to concatenate two strings:

echo "name: $name" ."<br>". $address . "<br>";


//To get the length of a string, you use a built-in function strlen()

$title = 'PHP string is awesome';

echo strlen($title);


//The null is a special type in PHP. The null type has only one value which is also null. In fact, null indicates the absence of a value for a variable.
echo "<br>";

$email = null;

var_dump($email);

echo "<br>";

// you use the unset() function to unset a variable, the variable is also null

$myName ="mobin";

unset($myName);

var_dump($myName);

echo "<br>";

// To check if a variable is null or not, you use the is_null() function. The is_null() function returns true if a variable is null; otherwise, it returns fals

$email = null;
var_dump(is_null($email));
echo "<br>";