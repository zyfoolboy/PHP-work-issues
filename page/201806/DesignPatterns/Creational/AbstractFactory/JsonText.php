<?php

/**
 * Class JsonText
 *
 * @package \DesignPatterns\Creational\AbstractFactory
 */
class JsonText extends Text
{
    public function say()
    {
        echo $this->text . "\n";
    }
}
