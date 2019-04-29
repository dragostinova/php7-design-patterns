<?php

namespace DesignPatterns\Creational\AbstractFactory;

class CsvCarrierReport implements ReportInterface
{
    use CsvReportTrait;

    private $fileName = 'carriers.csv';
}