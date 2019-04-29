<?php

namespace DesignPatterns\Structural\Decorator;

class CarPricingDecorator implements PricingInterface
{
    public $pricing;

    public function __construct(PricingInterface $pricing)
    {
        $this->pricing = $pricing;
    }

    public function calculatePrice(): int
    {
        return $this->pricing->calculatePrice();
    }

    public function getDescription(): string
    {
        return $this->pricing->getDescription();
    }
}
