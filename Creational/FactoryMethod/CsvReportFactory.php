<?php

namespace DesignPatterns\Creational\FactoryMethod;

final class CsvReportFactory implements ReportFactoryInterface
{
    public function create(): ReportInterface
    {
        return new CsvReport();
    }
}
