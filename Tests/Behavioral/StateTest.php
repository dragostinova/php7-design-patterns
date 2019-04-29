<?php

namespace DesignPatterns\Tests\Structural;

use DesignPatterns\Behavioral\State\{CreatedOrderState, ShippedOrderState, DeliveredOrderState};
use DesignPatterns\Behavioral\State\Order;
use DesignPatterns\Behavioral\State\OrderStateInterface;
use PHPUnit\Framework\TestCase;

final class StateTest extends TestCase
{
    private $order;

    public function setUp()
    {
        $this->order = new Order(new CreatedOrderState());
    }

    public function testShippedOrderState()
    {
        $this->order->ship();
        $this->assertInstanceOf(OrderStateInterface::class, $this->order->getState());
        $this->assertInstanceOf(ShippedOrderState::class, $this->order->getState());
    }

    public function testDeliveredOrderState()
    {
        $this->order->ship();
        $this->order->deliver();
        $this->assertInstanceOf(OrderStateInterface::class, $this->order->getState());
        $this->assertInstanceOf(DeliveredOrderState::class, $this->order->getState());
    }

    /**
     * @expectedException DesignPatterns\Behavioral\State\IllegalStateTransitionException
     */
    public function testOrderCannotBeCreated()
    {
        $this->order->create();
    }

    /**
     * @expectedException DesignPatterns\Behavioral\State\IllegalStateTransitionException
     */
    public function testOrderCannotBeShipped()
    {
        $this->order->create();
        $this->order->ship();
        $this->order->deliver();
        $this->order->ship();
    }

    /**
     * @expectedException DesignPatterns\Behavioral\State\IllegalStateTransitionException
     */
    public function testOrderCannotBeDelivered()
    {
        $this->order->create();
        $this->order->deliver();
    }
}
