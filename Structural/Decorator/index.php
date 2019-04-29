<?php

namespace DesignPatterns\Structural\Decorator;

include '../../vendor/autoload.php';

$car = new CarPricing();
echo $car->getDescription() . ' $' . $car->calculatePrice() . '<br />';

$autopilot = new Autopilot($car);
echo $autopilot->getDescription() . ' $' . $autopilot->calculatePrice() . '<br />';

$navigation = new Navigation($autopilot);
echo $navigation->getDescription() . ' $' . $navigation->calculatePrice() . '<br />';
