<?php
/**
 * Class & Objects
 */

// A class is a blueprint for an object.
// An object is an instance of a class. 

class Car
{
    // Properties
    public $color = "blue";
    public $wheels = 4;
    public $doors = 4;
    public $engine = "v8";
    // Methods
    public function drive()
    {
        echo "The car is driving \n";
    }

    public function stop()
    {
        echo "The car is stopped \n";
    }
}

// Create an object
$myCar = new Car();

// Call methods
$myCar->drive();
$myCar->stop();
?>