<?php

namespace DesignPatterns\Behavioral\Memento;

interface MementoInterface
{
    public function save(StateInterface $state);

    public function undo(): StateInterface;

    public function restore(int $level): StateInterface;
}
