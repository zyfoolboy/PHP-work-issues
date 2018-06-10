<?php

/**
 * Class Text
 *
 * @package \DesignPatterns\Creational\AbstractFactory
 */
abstract class Text
{
    protected $text;

    public function __construct($text)
    {
        $this->text = $text;
    }

    abstract public function say();
}
