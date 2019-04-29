<?php

namespace DesignPatterns\Creational\Builder;

class Truck extends Vehicle
{
    public function __toString(): string
    {
        if ($this->engine && $this->battery) {
            return 'Hybrid Truck';
        }

        if ($this->battery) {
            return 'Electric Truck';
        }

        return 'Gas Truck';
    }
}
