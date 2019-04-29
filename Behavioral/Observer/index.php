<?php

namespace DesignPatterns\Behavioral\Observer;

include '../../vendor/autoload.php';

$carrier = new Carrier();
$load = new Load();
$load->attach($carrier);
$load->create('from San Diego to San Francisco');
