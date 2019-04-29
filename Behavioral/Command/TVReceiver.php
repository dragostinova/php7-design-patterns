<?php

namespace DesignPatterns\Behavioral\Command;

/**
 * The Receiver classes contain some important business logic. They know how to
 * perform all kinds of operations, associated with carrying out a request.
 */
class TVReceiver implements ReceiverInterface
{
    public function turnOn(): string
    {
        return 'Turn on the TV';
    }

    public function turnOff(): string
    {
        return 'Turn off the TV';
    }
}
