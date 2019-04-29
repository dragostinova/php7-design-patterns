<?php

namespace DesignPatterns\Behavioral\State;

class DeliveredOrderState implements OrderStateInterface
{
    use OrderStateTrait;

    private $name = 'delivered';
}
