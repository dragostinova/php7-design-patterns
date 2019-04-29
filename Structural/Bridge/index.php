<?php

namespace DesignPatterns\Structural\Bridge;

include '../../vendor/autoload.php';

$red = new Red();
$green = new Green();

$redCircle = new Circle($red, 50, 50, 50);
$greenCircle = new Circle($green, 50, 50, 50);
$redSquare = new Square($red, 100);
$greenSquare = new Square($green, 100);

echo $redCircle->draw();
echo $greenCircle->draw();
echo $redSquare->draw();
echo $greenSquare->draw();
