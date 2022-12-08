<?php

namespace Person;

class Person {
    // Properties
    private $name;
    private $age;

    public function __construct($name, $age) {
        $this->name = $name;
        $this->age = $age;
    }

    // Methods
    public function getPerson() {
        $person = $this->name . " is " . $this->age . " years old! ";
        return $person;
    }

    public function getName() {
        // $this references the property inside the same class
        return $this->name;
    }


  
}