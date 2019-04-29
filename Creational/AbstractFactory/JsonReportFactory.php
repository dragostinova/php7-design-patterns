<?php

namespace DesignPatterns\Creational\AbstractFactory;

final class JsonReportFactory implements ReportFactoryInterface
{
    public function createCarrierReport(): ReportInterface
    {
        return new JsonCarrierReport();
    }

    public function createShipperReport(): ReportInterface
    {
        return new JsonShipperReport();
    }
}
