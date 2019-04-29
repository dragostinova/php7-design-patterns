<?php

namespace DesignPatterns\Tests\Structural;

use DesignPatterns\Behavioral\Command\Invoker;
use DesignPatterns\Behavioral\Command\{TVReceiver, RadioReceiver};
use DesignPatterns\Behavioral\Command\{TurnOn, TurnOff};
use DesignPatterns\Behavioral\Command\{ReceiverInterface, CommandInterface};
use PHPUnit\Framework\TestCase;

final class CommandTest extends TestCase
{
    public function testTurnOnTVCommand()
    {
        $invoker = new Invoker();

        // TV Receiver
        $tv = new TVReceiver();

        // Turn on the TV
        $command = new TurnOn($tv);
        $invoker->setCommand($command);

        $this->assertInstanceOf(Invoker::class, $invoker);
        $this->assertInstanceOf(ReceiverInterface::class, $tv);
        $this->assertInstanceOf(CommandInterface::class, $command);
        $this->assertSame('Turn on the TV', $invoker->run());
    }

    public function testTurnOffTVCommand()
    {
        $invoker = new Invoker();

        // TV Receiver
        $tv = new TVReceiver();

        // Turn off the TV
        $command = new TurnOff($tv);
        $invoker->setCommand($command);

        $this->assertInstanceOf(Invoker::class, $invoker);
        $this->assertInstanceOf(ReceiverInterface::class, $tv);
        $this->assertInstanceOf(CommandInterface::class, $command);
        $this->assertSame('Turn off the TV', $invoker->run());
    }

    public function testTurnOnRadioCommand()
    {
        $invoker = new Invoker();

        // Radio Receiver
        $radio = new RadioReceiver();

        // Turn on the Radio
        $command = new TurnOn($radio);
        $invoker->setCommand($command);

        $this->assertInstanceOf(Invoker::class, $invoker);
        $this->assertInstanceOf(ReceiverInterface::class, $radio);
        $this->assertInstanceOf(CommandInterface::class, $command);
        $this->assertSame('Turn on the Radio', $invoker->run());
    }

    public function testTurnOffRadioCommand()
    {
        $invoker = new Invoker();

        // Radio Receiver
        $radio = new RadioReceiver();

        // Turn on the Radio
        $command = new TurnOff($radio);
        $invoker->setCommand($command);

        $this->assertInstanceOf(Invoker::class, $invoker);
        $this->assertInstanceOf(ReceiverInterface::class, $radio);
        $this->assertInstanceOf(CommandInterface::class, $command);
        $this->assertSame('Turn off the Radio', $invoker->run());
    }
}
