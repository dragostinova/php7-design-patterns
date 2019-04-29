<?php

namespace DesignPatterns\Behavioral\Memento;

include_once '../../vendor/autoload.php';

// Create a load and change the state
$load = new Load(new Memento());
$load->pickup();
$load->enroute();
$load->deliver();

// Check the last state of the load
echo $load->getCurrentState();

// Undo the previous state of the load
$load->undo();
echo $load->getCurrentState();

// Restore the first state of the load
$load->restore(0);
echo $load->getCurrentState();
