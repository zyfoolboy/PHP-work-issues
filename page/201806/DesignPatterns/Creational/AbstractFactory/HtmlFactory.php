<?php

namespace DesignPatterns\Creational\AbstractFactory;

/**
 * Class HtmlFactory
 *
 * @package \DesignPatterns\Creational\AbstractFactory
 */
class HtmlFactory extends AbstractFactory
{
    public function createText($content)
    {
        return new HtmlText($content);
    }
}
