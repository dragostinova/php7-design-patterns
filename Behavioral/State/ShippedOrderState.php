<?php

namespace DesignPatterns\Behavioral\State;

class ShippedOrderState implements OrderStateInterface
{
    use OrderStateTrait;

    private $name = 'shipped';

    public function deliver(): OrderStateInterface
    {
        return new DeliveredOrderState();
    }
}
