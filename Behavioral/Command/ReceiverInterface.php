<?php

namespace DesignPatterns\Behavioral\Command;

interface ReceiverInterface
{
    public function turnOn(): string;
    public function turnOff(): string;
}
