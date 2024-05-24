<?php



// 5. Class: Student
echo "\n\t 5. Class: Student \n";// new line

class Student{
    public $name;
    public $studentID;
    public $grades;

    // constructor
    public function __construct($name, $studentID){
        $this->name = $name;
        $this->studentID = $studentID;
        $this->grades = [];
    }

    // methods to get the average grade
    public function gerAverageGrade(){
        return (count($this->grades) == 0) ?  0 : array_sum($this->grades) / count($this->grades);
    }

    // method to add grade
    public function addGrade($grade){
        $this->grades[] = $grade;
        echo "Grade Added. \n";
    }
}

// creating the object
$student = new Student("Ali", 12345);
$student->addGrade(100);
$student->addGrade(90);
$student->addGrade(80);
echo $student->gerAverageGrade();


// end