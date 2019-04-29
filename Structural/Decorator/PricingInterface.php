<?php

namespace DesignPatterns\Structural\Decorator;

interface PricingInterface
{
    public function calculatePrice(): int;

    public function getDescription(): string;
}