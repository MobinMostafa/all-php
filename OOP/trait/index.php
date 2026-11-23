<?php


// trait address {
//     public function addr(){
//         echo "welcome";
//     }
// }

// trait phone {
//     public function hlw(){
//       echo "hello world";
//     }
// }


// class User 
// {
//     use address;
//   public function addr($addres){
//        echo "my address is" . "$addres";
//        parent::address();
//     }
// }

// $user = new User();

// $user_info = $user-> addr("fatikchari");


trait SayWorld {
    public function sayHello() {
        echo "World!";
    }
}

class MyHelloWorld {
    use SayWorld;

    public function sayHello() {
        echo "Hello ";
    }
}

$obj = new MyHelloWorld();
$obj->sayHello(); // Outputs: Hello World!
?>

