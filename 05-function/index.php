<?php

function concat($str1, $str2){
    return $str1 . " ". $str2;
}

$fullName = concat(
    "mobin",
    "mostafa"
);

// echo $fullName;


$counter = 1;

function increment($value){
    $value +=1;
    return $value . "<br>";
}

// increment($counter);

// echo increment($counter);


// php 8.0 introduce name argument

// function concate($str1, $str2){
//     return strpos($str1 . " ". $str2);
// }

// $fullNames = concate(
//    $str1 : 'mobin',
//     $str2: 'mostafa'
// );

// echo $fullNames;

// function find( str ...$fruit)
// {
//     return "fruits name $fruit[1]";
// } 

// echo find("fruit",["mobin", "mostafa", "rafi"]);


// verdict function 

function sum(...$numbers)
{
    $total = 0;
    for ($i = 0; $i < count($numbers); $i++) {
        $total += $numbers[$i];
    }

    return $total;
}
// echo sum(10, 20) . '<br>'; // 30
// echo sum(10, 20, 30) . '<br>'; // 60

function print_args(...$args) {
    foreach ($args as $arg) {
      echo $arg . "\n";
    }
  }


//   print_args("mobin", "mostafa", "rafi");


// another example 

function concate(string ...$strings): string {
    return implode("", $strings);
  }

// echo concate("mobin", "mostafa", "rafi");


function area($length, $width) {
    return $length * $width;
}

echo area(width: 5, length: 10);

echo "<br>";

function fullName($name, $address) {
   return $name. " " . $address;
}

echo fullName(address: "dharmapur", name: "mobin mostafa");
