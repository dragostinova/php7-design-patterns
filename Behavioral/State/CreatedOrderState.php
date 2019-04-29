<?php

namespace DesignPatterns\Behavioral\State;

class CreatedOrderState implements OrderStateInterface
{
    use OrderStateTrait;

    private $name = 'created';

    public function ship(): OrderStateInterface
    {
        return new ShippedOrderState();
    }
}
