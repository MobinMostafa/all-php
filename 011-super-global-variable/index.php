<?php


$x = 20;
$y = 30;

function addition(){
   $GLOBALS['z'] = $GLOBALS['x'] + $GLOBALS['y']; 
}

addition();

echo $z;

$_SESSION['favcolor'] = "red";

echo "session color is set";

echo "Favorite color is " . $_SESSION["favcolor"] . ".<br>";