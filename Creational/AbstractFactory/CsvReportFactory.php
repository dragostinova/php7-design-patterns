<?php

namespace DesignPatterns\Creational\AbstractFactory;

final class CsvReportFactory implements ReportFactoryInterface
{
    public function createCarrierReport(): ReportInterface
    {
        return new CsvCarrierReport();
    }

    public function createShipperReport(): ReportInterface
    {
        return new CsvShipperReport();
    }
}
