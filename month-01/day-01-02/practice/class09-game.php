<?php


// 9. Class: Game
echo "\n\t 9. Class: Game \n";// new line

class Game{
    public $title;
    public $genre;
    public $platform;

    // Constructor to initialize the properties
    public function __construct($title,$genre,$platform){
        $this->title = $title;
        $this->genre = $genre;
        $this->platform = $platform;
    }

    public function start(){
        return $this->title . " is starting on " . $this->platform . ". \n";
    }

    public function getDetails(){
        return "Title: " . $this->title . ", Genre: " . $this->genre . ", Platform:" . $this->platform ;
    }
}

// creating Objects
$myGame = new Game("Civilization VI", "Strategy", "PC");
echo $myGame->start();
echo $myGame->getDetails();

// end