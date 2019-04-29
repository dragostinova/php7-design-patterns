<?php

namespace DesignPatterns\Behavioral\Memento;

class State implements StateInterface
{
    const STATE_PICKUP = 'pick up';
    const STATE_ENTOUTE = 'en route';
    const STATE_DELIVER = 'deliver';

    protected $validStates = [
        self::STATE_PICKUP,
        self::STATE_ENTOUTE,
        self::STATE_DELIVER,
    ];

    protected $state;

    public function __construct(string $state)
    {
        if (in_array($state, $this->validStates)) {
            $this->state = $state;
        }
    }

    public function getState(): string
    {
        return $this->state;
    }
}
