<?php

namespace DesignPatterns\Creational\FactoryMethod;

class JsonReport implements ReportInterface
{
    public function export(array $data): string
    {
        return json_encode($data);
    }
}
