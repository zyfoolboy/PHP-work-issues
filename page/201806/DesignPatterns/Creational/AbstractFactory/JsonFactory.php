<?php

/**
 * Class JsonFactory
 *
 * @package \DesignPatterns\Creational\AbstractFactory
 */
class JsonFactory extends AbstractFactory
{
    public function createText($content)
    {
        return new JsonText($content);
    }
}
