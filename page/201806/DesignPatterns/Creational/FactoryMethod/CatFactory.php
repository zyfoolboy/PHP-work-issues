<?php

/**
 * Class CatFactory
 *
 * @package \\${NAMESPACE}
 */
class CatFactory extends Factory
{
    public static function createAnimal()
    {
        return new Cat();
    }
}
