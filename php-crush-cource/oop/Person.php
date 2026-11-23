<?php
class Person{
    public string $firstName;
    public string $lasName;
    protected int $age;

    public static int $counter=1;

    public function __construct($firstName, $lastName, $age){
        $this->firstName = $firstName;
        $this->lasName = $lastName;
        $this->age =  $age;  
        self:: $counter++;
    }
    public function address(){
     return $this->firstName . " " . $this->lasName ." " . $this->age ;
    }

    public static function call_counter(){
     return self::$counter;
    }
  }

