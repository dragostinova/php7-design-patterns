<?php
namespace DesignPatterns\Behavioral\TemplateMethod;

include '../../vendor/autoload.php';

$burger = new ChickenBurger();
echo implode(', ', $burger->getIngredients());

$burger = new VeggieBurger();
echo implode(', ', $burger->getIngredients());

