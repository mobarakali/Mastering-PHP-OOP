<?php


// 8. Class: House
echo "\n\t 8. Class: House \n";// new line

class House{
    public $address;
    public $numRooms;
    public $price;

    // Constructor to initialize the properties
    public function __construct($address,$numRooms, $price){
        $this->address = $address;
        $this->numRooms = $numRooms;
        $this-> price = $price;
    }

    public function getDetails(){
        return "Address:" . $this->address . ", Number of Rooms:" . $this->numRooms . ", Price:$" . $this->price . "\n";
    }

    public function isForSale(){
        return ($this->price > 0) ? "Ready for Sale!" : "Sold!";
    }
}

// Creating Object
$myHouse = new House("Katakhali, Rajshahi", 4, 15000);
echo $myHouse -> getDetails();
echo $myHouse -> isForSale();

// end