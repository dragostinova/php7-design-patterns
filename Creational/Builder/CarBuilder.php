<?php

namespace DesignPatterns\Creational\Builder;

class CarBuilder implements BuilderInterface
{
    use BuilderTrait;

    public function __construct()
    {
        $this->vehicle = new Car();
    }
}
