<?php
require 'Target.php';

class Adapter implements Target
{
    protected $adaptee;
    function __construct(Adaptee $adaptee)
    {
        $this->adaptee = $adaptee;
    }

    public function request()
    {
        echo "adapter change: \n";
        $this->adaptee->realRequest();
    }
}