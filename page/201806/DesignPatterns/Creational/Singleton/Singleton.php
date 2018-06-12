<?php

/**
 * Class Singleton
 *
 * @package \\${NAMESPACE}
 */
class Singleton
{
    private static $instance;

    //私有构造方法，禁止使用new创建对象
    private function __construct()
    {
    }

    public static function getInstance()
    {
        if (!isset(self::$instance)) {
            self::$instance = new self;
        }
        return self::$instance;
    }

    private function __clone()
    {
        // 将克隆方法设为私有，禁止克隆对象
    }

    public function say()
    {
        echo "this is singleton object.\n";
    }

    public function operation()
    {
        echo "this is other function. \n";
    }
}
