<?php

namespace DesignPatterns\Behavioral\Memento;

class Memento implements MementoInterface
{
    protected $state = [];

    /**
     * Store the state
     */
    public function save(StateInterface $state)
    {
        $this->state[] = $state;
    }

    /**
     * Restore the previous state
     */
    public function undo(): StateInterface
    {
        $previousState = count($this->state) - 2;

        if ($previousState >= 0) {
            return $this->state[$previousState];
        }

        return $this->state[0];
    }

    /**
     * Restore a state
     */
    public function restore(int $level): StateInterface
    {
        if (isset($this->state[$level])) {
            return $this->state[$level];
        }

        return $this->state[count($this->state) - 1];
    }
}
