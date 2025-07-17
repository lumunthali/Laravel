<?php
class Student {
    public $name;
    public $age;
    public $gender;

    public function introduction(){
        echo "My name is $this->name and my age is $this->age and my gender is $this->gender";
    }
}

$student = new Student();
$student->name = "Lumbani";
$student->age = 91;
$student->gender = "male";

$student->introduction();

?>