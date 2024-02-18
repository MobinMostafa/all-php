<?php 

// An anonymous function is a function that doesn’t have a name.

$name = "mobin mostafa";

$full = function() use ($name) {
     return "hi " . $name;
};

// echo $full();


// Return an anonymous function from a function

function multiplier($x)
{
	return function ($y) use ($x) {
		return $x * $y;
	};
}

$double = multiplier(2);
echo $double(100); // 200
echo "<br>";
$tripple = multiplier(3);
echo $tripple(100); // 300