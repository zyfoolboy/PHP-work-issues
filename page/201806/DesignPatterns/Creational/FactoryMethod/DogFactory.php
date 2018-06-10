<?php

/**
 * Class DogFactory
 *
 * @package \\${NAMESPACE}
 */
class DogFactory extends Factory
{
    public static function createAnimal()
    {
        return new Dog();
    }
}
