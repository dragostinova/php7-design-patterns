<?php

namespace DesignPatterns\Creational\Builder;

class TruckBuilder implements BuilderInterface
{
    use BuilderTrait;

    public function __construct()
    {
        $this->vehicle = new Truck();
    }
}
