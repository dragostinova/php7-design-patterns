<?php

namespace DesignPatterns\Behavioral\TemplateMethod;

/**
 * AbstractBurger is the template method, it defines the skeleton of an algorithm.
 */
abstract class AbstractBurger implements BurgerInterface
{
    protected $ingredients = [];

    public function __construct()
    {
        $this->addBread();
        $this->addProtein();
        $this->addCheese();
        $this->addGrassGreenLeaves();
        $this->addSauce();
    }

    /**
     * These operations have to be implemented in subclasses.
     */
    abstract public function addBread();
    abstract public function addProtein();
    abstract public function addCheese();
    abstract public function addGrassGreenLeaves();
    abstract public function addSauce();

    public function getIngredients(): array
    {
        return $this->ingredients;
    }
}
