<?php

class Ape extends Animal
{
    public $legs;

    public function __construct($name, $legs = 2)
    {
        Animal::__construct($name);
        $this->legs = $legs;
    }

    public function yell()
    {
        echo 'Aooo';
    }
}