<?php

namespace DesignPatterns\Creational\AbstractFactory;

class JsonShipperReport implements ReportInterface
{
    public function export(array $data): string
    {
        return json_encode($data);
    }
}