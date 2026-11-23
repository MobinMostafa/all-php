<?php


class Employe
{
    public string $name;

    public function work(){
     return "working";
}
}


class Product 
{
   public string $name;
   public float $price;

   public function stockValue($qty){
       return $this->name . " " . "price is = " . $this->price * $qty;
   }
}


