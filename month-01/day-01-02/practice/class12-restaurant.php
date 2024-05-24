
<?php
// 12. Class: Restaurant
echo "\n\t 11. Class: Restaurant \n";// new line

class Restaurant{
    public $name;
    public $location;
    public $menu;

    //Constructor to initialize the properties
    public function __construct($name, $location){
        $this->name = $name;
        $this->location = $location;
        $this->menu = [];
    }

    public function addMenuItem($item){
        $this->menu[] = $item;
        return $item . " added to the Menu.\n";
    }

    public function getMenu(){
        return $this->menu;
    }
}

//Create an instance of the Library class
$myRestaurant = new Restaurant("Chilis", "SahebBazar");
echo $myRestaurant->addMenuItem('Rice');
echo $myRestaurant->addMenuItem('Beef');

print_r ($myRestaurant->getMenu());