<?php

namespace DesignPatterns\Creational\Factory;

require 'Factory.php';
require 'Cat.php';
require 'Dog.php';

$cat = Factory::createAnimal('cat');
$dog = Factory::createAnimal('dog');
