<?php

namespace DesignPatterns\Tests\Structural;

use DesignPatterns\Structural\Decorator\Autopilot;
use DesignPatterns\Structural\Decorator\CarPricing;
use DesignPatterns\Structural\Decorator\Navigation;
use DesignPatterns\Structural\Decorator\PricingInterface;
use PHPUnit\Framework\TestCase;

final class DecoratorTest extends TestCase
{
    public function testCalculateBasePrice()
    {
        $car = new CarPricing();

        $this->assertInstanceOf(PricingInterface::class, $car);
        $this->assertSame(35000, $car->calculatePrice());
        $this->assertSame('Car', $car->getDescription());
    }

    public function testCalculatePriceWithNavigation()
    {
        $car = new CarPricing();
        $navigation = new Navigation($car);

        $this->assertInstanceOf(PricingInterface::class, $navigation);
        $this->assertSame(35200, $navigation->calculatePrice());
        $this->assertSame('Car + built-in navigation', $navigation->getDescription());
    }

    public function testCalculatePriceWithNavigationAndAutopilot()
    {
        $car = new CarPricing();
        $navigation = new Navigation($car);
        $autopilot = new Autopilot($navigation);

        $this->assertInstanceOf(PricingInterface::class, $autopilot);
        $this->assertSame(40200, $autopilot->calculatePrice());
        $this->assertSame('Car + built-in navigation + autopilot', $autopilot->getDescription());
    }
}
