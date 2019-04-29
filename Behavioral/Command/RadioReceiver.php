<?php

namespace DesignPatterns\Behavioral\Command;

class RadioReceiver implements ReceiverInterface
{
    public function turnOn(): string
    {
        return 'Turn on the Radio';
    }

    public function turnOff(): string
    {
        return 'Turn off the Radio';
    }
}
