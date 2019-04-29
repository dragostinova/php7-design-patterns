<?php

namespace DesignPatterns\Creational\AbstractFactory;

interface ReportFactoryInterface
{
    public function createCarrierReport(): ReportInterface;

    public function createShipperReport(): ReportInterface;
}