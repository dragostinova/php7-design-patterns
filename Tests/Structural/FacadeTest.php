<?php

namespace DesignPatterns\Tests\Structural;

use DesignPatterns\Structural\Facade\TravelPackageBookingFacade;
use PHPUnit\Framework\TestCase;

final class FacadeTest extends TestCase
{
    public function testDrawRedCircle()
    {
        $travel = new TravelPackageBookingFacade();

        $startDate = '2018-12-25';
        $endDate = '2019-01-05';
        $expectedString = 'A round-trip flight is booked for ' . $startDate . ' - ' . $endDate . PHP_EOL
        . 'A hotel room is booked for ' . $startDate . ' - ' . $endDate . PHP_EOL
        . 'A taxi is booked for ' . $startDate . '' . PHP_EOL
        . 'A taxi is booked for ' . $endDate . PHP_EOL;
        $this->expectOutputString($expectedString);

        $travel->book($startDate, $endDate);
    }
}
