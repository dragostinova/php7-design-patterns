<?php

namespace DesignPatterns\Tests\Structural;

use DesignPatterns\Behavioral\TemplateMethod\AbstractBurger;
use DesignPatterns\Behavioral\TemplateMethod\ChickenBurger;
use DesignPatterns\Behavioral\TemplateMethod\VeggieBurger;
use PHPUnit\Framework\TestCase;

final class TemplateMethodTest extends TestCase
{
    public function testMakeChickenBurger()
    {
        $burger = new ChickenBurger();

        $expectedIngedients = [
            'Ciabatta Bread',
            'Chicken',
            'Swiss Cheese',
            'Lettuce',
            'Mayonnaise',
            'Ketchup',
        ];

        $this->assertInstanceOf(AbstractBurger::class, $burger);
        $this->assertSame($expectedIngedients, $burger->getIngredients());
    }

    public function testMakeVeggieBurger()
    {
        $burger = new VeggieBurger();

        $expectedIngedients = [
            'Whole Wheat Bread',
            'Swiss Cheese',
            'Lettuce',
            'Tomato',
            'Cucumber',
            'Mayonnaise',
        ];

        $this->assertInstanceOf(AbstractBurger::class, $burger);
        $this->assertSame($expectedIngedients, $burger->getIngredients());
    }
}
