<?php

namespace DesignPatterns\Creational\Builder;

include '../../vendor/autoload.php';

$carBuilder = new CarBuilder();
echo Director::createGasVehicle($carBuilder);
echo Director::createElectricVehicle($carBuilder);
echo Director::createHybridVehicle($carBuilder);

$truckBuilder = new TruckBuilder();
echo Director::createGasVehicle($truckBuilder);
echo Director::createElectricVehicle($truckBuilder);
echo Director::createHybridVehicle($truckBuilder);
