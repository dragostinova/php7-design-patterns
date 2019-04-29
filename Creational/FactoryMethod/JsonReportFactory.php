<?php

namespace DesignPatterns\Creational\FactoryMethod;

final class JsonReportFactory implements ReportFactoryInterface
{
    public function create(): ReportInterface
    {
        return new JsonReport();
    }
}
