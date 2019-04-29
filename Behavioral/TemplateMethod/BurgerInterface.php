<?php

namespace DesignPatterns\Behavioral\TemplateMethod;

interface BurgerInterface
{
    public function addBread();
    public function addProtein();
    public function addCheese();
    public function addGrassGreenLeaves();
    public function addSauce();
    public function getIngredients(): array;
}
