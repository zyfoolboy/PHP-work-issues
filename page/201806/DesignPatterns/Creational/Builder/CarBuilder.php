<?php

/**
 * Class CarBuilder
 *
 * @package \\${NAMESPACE}
 */
class CarBuilder extends Builder
{
    function __construct()
    {
        $this->car = new Car();
    }

    public function buildPartA()
    {
        // TODO: Implement buildPartA() method.
        $this->car->setPartA('发动机');
    }

    public function buildPartB()
    {
        // TODO: Implement buildPartB() method.
        $this->car->setPartB('轮子');
    }

    public function buildPartC()
    {
        // TODO: Implement buildPartC() method.
        $this->car->setPartC('地盘');
    }

    public function getResult()
    {
        // TODO: Implement getResult() method.
        return $this->car;
    }
}
