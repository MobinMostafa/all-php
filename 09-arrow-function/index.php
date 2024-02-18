<?php
//  arrow function Start with the fn keyword.
//Can have only one expression and return this expression.


//example one 

$eq = fn ($x, $y) => $x == $y;

// echo $eq(100, '100'); // 1 (or true

$list = [10, 20, 30];

$results = array_map(
	fn ($item) => $item * 2,
	$list
);

echo "<pre>";
// print_r($results);
echo "</pre>";


function multiplier($x)
{
	return fn ($y) => $x * $y;
}

$double = multiplier(2);

echo $double(10); // 200