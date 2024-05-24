<?php

echo "\n\t 2. Class: Dog \n";// new line

// 2. Class: Dog
class Dog{
    public $breed;
    public $age;
    public $name;

    // methods
    public function bark(){ 
        echo "woof! woof! \n";
    }

    public function fetch(){
        echo $this->name . " is fetching the ball.";
    }
}

// creating the object
$rex = new Dog();
$rex->name = "rex";
$rex->bark();
$rex->fetch();

