<?php 
echo "\n\t 1. Class: Person \n";// new line
// 1. Class: Person
class Person{
    public $name;
    public $age;
    public $address;

    // methods
    public function introduce(){
        echo "Hi! My name is " . $this->name . "\n" ;
    }
    public function isAdult(){
        return ($this->age >= 18) ? "Is an Adult" : "Not an Adult";
    }
}

// Creating the object 
$ali = new Person();
$ali->name = "Ali";
$ali->age = 20;
$ali->introduce();
echo $ali-> isAdult();