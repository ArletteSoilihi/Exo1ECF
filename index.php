<?php
// Classe abstraite Animal
abstract class Animal {
    protected $name;
    protected $age;

    public function __construct($name, $age) {
        $this->name = $name;
        $this->age = $age;
    }

    // Méthode abstraite makesound
    abstract public function makesound();

    // Méthode abstraite move
    abstract public function move();
}

// Classe abstraite Bird
abstract class Bird {
    protected $wingspan;

    // Constructeur
    public function __construct($wingspan) {
        $this->wingspan = $wingspan;
    }

}

// Classe abstraite Mammal
abstract class Mammal {
    protected $furcolor;

    // Constructeur
    public function __construct($furcolor) {
        $this->furcolor = $furcolor;
    }
}

// Classe Eagle
class Eagle {
    private $flightSpeed;

    // Constructeur
    public function __construct($flightSpeed) {
        $this->flightSpeed = $flightSpeed;
    }

    // Méthode hunt
    public function hunt() {
        return "The eagle is hunting for prey.";
    }

    // Getter pour flightSpeed
    public function getFlightSpeed() {
        return $this->flightSpeed;
    }
}

// Classe finale Penguin
final class Penguin {
    private $swimSpeed;

    // Constructeur
    public function __construct($swimSpeed) {
        $this->swimSpeed = $swimSpeed;
    }

    // Méthode swim
    public function swim() {
        return "The penguin is swimming gracefully.";
    }

    // Getter pour swimSpeed
    public function getSwimSpeed() {
        return $this->swimSpeed;
    }
}


// Classe Elephant
class Elephant {
    private $tuskLength;

    // Constructeur
    public function __construct($tuskLength) {
        $this->tuskLength = $tuskLength;
    }

    // Méthode trumpet
    public function trumpet() {
        return "The elephant is trumpeting loudly.";
    }

    // Getter pour tuskLength
    public function getTuskLength() {
        return $this->tuskLength;
    }
}

// Class finale Dog
final class Dog {
    private $furColor;
    private $bred;

    // Constructeur
    public function __construct($furColor, $bred) {
        $this->furColor = $furColor;
        $this->bred = $bred;
    }

    // Méthode bark
    public function bark() {
        return "Woof! Woof!";
    }

    // Getter pour furColor
    public function getFurColor() {
        return $this->furColor;
    }

    // Getter pour bred
    public function getBred() {
        return $this->bred;
    }
}