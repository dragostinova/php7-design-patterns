<?php

namespace DesignPatterns\Creational\Singleton;

class Singleton
{
    protected static $instance;

    // Prevent direct instantiation from outside
    private function __construct()
    {
        echo 'Singleton class instance';
    }

    // Prevent cloning from outside
    private function __clone()
    {

    }

    // Prevent deserializing from outside
    private function __wakeup()
    {

    }

    public static function getInstance()
    {
        if (is_null(static::$instance)) {
            static::$instance = new static();
        }

        return static::$instance;
    }

}