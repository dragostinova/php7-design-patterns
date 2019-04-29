<?php

namespace DesignPatterns\Behavioral\State;

interface OrderStateInterface
{
    public function create();

    public function ship();

    public function deliver();

    public function getName(): string;
}
