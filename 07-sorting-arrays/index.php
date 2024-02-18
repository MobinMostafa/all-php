<?php
//The ksort() function sorts the elements of an array by their keys. The ksort() is mainly useful for sorting associative arrays.


$employees = [
    'john' => [
        'age' => 24,
        'title' => 'Front-end Developer'
    ],
    'alice' => [
        'age' => 28,
        'title' => 'Web Designer'
    ],
    'bob' => [
        'age' => 25,
        'title' => 'MySQL DBA'
    ]
];
ksort($employees, SORT_STRING);

echo "<pre>";
// print_r($employees);
echo "</pre>";


//  Using the PHP usort() function to sort an array of numbers
//To specify a custom comparison function for sorting, you use the usort() function:


    $numbers = [4,3,2,6,1];

    // usort($numbers, function ($x, $y) {
    //       if($x === $y){
    //         return 0;
    //       }
    //       return $x < $y ? -1 : 1; 
    // });
    

    /// sorting comparison

    // usort($numbers, function ($x, $y){
    //     return $x <=> $y;
    // });

    // simple use arrow function 

   usort($numbers, fn ($x, $y) => $x <=> $y);

    echo "<pre>";
    // print_r($numbers);
    echo "</pre>";



    //The asort() function sorts the elements of an associative array in ascending order.


    $mountains = [
        'K2' => 8611,
        'Lhotse' => 8516,
        'Mount Everest' => 8848,
        'Kangchenjunga' => 8586,
    ];
    asort($mountains);
    
  echo "<pre>";
//   print_r($mountains);
  echo "</pre>";



  //The uasort() function sorts the elements of an associative array with a user-defined comparison function and maintains the index association

  
$countries = [
    'China' => ['gdp' => 12.238 , 'gdp_growth' => 6.9],
    'Germany' => ['gdp' => 3.693 , 'gdp_growth' => 2.22 ],
    'Japan' => ['gdp' => 4.872 , 'gdp_growth' => 1.71 ],
    'USA' => ['gdp' => 19.485, 'gdp_growth' => 2.27 ],
];

  uasort($countries, function ($x, $y) {
    return $x['gdp'] <=> $y['gdp'];
  }); 

  echo "<pre>";
//   print_r($countries);
  echo "</pre>";



// The uksort() function allows you to sort an array by key using a user-defined comparison function. Typically, you use the uksort() function to sort the keys of an associative array.


$names = [
    'c' => 'Charlie',
    'A' => 'Alex',
    'b' => 'Bob'
];

uksort(
    $names, 
    fn ($x, $y) => strtolower($x) <=> strtolower($y)
);

echo "<pre>";
  print_r($names);
  echo "</pre>";
