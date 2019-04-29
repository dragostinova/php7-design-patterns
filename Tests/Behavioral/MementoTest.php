<?php

namespace DesignPatterns\Tests\Structural;

use DesignPatterns\Behavioral\Memento\Load;
use DesignPatterns\Behavioral\Memento\State;
use DesignPatterns\Behavioral\Memento\Memento;
use PHPUnit\Framework\TestCase;

final class MementoTest extends TestCase
{
    public function testRestoreState()
    {
        // Create a load and change the state
        $load = new Load(new Memento());
        $load->pickup();
        $load->enroute();
        $load->deliver();

        // Check the last state of the load
        $this->assertSame(State::STATE_DELIVER, $load->getCurrentState());

        // Undo the previous state of the load
        $load->undo();
        $this->assertSame(State::STATE_ENTOUTE, $load->getCurrentState());

        // Restore the first state of the load
        $load->restore(0);
        $this->assertSame(State::STATE_PICKUP, $load->getCurrentState());
    }
}
