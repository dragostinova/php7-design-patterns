<?php

namespace DesignPatterns\Tests\Creational;

use DesignPatterns\Creational\FactoryMethod\CsvReport;
use DesignPatterns\Creational\FactoryMethod\JsonReport;
use DesignPatterns\Creational\FactoryMethod\ReportInterface;
use DesignPatterns\Creational\FactoryMethod\CsvReportFactory;
use DesignPatterns\Creational\FactoryMethod\JsonReportFactory;
use DesignPatterns\Creational\FactoryMethod\ReportFactoryInterface;
use PHPUnit\Framework\TestCase;

final class FactoryMethodTest extends TestCase
{
    public function testJsonReportFactory()
    {
        $factory = new JsonReportFactory();
        $jsonReport = $factory->create();

        $this->assertInstanceOf(ReportFactoryInterface::class, $factory);
        $this->assertInstanceOf(ReportInterface::class, $jsonReport);
        $this->assertInstanceOf(JsonReport::class, $jsonReport);
    }

    public function testCsvReportFactory()
    {
        $factory = new CsvReportFactory();
        $jsonReport = $factory->create();

        $this->assertInstanceOf(ReportFactoryInterface::class, $factory);
        $this->assertInstanceOf(ReportInterface::class, $jsonReport);
        $this->assertInstanceOf(CsvReport::class, $jsonReport);
    }
}