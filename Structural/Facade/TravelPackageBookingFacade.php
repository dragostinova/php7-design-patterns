<?php

namespace DesignPatterns\Structural\Facade;

class TravelPackageBookingFacade
{

    protected $flight;
    protected $hotel;
    protected $taxi;

    public function __construct()
    {
        $this->flight = new FlightBooking();
        $this->hotel = new HotelBooking();
        $this->taxi = new TaxiBooking();
    }

    public function book($startDate, $endDate)
    {
        $this->flight->book($startDate, $endDate);
        $this->hotel->book($startDate, $endDate);
        $this->taxi->book($startDate);
        $this->taxi->book($endDate);

        return true;
    }
}