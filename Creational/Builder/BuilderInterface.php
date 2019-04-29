<?php

namespace DesignPatterns\Creational\Builder;

interface BuilderInterface
{
    public function setDoor(int $numDoor);
    public function setSeat(int $numSeat);
    public function setEngine(bool $engine);
    public function setRechargeableBattery(bool $battery);
    public function getVehicle(): Vehicle;
}
