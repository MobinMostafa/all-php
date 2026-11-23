<?php

require_once "class.php";
require_once "construct.php";

$emp = new Employe();
echo $emp->name = "Rafi Ahmed";
echo " ";
echo $emp->work();
echo "<br>";



$product = new Product();
echo $product->name = "Laptop";
echo "<br>";
echo $product->price = 1000.00;
echo "<br>";
echo $product->stockValue(5.5);

echo "<br>";




// constructor

$pdt = new Prdct();