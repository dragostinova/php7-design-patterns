<?php

namespace DesignPatterns\Creational\AbstractFactory;

class CsvShipperReport implements ReportInterface
{
    use CsvReportTrait;

    private $fileName = 'shippers.csv';
}