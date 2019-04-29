<?php

namespace DesignPatterns\Creational\AbstractFactory;

final class ReportAbstractFactory
{
    private $data;

    public function __construct(array $data)
    {
        $this->data = $data;
    }

    public function renderReport(ReportFactoryInterface $factory)
    {
        $carrierReport = $factory->createCarrierReport();
        echo $carrierReport->export($this->data['carriers']);

        $shipperReport = $factory->createShipperReport();
        echo $shipperReport->export($this->data['shippers']);
    }
}
