<?php
// 3. Class: Laptop
echo "\n\t 3. Class: Laptop \n";// new line

class Laptop{
    public $brand;
    public $model;
    public $price;

    // methods
    public function turnOn(){
        echo "Laptop is turning on. \n";
    }
    public function getSpecs(){
        echo "The " . $this->brand . " "  . $this->model . " will cost $" . $this->price . ". \n";
    }
}

// creating the object
$macbook = new Laptop();
$macbook->brand = "Apple";
$macbook->model = "Macbook Pro";
$macbook->price = 2000;
$macbook->getSpecs();
$macbook->turnOn();