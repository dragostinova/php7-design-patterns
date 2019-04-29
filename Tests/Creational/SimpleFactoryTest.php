<?php

namespace DesignPatterns\Tests\Creational;

use DesignPatterns\Creational\SimpleFactory\CsvReport;
use DesignPatterns\Creational\SimpleFactory\JsonReport;
use DesignPatterns\Creational\SimpleFactory\ReportFactory;
use DesignPatterns\Creational\SimpleFactory\ReportInterface;
use PHPUnit\Framework\TestCase;

final class SimpleFactoryTest extends TestCase
{
    public function testFactoryCreateJsonReport()
    {
        $reportFactory = new ReportFactory();
        $jsonReport = $reportFactory->create('json');

        $this->assertInstanceOf(JsonReport::class, $jsonReport);
        $this->assertInstanceOf(ReportInterface::class, $jsonReport);
    }

    public function testJsonReportData()
    {
        $reportFactory = new ReportFactory();
        $jsonReport = $reportFactory->create('json');

        $data = [
            'Bradley Cooper' => 'A Star Is Born',
            'Peter Farrelly' => 'Green Book',
            'Sean Anders' => 'Instant Family',
        ];
        $expectedString = json_encode($data);
        $jsonString = $jsonReport->export($data);

        $this->assertJsonStringEqualsJsonString($expectedString, $jsonString);
    }

    public function testFactoryCreateCsvReport()
    {
        $reportFactory = new ReportFactory();
        $csvReport = $reportFactory->create('csv');

        $this->assertInstanceOf(CsvReport::class, $csvReport);
        $this->assertInstanceOf(ReportInterface::class, $csvReport);
    }
}
