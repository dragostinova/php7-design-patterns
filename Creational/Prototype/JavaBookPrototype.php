<?php

namespace DesignPatterns\Creational\Prototype;

class JavaBookPrototype extends BookPrototype
{
    public function __construct()
    {
        $this->topic = 'Java';
    }

    public function __clone()
    {

    }
}
