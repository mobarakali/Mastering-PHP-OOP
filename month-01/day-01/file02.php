<?php
// Declearing a Class
class Book{
    //properties
    public $page = 200;
    public $authore = "'Kazi Nazrul Islam'";
    public $title = "Ognibina";
    
    //methodes
    public function info(){
        echo $this-> title . " is witten by " . $this->authore . " has " . $this->page . " pages"; 
        }
}

$myBook = new Book();

//
 $myBook -> info();
