<?php

/**
 * Class Car
 *
 * @package \\${NAMESPACE}
 */
class Car
{
    protected $partA;
    protected $partB;
    protected $partC;

    public function setPartA($str)
    {
        $this->partA = $str;
    }

    public function setPartB($str)
    {
        $this->partB = $str;
    }

    public function setPartC($str)
    {
        $this->partC = $str;
    }

    public function show()
    {
        echo "这辆车由：" . $this->partA . "和" . $this->partB . "和" . $this->partC . "构成 ";
    }
}
