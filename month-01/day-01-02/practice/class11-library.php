
<?php
// 11. Class: Library
echo "\n\t 11. Class: Library \n";// new line

class Library{
    public $name;
    public $books;
    public $address;

    //Constructor to initialize the properties
    public function __construct($name, $address){
        $this->name = $name;
        $this->address = $address;
        $this->books = [];
    }

    public function addBook($book){
        $this->books[] = $book;   
        return $book ." is added to the library.";     
    }

    public function getBookTitle(){
        return $this->books;
    }
}

//Create an instance of the Library class
$myLibrary = new Library("My Library", "123 Main Street");
echo $myLibrary->addBook("Handbook of PHP");
echo "\n";
echo $myLibrary->addBook("The PHP Manual");
echo "\n";
print_r ($myLibrary->getBookTitle());
echo "\n";