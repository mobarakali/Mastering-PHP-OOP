<?php


// 4. Class: Movie
echo "\n\t 4. Class: Movie \n";// new line
class Movie{
    public $name;
    public $director;
    public $releaseYear;

    // methods
    public function getSummary(){
        echo $this->name . " was directed by " . $this->director . " in " . $this->releaseYear . ". \n";
    }

    public function isClassic(){
        return $this->releaseYear < 2000 ? $this->name . " is Classic one!" : "Not a classic one!";
    }
}

// creating the object
$movie = new Movie();
$movie->name = "The Godfather";
$movie->director = "Francis Ford Coppola";
$movie->releaseYear = 31972;
$movie->getSummary();
echo $movie->isClassic();

// end