# Day 1-2: Introduction to OOP
 **Tasks**:
  - Learn about the basics of Object-Oriented Programming in PHP.
  - Understand the difference between procedural and object-oriented programming.
  - Watch introductory videos or tutorials on PHP OOP.
  - Resources:
    - [PHP.net OOP Introduction](https://www.php.net/manual/en/language.oop5.basic.php)
    - YouTube tutorials on PHP OOP basics.

---------
## Learn about the basics of Object-Oriented Programming in PHP.

Object-Oriented Programming (OOP) is a programming paradigm that uses `objects` and `classes` to structure a software program into simple, reusable pieces of code. Here’s an introduction to the basics of OOP in PHP, tailored for beginners.

### 1. Classes and Objects

**Class:** A class is a blueprint for creating objects. It defines a datatype by bundling data (properties) and methods (functions) that work on the data.

```php
class Car {
    // Properties
    public $color;
    public $model;
    
    // Methods
    public function __construct($color, $model) {
        $this->color = $color;
        $this->model = $model;
    }
    
    public function message() {
        return "My car is a " . $this->color . " " . $this->model . ".";
    }
}
```

**Object:** An object is an instance of a class. When a class is defined, objects can be created using the `new` keyword.

```php
$myCar = new Car("black", "Volvo");
echo $myCar->message();  // Output: My car is a black Volvo.
```

### 2. Properties and Methods

**Properties:** These are variables that belong to a class.

**Methods:** These are functions that belong to a class and define the behaviors of the objects.

```php
class Car {
    public $color;  // Property
    public $model;  // Property
    
    public function __construct($color, $model) {  // Method
        $this->color = $color;
        $this->model = $model;
    }
    
    public function message() {  // Method
        return "My car is a " . $this->color . " " . $this->model . ".";
    }
}
```
<!--

### 3. Visibility

Visibility defines how properties and methods of a class can be accessed. PHP has three visibility keywords:

- **public:** The property or method can be accessed from outside the class.
- **private:** The property or method can only be accessed within the class itself.
- **protected:** The property or method can be accessed within the class and by inherited and parent classes.

```php
class Car {
    public $color;  // Public property
    private $model;  // Private property
    
    public function __construct($color, $model) {
        $this->color = $color;
        $this->model = $model;
    }
    
    public function message() {
        return "My car is a " . $this->color . " " . $this->model . ".";
    }
    
    private function privateMethod() {
        // This method is private and cannot be accessed from outside
    }
}
```

### 4. Constructors and Destructors

**Constructor:** A special method that is automatically called when an object is instantiated. It’s often used to initialize properties.

```php
class Car {
    public $color;
    public $model;
    
    // Constructor
    public function __construct($color, $model) {
        $this->color = $color;
        $this->model = $model;
    }
}
```

**Destructor:** A method that is automatically called when an object is destroyed. It’s used for cleanup purposes.

```php
class Car {
    public $color;
    public $model;
    
    public function __construct($color, $model) {
        $this->color = $color;
        $this->model = $model;
    }
    
    // Destructor
    public function __destruct() {
        echo "The object of model " . $this->model . " is destroyed.";
    }
}
```

### 5. Inheritance

Inheritance allows a class to inherit properties and methods from another class. The class that inherits is called the child class, and the class being inherited from is called the parent class.

```php
class Vehicle {
    public $brand;
    
    public function __construct($brand) {
        $this->brand = $brand;
    }
    
    public function honk() {
        return "Beep! Beep!";
    }
}

class Car extends Vehicle {
    public $model;
    
    public function __construct($brand, $model) {
        parent::__construct($brand);
        $this->model = $model;
    }
    
    public function message() {
        return "My car is a " . $this->brand . " " . $this->model . ".";
    }
}

$myCar = new Car("Toyota", "Corolla");
echo $myCar->message();  // Output: My car is a Toyota Corolla.
```

### 6. Encapsulation

Encapsulation is the concept of wrapping data and methods that work on the data within one unit, typically a class, and restricting access to some of the object's components. This is often achieved by using private properties and providing public methods to access and update them.

```php
class Car {
    private $color;
    
    public function setColor($color) {
        $this->color = $color;
    }
    
    public function getColor() {
        return $this->color;
    }
}

$myCar = new Car();
$myCar->setColor("Red");
echo $myCar->getColor();  // Output: Red
```

### 7. Polymorphism

Polymorphism allows methods to do different things based on the object it is acting upon. It can be implemented through method overriding in child classes.

```php
class Vehicle {
    public function move() {
        return "The vehicle is moving";
    }
}

class Car extends Vehicle {
    public function move() {
        return "The car is driving";
    }
}

class Bicycle extends Vehicle {
    public function move() {
        return "The bicycle is pedaling";
    }
}

$myCar = new Car();
echo $myCar->move();  // Output: The car is driving

$myBicycle = new Bicycle();
echo $myBicycle->move();  // Output: The bicycle is pedaling
```
-->
### Conclusion

In this section we will learn very basic concept of OOP. only focus on Class and Objects. And learn very basic use of Properies and Methodes. We will dive deep into this later when needed but not now!

<!--
Understanding these basic concepts—classes and objects, properties and methods, visibility, constructors and destructors, inheritance, encapsulation, and polymorphism—forms the foundation of OOP in PHP. By using these principles, you can write more modular, reusable, and maintainable code.
-->