<?php

namespace DesignPatterns\Behavioral\TemplateMethod;

/**
 * Subclasses have to implement all abstract operations of the base class.
 */
class VeggieBurger extends AbstractBurger
{
    public function addBread()
    {
        $this->ingredients[] = 'Whole Wheat Bread';
    }

    public function addProtein()
    {

    }

    public function addCheese()
    {
        $this->ingredients[] = 'Swiss Cheese';
    }

    public function addGrassGreenLeaves()
    {
        $this->ingredients[] = 'Lettuce';
        $this->ingredients[] = 'Tomato';
        $this->ingredients[] = 'Cucumber';
    }

    public function addSauce()
    {
        $this->ingredients[] = 'Mayonnaise';
    }
}
