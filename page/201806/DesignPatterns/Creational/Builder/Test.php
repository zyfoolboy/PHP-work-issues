<?php

require 'Builder.php';
require 'Car.php';
require 'CarBuilder.php';
require 'Director.php';

$carBuilder = new CarBuilder();
$director = new Director();
$director->setBuilder($carBuilder);
$newCar = $director->startBuild();
$newCar->show();
