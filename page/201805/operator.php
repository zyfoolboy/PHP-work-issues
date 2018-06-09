<?php
    $a = 4;
    $b = 1;
    $c;
//    echo $a ?? $b ?? $c;
    $d =  $a ?? $b;
    $e = $c ?? $a;
    echo $e;
    echo $d;
    echo 123;
interface MyInterface
{
}

class MyClass implements MyInterface
{
}

$a = new MyClass;

var_dump($a instanceof MyClass);
var_dump($a instanceof MyInterface);
$b = new MyClass;
$c = 'MyClass';
$d = 'NotMyClass';

var_dump($a instanceof $b); // $b is an object of class MyClass
var_dump($a instanceof $c); // $c is a string 'MyClass'
var_dump($a instanceof $d); // $d is a string 'NotMyClass'
