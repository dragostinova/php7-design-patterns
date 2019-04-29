<?php

namespace DesignPatterns\Behavioral\Command;

class TurnOff implements CommandInterface
{
    protected $receiver;

    public function __construct(ReceiverInterface $receiver)
    {
        $this->receiver = $receiver;
    }

    public function execute()
    {
        return $this->receiver->turnOff();
    }
}
