<?php

namespace DesignPatterns\Tests\Creational;

use DesignPatterns\Creational\AbstractFactory\ReportAbstractFactory;
use DesignPatterns\Creational\AbstractFactory\{ReportInterface, ReportFactoryInterface};
use DesignPatterns\Creational\AbstractFactory\{JsonCarrierReport, JsonShipperReport, JsonReportFactory};
use DesignPatterns\Creational\AbstractFactory\{CsvCarrierReport, CsvShipperReport, CsvReportFactory};

use PHPUnit\Framework\TestCase;

final class AbstractFactoryTest extends TestCase
{
    public function testJsonReportFactory()
    {
        $jsonFactory = new JsonReportFactory();
        $this->assertInstanceOf(ReportFactoryInterface::class, $jsonFactory);

        $carrierReport = $jsonFactory->createCarrierReport();
        $this->assertInstanceOf(JsonCarrierReport::class, $carrierReport);
        $this->assertInstanceOf(ReportInterface::class, $carrierReport);

        $shipperReport = $jsonFactory->createShipperReport();
        $this->assertInstanceOf(JsonShipperReport::class, $shipperReport);
        $this->assertInstanceOf(ReportInterface::class, $shipperReport);

    }

    public function testCsvReportFactory()
    {
        $csvFactory = new CsvReportFactory();
        $this->assertInstanceOf(ReportFactoryInterface::class, $csvFactory);

        $carrierReport = $csvFactory->createCarrierReport();
        $this->assertInstanceOf(CsvCarrierReport::class, $carrierReport);
        $this->assertInstanceOf(ReportInterface::class, $carrierReport);

        $shipperReport = $csvFactory->createShipperReport();
        $this->assertInstanceOf(CsvShipperReport::class, $shipperReport);
        $this->assertInstanceOf(ReportInterface::class, $shipperReport);
    }

    public function testRenderReport()
    {
        $data = [
            'carriers' => [
                'John Doe',
                'Maxwell Weeks',
            ],
            'shippers' => [
                'Eve Harlow',
                'Conner McDermott',
                'Robbie Wahlberg',
            ],
        ];

        $reportFactory = new ReportAbstractFactory($data);
        $jsonFactory = new JsonReportFactory();

        $expectedString = json_encode($data['carriers']) . json_encode($data['shippers']);
        $this->expectOutputString($expectedString);

        $reportFactory->renderReport($jsonFactory);
    }
}