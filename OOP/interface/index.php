<?php


interface Intro {
    public function address($name, $address);
    public function phone($number);
}

class User implements Intro {
    public function address($name, $address) {
        return "My name is " . $name . "<br>My address is " . $address;
    }

    public function phone($number) {
        return "My phone number is " . $number;
    }
}

class Teacher implements Intro {
    public function address($name, $address) {
        return "Teacher's name is " . $name . "<br>Teacher's address is " . $address;
    }

    public function phone($number) {
        return "Teacher's phone number is " . $number;
    }
}


$student = new User();

$student_address =  $student->address("mobin", "Fatikchari");

echo $student_address;

$teacher = new Teacher();

$teacher_info = $teacher-> phone("01640753985");
echo "<br>";
echo $teacher_info;

