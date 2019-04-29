<?php

namespace DesignPatterns\Structural\Decorator;

class Autopilot extends CarPricingDecorator
{
    public function calculatePrice(): int
    {
        return $this->pricing->calculatePrice() + 5000;
    }

    public function getDescription(): string
    {
        return $this->pricing->getDescription() . ' + autopilot';
    }
}
