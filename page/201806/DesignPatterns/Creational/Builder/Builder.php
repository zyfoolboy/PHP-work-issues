<?php

/**
 * Class Builder
 *
 * @package \\${NAMESPACE}
 */
abstract class Builder
{
    protected $car;
    abstract public function buildPartA();
    abstract public function buildPartB();
    abstract public function buildPartC();
    abstract public function getResult();
}
