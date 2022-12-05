<?php
// http://localhost:8000/Class/creatingObjects.php
class User
{
    // Create properties
    public $name;
    public $username;
    public $followerCount;
}

//creating object from this class
//variable //new creating an object from classes, specify a classname User
$garyObject = new User();
// name is property value
$garyObject->name = 'Gary Clarke';
$garyObject->username = '@garyclarketech';
$garyObject->followerCount = 50;

print_r($garyObject);