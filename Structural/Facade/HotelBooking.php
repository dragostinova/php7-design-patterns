<?php

namespace DesignPatterns\Structural\Facade;

class HotelBooking
{
    public function book(string $startDate, string $endDate)
    {
        echo 'A hotel room is booked for ' . $startDate . ' - ' . $endDate . PHP_EOL;
    }
}
