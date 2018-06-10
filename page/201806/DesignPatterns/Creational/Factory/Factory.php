<?php

namespace DesignPatterns\Creational\Factory;

/**
 * Class Factory
 *
 * @package \\${NAMESPACE}
 */
class Factory
{
    public static function createAnimal($name)
    {
        if ($name == 'cat') {
            return new Cat();
        } elseif ($name == 'dog') {
            return new Dog();
        }
    }
}
