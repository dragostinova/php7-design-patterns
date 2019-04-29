<?php

namespace DesignPatterns\Structural\Facade;

class TaxiBooking
{
    public function book(string $date)
    {
        echo 'A taxi is booked for ' . $date . PHP_EOL;
    }
}
