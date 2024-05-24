<?php


// 7. Class: Phone

echo "\n\t 7. Class: Phone \n";// new line

class Phone{        
    public $brand;
    public $model;
    public $batteryLife;

    // constructor to initialize the properties
    public function __construct($brand, $model, $batteryLife){
        $this->brand = $brand;
        $this->model = $model;
        $this->batteryLife = $batteryLife;
    }

    public function makeCall($number){
        return "Calling " . $number;
    }

    public function sendMessage($number, $message){
        return "Sending message to " . $number . ": " . $message; 
    }
}

//creating object

$myPhone = new Phone("Nokia", 3251, "10 Hours");
echo $myPhone->makeCall("01914930483". "\n") ;
echo $myPhone-> sendMessage("01914930483", "I'm learning PHP OOP \n");

