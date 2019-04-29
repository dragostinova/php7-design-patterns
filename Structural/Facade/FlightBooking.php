<?php

namespace DesignPatterns\Structural\Facade;

class FlightBooking
{
    public function book(string $startDate, string $endDate)
    {
        echo 'A round-trip flight is booked for ' . $startDate . ' - ' . $endDate . PHP_EOL;
    }
}
