<?php

namespace DesignPatterns\Creational\Prototype;

class PhpBookPrototype extends BookPrototype
{
    public function __construct()
    {
        $this->topic = 'PHP';
    }

    public function __clone()
    {

    }
}
