<?php

/**
 * Class ProductFactory
 *
 * @package \\${NAMESPACE}
 */
class ProductFactory extends Factory
{
    public static function createPC()
    {
        return new MacBook();
    }

    public static function createTV()
    {
        return new AppleTV();
    }
}
