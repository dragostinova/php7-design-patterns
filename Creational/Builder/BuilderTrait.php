<?php

namespace DesignPatterns\Creational\Builder;

trait BuilderTrait
{
    private $vehicle;

    public function setDoor(int $numDoor)
    {
        $this->vehicle->door = $numDoor;
    }

    public function setSeat(int $numSeat)
    {
        $this->vehicle->seat = $numSeat;
    }

    public function setEngine(bool $engine)
    {
        $this->vehicle->engine = $engine;
    }

    public function setRechargeableBattery(bool $battery)
    {
        $this->vehicle->battery = $battery;
    }

    public function getVehicle(): Vehicle
    {
        return $this->vehicle;
    }
}
