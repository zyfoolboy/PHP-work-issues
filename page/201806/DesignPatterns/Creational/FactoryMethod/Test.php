<?php

require 'Animal.php';
require 'Cat.php';
require 'Dog.php';
require 'Factory.php';
require 'DogFactory.php';
require 'CatFactory.php';

$cat = CatFactory::createAnimal();
$cat->say();
$cat->run();

$dog = DogFactory::createAnimal();
$dog->say();
$dog->run();


