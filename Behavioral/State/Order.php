<?php

namespace DesignPatterns\Behavioral\State;

class Order
{
    protected $state;

    public function __construct(OrderStateInterface $state)
    {
        $this->setState($state);
    }

    public function create()
    {
        $this->setState($this->state->create());
    }

    public function ship()
    {
        $this->setState($this->state->ship());
    }

    public function deliver()
    {
        $this->setState($this->state->deliver());
    }

    private function setState(OrderStateInterface $state)
    {
        $this->state = $state;
    }

    public function getState(): OrderStateInterface
    {
        return $this->state;
    }

    public function __toString(): string
    {
        return $this->state->getName();
    }
}