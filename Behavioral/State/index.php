<?php

namespace DesignPatterns\Behavioral\State;

include '../../vendor/autoload.php';

try {
    // Create order
    $order = new Order(new CreatedOrderState());

    // Ship the order
    $order->ship();
    echo $order;

    // Deliver the order
    $order->deliver();
    echo $order;

    // Now try an invalid transition
    $order->ship();

} catch (IllegalStateTransitionException $e) {
    echo $e->getMessage();
}
