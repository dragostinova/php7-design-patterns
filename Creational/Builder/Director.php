<?php

namespace DesignPatterns\Creational\Builder;

class Director
{
    public static function createGasVehicle(BuilderInterface $builder): Vehicle
    {
        $builder->setDoor(2);
        $builder->setSeat(2);
        $builder->setEngine(true);
        $builder->setRechargeableBattery(false);

        return $builder->getVehicle();
    }

    public static function createElectricVehicle(BuilderInterface $builder): Vehicle
    {
        $builder->setDoor(2);
        $builder->setSeat(2);
        $builder->setEngine(false);
        $builder->setRechargeableBattery(true);

        return $builder->getVehicle();
    }

    public static function createHybridVehicle(BuilderInterface $builder): Vehicle
    {
        $builder->setDoor(2);
        $builder->setSeat(2);
        $builder->setEngine(true);
        $builder->setRechargeableBattery(true);

        return $builder->getVehicle();
    }
}
