<?php

// PHP isset() returns true if a variable is set and not null.

$count = 0;
// var_dump(isset($count));  


$colors = ['primary' => 'blue'];

// var_dump(isset($colors['primary']));
echo "<br>";

// echo isset($colors['primary']);

// isset() is a language construct, not a function.
// isset() returns true if a variable is set and not null.
// isset() returns true if an array element exists and not null.
// isset() returns true if a string index valid or false otherwise
// isset() returns true if all variable are set and not null. It’ll stop evaluating once it encounter an unset variable.




//The empty() construct accepts a variable and returns true if the variable is empty. Otherwise, it returns false.


var_dump(empty($count));



// PHP is_null() accepts a variable and returns true if that variable is null. Otherwise, it returns false.


$isnull = fn($v) => is_null($v);

$color = null;
echo $isnull($color);