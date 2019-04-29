<?php

namespace DesignPatterns\Behavioral\Command;

/**
 * The Invoker is associated with one or several commands. It sends a request to the command.
 */
class Invoker
{
    protected $command;

    public function setCommand(CommandInterface $command)
    {
        $this->command = $command;
    }

    /**
     * The Invoker does not depend on concrete command or receiver classes.
     * The Invoker passes a request to a receiver indirectly, by executing a command.
     */
    public function run()
    {
        return $this->command->execute();
    }
}
