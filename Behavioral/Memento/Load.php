<?php

namespace DesignPatterns\Behavioral\Memento;

class Load
{
    protected $memento;
    protected $currentState;

    public function __construct(MementoInterface $memento)
    {
        $this->memento = $memento;
    }

    /**
     * Change and save the load state
     */
    public function pickup()
    {
        $this->currentState = new State(State::STATE_PICKUP);
        $this->save();
    }

    /**
     * Change and save the load state
     */
    public function enroute()
    {
        $this->currentState = new State(State::STATE_ENTOUTE);
        $this->save();
    }

    /**
     * Change and save the load state
     */
    public function deliver()
    {
        $this->currentState = new State(State::STATE_DELIVER);
        $this->save();
    }

    /**
     * Save the load state
     */
    public function save()
    {
        $this->memento->save(clone $this->currentState);
    }

    /**
     * Restore the previous state of the load
     */
    public function undo()
    {
        $this->currentState = $this->memento->undo();
    }

    /**
     * Restore the a state of the load
     */
    public function restore(int $level)
    {
        $this->currentState = $this->memento->restore($level);
    }

    /**
     * Return the current state of the load
     */
    public function getCurrentState(): string
    {
        return $this->currentState->getState();
    }

}
