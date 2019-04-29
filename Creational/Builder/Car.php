<?php

namespace DesignPatterns\Creational\Builder;

class Car extends Vehicle
{
    public function __toString(): string
    {
        if ($this->engine && $this->battery) {
            return 'Hybrid Car';
        }

        if ($this->battery) {
            return 'Electric Car';
        }

        return 'Gas Car';
    }
}
