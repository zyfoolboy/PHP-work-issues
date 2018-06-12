<?php

require 'Singleton.php';

$singleton = Singleton::getInstance();
$singleton->say();

$other = Singleton::getInstance();

var_dump($singleton === $other);
