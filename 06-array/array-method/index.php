<?php

//To prepend one or more elements to an array, you use the array_unshift() function:

    $permissions = [
        'edit',
        'delete',
        'view'
    ];

    array_unshift($permissions, "new unshift");
    echo "<pre>";
    // print_r($permissions);
    echo "</pre>";



    // The array_push() function adds one or more elements to the end of an array.

    array_push($permissions, "new push");

    echo "<pre>";
    // print_r($permissions);
    echo "</pre>";



    //The array_pop() function removes an element from the end of an array and returns that element.


    // array_pop($permissions);

    echo "<pre>";
    // print_r($permissions);
    echo "</pre>";


// The array_shift() function removes the first element from an array and returns it.

//   array_shift($permissions);

  echo "<pre>";
//   print_r($permissions);
  echo "</pre>";


//array_keys() function accepts an array and returns all the keys or a subset of the keys of the arra

$keys = array_keys($permissions);


  echo "<pre>";
//   print_r($keys);
  echo "</pre>";



  //   array_key_exists() function checks if a key exists in an array. 


  $roles = [
	'admin' => 1,
	'approver' => 2,
	'editor' => 3,
	'subscriber' => 4
];

$result = array_key_exists('admin', $roles);

// var_dump($result);


// in_array() function returns true if a value exists in an array.

$actions = [
	'new',
	'edit',
	'update',
	'view',
	'delete',
];

$result = in_array('publish', $actions);

// var_dump($result);


// array_reverse() function accepts an array and returns a new array with the order of elements in the input array reversed.


$numbers = [10, 20, 30];
$reversed = array_reverse($numbers);

echo "<pre>";
// print_r($reversed);
// print_r($numbers);

echo "</pre>";



//array_merge() function accepts one or more arrays and returns a new array that contains the elements from the input arrays.


$server_side = ['PHP'];

$client_side = ['JavaScript', 'CSS', 'HTML'];

$fullStack = array_merge($client_side, $server_side);

echo "<pre>";
// print_r($fullStack);
echo "</pre>";



// PHP 7.4 introduced the spread operator to the array expression. PHP uses the three dots (...) to denote the spread operator.

$numbers = [4,5];
$scores = [1,2,3, ...$numbers];

echo "<pre>";
// print_r($scores);
echo "</pre>";


//   the list() construct that assigns the elements of an array to a list of variables in one assignment


$prices  = [100, 0.1];
list($buy_price, $tax) = $prices;

// var_dump( $buy_price, $tax );
echo "<br>";
// echo $buy_price;

// nested list

$elements = ['body', ['white','blue']];
list($element, list($bgcolor, $color)) = $elements;

echo "<pre>";
// var_dump($element, $bgcolor, $color);
echo "</pre>";


// Like the list(), the array destructuring works with both indexed and associative arrays.


$person = ['John','Doe'];
[$first_name, $last_name] = $person;

// var_dump($first_name, $last_name);





