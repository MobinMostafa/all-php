<?php

/* A property is a variable inside a class (the data). A method is a function inside a class (the action).
$this means "this current object". The arrow -> is used to reach a property or method of an object. If a method
returns $this, you can call many methods in one line (method chaining). */

// class Wallet 
// {
//    public int $balance = 0;

//    public function deposit(int $amount) :static {
//        $this->balance += $amount;
//        return $this;
//    }

//    public function balance() :int  {
//      return $this->balance;
//    }
// }

// $w = new Wallet();
// echo $w->deposit(100)->deposit(50)->balance(); // Output: 150



// class Wallet
// {
//     public function me(): static
//     {
//        return $this;
//     }
// }

// $w = new Wallet();

// $result = $w->me();

// var_dump($result);




// class Car
// {
//     public function start(): static
//     {
//         echo "Engine started";

//         return $this;
//     }

//     public function move(): static
//     {
//         echo "Moving";

//         return $this;
//     }

//     public function stop(): string
//     {
//         return "Stopped";
//     }
// }


// $car = new Car();
// echo $car->start()->move()->stop(); // Output: Engine startedMovingStopped



class Engine
{
    public function start()
    {
        echo "started";
    }
}

class Car
{
    public function engine()
    {
        return new Engine();
    }
}

$car = new Car();
$car->engine()->start();