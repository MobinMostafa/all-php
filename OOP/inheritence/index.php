<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>inheritance practice</title>
</head>
<body>  
  <?php
    class Employee 
    {
        public $name;
        public $age;
        public $address;
        
        public function __construct($n, $a, $addr)
        {
            $this->name = $n;
            $this->age = $a;
            $this->address = $addr;
        }
        
        public function full_address() 
        {
            return $this->name . "<br>" . $this->age . $this->address;
        }
    }

    class Manager extends Employee 
    {
        public function info() 
        {
            return $this->name . "<br>" . $this->age . "<br>". $this->address;
        }
    }

    $user = new Manager("rafi", 20, "fatikchari");

    echo $user->info();
  ?>
</body>
</html>