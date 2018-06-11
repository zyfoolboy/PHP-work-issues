<?php

/**
 * Class Director
 *
 * @package \\${NAMESPACE}
 */
class Director
{
    public $myBuilder;

    public function startBuild()
    {
        $this->myBuilder->buildPartA();
        $this->myBuilder->buildPartB();
        $this->myBuilder->buildPartC();
        return $this->myBuilder->getResult();
    }

    public function setBuilder(Builder $builder)
    {
        $this->myBuilder = $builder;
    }
}
