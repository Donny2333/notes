<?php

class User
{
    private $name;
    private $age;
    
    public function __construct($name, $age)
    {
        $this->name = $name;
        $this->age  = $age;
    }
    
    public function __get($property)
    {
        return $this->$property;
    }
    
    public function getUser()
    {
        echo $this->name . ':' . $this->age . "\n";
    }
}

$user = new User('fei', 25);
// $user->getUser();
// echo $user;
