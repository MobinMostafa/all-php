<?php
//  variable 

$name =  "Mobin Mostafa";
$age = 28;

// sample print
echo $name . "<br>";

// whole variable

// var_dump($name) . "<br>";

// get the type 

// echo gettype($name) . "<br>";

// variable checking function 

is_string($name);
// is_int($age);
// is_float($age);
// is_double($age);
is_bool($name);

// check if a variable is declared

isset($name);
isset($address);

// php constant variable

define("numb", 3.12);
echo "<br>";
echo numb . "<br>";

//********* */ ternary short

// $my_age = $age ??= 18;
// $my_age = $age ? $age : 18;
$my_age = $age ?? 18;

echo $my_age . "<br>";

//************** */ array 

$fruits = ["apple", "mango", "orange"];

foreach($fruits as $fruit){
   echo $fruit . "<br>";
}

$person = [
     "name" => "mobin mostafa",
     "address" => "Fatikchari"
];

foreach($person as $key){
 echo $key . "<br>";
}

// rest operator

function sum(...$numbers){
   $sum =0;
   foreach($numbers as $number){
     $sum = $number . "<br>";   
   }
   return $sum;
}

echo sum(1,2,3,4,5,6,7,8);

//********** */ magic constant

echo __DIR__ . "<br>";
echo __FILE__ . "<br>";
echo __LINE__ . "<br>";

//*********** */ make directory 

// mkdir('test');

//********* */ rename directory 

// rename('test', 'test2');


//******** */ delete directory 

// rmdir('test2');

// read file and folder in directory 

echo file_get_contents("practice.txt") . "<br>";

$file = scandir("./");

echo "<pre>";
 var_dump($file);
echo "</pre>";

// file_put_contents("sample.txt", "some text here") . "<br>";

//********* */ if the file exist in folder

echo file_exists('practice.txt') . "<br>";

