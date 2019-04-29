<?php

namespace DesignPatterns\Structural\Decorator;

class Navigation extends CarPricingDecorator
{
    public function calculatePrice(): int
    {
        return $this->pricing->calculatePrice() + 200;
    }

    public function getDescription(): string
    {
        return $this->pricing->getDescription() . ' + built-in navigation';
    }
}
