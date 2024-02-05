<?php

$fruit['name'] = "Apple";

print_r($fruit);
echo "<br>";

echo $fruit['name'];

echo "<br>";
// forEach iterator 

$capitals = [
	'Japan' => 'Tokyo',
	'France' => 'Paris',
	'Germany' => 'Berlin',
	'United Kingdom' => 'London',
	'United States' => 'Washington D.C.'
];

foreach ($capitals as $country => $capital){
   echo $country ." " . $capital . "<br>";
}