<?php

namespace DesignPatterns\Creational\Builder;

abstract class Vehicle
{
    private $door;
    private $seat;
    private $engine;
    private $battery;

    abstract public function __toString(): string;
}
