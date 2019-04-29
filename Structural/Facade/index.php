<?php

namespace DesignPatterns\Structural\Facade;

include '../../vendor/autoload.php';

$travel = new TravelPackageBookingFacade();
$travel->book('2018-12-25', '2019-01-05');