<?php

namespace DesignPatterns\Behavioral\State;

trait OrderStateTrait
{
    public function create()
    {
        throw new IllegalStateTransitionException('The order cannot be created');
    }

    public function ship()
    {
        throw new IllegalStateTransitionException('The order cannot be shipped');
    }

    public function deliver()
    {
        throw new IllegalStateTransitionException('The order cannot be delivered');
    }

    public function getName(): string
    {
        return $this->name;
    }
}
