<?php

namespace DesignPatterns\Behavioral\Command;

include '../../vendor/autoload.php';

$invoker = new Invoker();

// TV Receiver
$tv = new TVReceiver();

// Turn on the TV
$command = new TurnOn($tv);
$invoker->setCommand($command);
echo $invoker->run();

// Turn off the TV
$command = new TurnOff($tv);
$invoker->setCommand($command);
echo $invoker->run();

// Execute the same commands with Radio Receiver. Commands work with any receiver, implemented ReceiverInterface
$radio = new RadioReceiver();

// Turn on the TV
$command = new TurnOn($radio);
$invoker->setCommand($command);
echo $invoker->run();

// Turn off the TV
$command = new TurnOff($radio);
$invoker->setCommand($command);
echo $invoker->run();