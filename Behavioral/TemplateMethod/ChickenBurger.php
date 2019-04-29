<?php

namespace DesignPatterns\Behavioral\TemplateMethod;

/**
 * Subclasses have to implement all abstract operations of the base class.
 */
class ChickenBurger extends AbstractBurger
{
    public function addBread()
    {
        $this->ingredients[] = 'Ciabatta Bread';
    }

    public function addProtein()
    {
        $this->ingredients[] = 'Chicken';
    }

    public function addCheese()
    {
        $this->ingredients[] = 'Swiss Cheese';
    }

    public function addGrassGreenLeaves()
    {
        $this->ingredients[] = 'Lettuce';
    }

    public function addSauce()
    {
        $this->ingredients[] = 'Mayonnaise';
        $this->ingredients[] = 'Ketchup';
    }
}
