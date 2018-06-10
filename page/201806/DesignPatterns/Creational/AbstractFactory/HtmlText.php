<?php

require 'Text.php';
/**
 * Class HtmlText
 *
 * @package \DesignPatterns\Creational\AbstractFactory
 */
class HtmlText extends Text
{
    public function say()
    {
        echo $this->text . "\n";
    }
}
