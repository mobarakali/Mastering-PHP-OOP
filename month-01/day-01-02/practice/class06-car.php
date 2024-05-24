<?php
// 6. Class: Car

echo "\n\t 6. Class: Car \n";// new line

class Car{
    public $make;
    public $model;
    public $year;

    // constructor to initialize the properties
    public function __construct($make, $model, $year){
        $this->make = $make;
        $this->model = $model;
        $this->year = $year;
    }

    // Methode to start the car
    public function start(){
        return "Car Started. \n";
    }

    // Methode to get the car's details
    public function getDetails(){
        echo "Make: " . $this->make . " Model: " . $this->model . " Year: " . $this->year . ". \n";
    }
}

// creating the object
$bmw = new Car("BMW", "X5", 2020);
$bmw->getDetails();
echo $bmw->start();

// end