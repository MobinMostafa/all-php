<?php

// ternary operator

$name = false;

$result = $name ? "my name is mobin" : "you are not eligible";

// echo $result;


// you can use the shorthand ternary operator as follows


$address = "dharmapur";

$full_address = $address ?: "Fatikchari";

// echo $full_address;



//  you can chain ternary operators by using parentheses.

$eligible = true;
$has_credit = true;

$message = $eligible
			? ($has_credit
					? 'Can use the credit'
					: 'Not enough credit')
			: 'Not eligible to buy';

echo $message;