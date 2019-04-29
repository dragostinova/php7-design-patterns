<?php

namespace DesignPatterns\Structural\Decorator;

class CarPricing implements PricingInterface
{

    public function calculatePrice(): int
    {
        return 35000;
    }

    public function getDescription(): string
    {
        return 'Car';
    }
}
