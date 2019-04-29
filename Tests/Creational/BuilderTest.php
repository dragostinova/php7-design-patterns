<?php

namespace DesignPatterns\Tests\Creational;

use DesignPatterns\Creational\Builder\{Car, Truck, Vehicle};
use DesignPatterns\Creational\Builder\{CarBuilder, TruckBuilder, BuilderInterface};
use DesignPatterns\Creational\Builder\Director;
use PHPUnit\Framework\TestCase;

class BuilderTest extends TestCase
{
    public function testCanBuildCar()
    {
        $carBuilder = new CarBuilder();
        $car = Director::createGasVehicle($carBuilder);

        $this->assertInstanceOf(BuilderInterface::class, $carBuilder);
        $this->assertInstanceOf(Car::class, $car);
        $this->assertInstanceOf(Vehicle::class, $car);
    }

    public function testCanBuildTruck()
    {
        $truckBuilder = new TruckBuilder();
        $truck = Director::createGasVehicle($truckBuilder);

        $this->assertInstanceOf(BuilderInterface::class, $truckBuilder);
        $this->assertInstanceOf(Truck::class, $truck);
        $this->assertInstanceOf(Vehicle::class, $truck);
    }

    public function testCanBuildGasCar()
    {
        $carBuilder = new CarBuilder();
        $car = Director::createGasVehicle($carBuilder);

        $this->assertTrue($car->engine);
        $this->assertFalse($car->battery);
    }

    public function testCanBuildElectricCar()
    {
        $carBuilder = new CarBuilder();
        $car = Director::createElectricVehicle($carBuilder);

        $this->assertFalse($car->engine);
        $this->assertTrue($car->battery);
    }
}
