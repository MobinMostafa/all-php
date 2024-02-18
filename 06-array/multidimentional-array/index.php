<?php

//A multidimensional array is an array that has more than one dimension. For example, a two-dimensional array is an array of arrays. It is like a table of rows and columns.

$tasks = [
    ['Learn PHP programming', 2],
    ['Practice PHP', 2],
    ['Work', 8],
    ['Do exercise', 1],
];

foreach( $tasks as $task){
    foreach($task as $value){
        echo $value . "<br>";
    }
}

echo "<pre>";
print_r($tasks);
echo "</pre>";

echo "<br>";


$teachers = [
   "classOne" => ["teacherName" => "rafiq"],
   "classTwo" => ["teacherName" => "rakib"],
   "classThree" => ["teacherName" => "rabbi"],
   "classFour" => ["teacherName" => "rashed"],

];

echo "<pre>";
print_r($teachers);
echo "</pre>";

foreach ($teachers as $class => $teacherName){
    foreach ($teacherName as $teacher => $value){
        echo $teacher . " = " . $value . "<br>";
    }
}

