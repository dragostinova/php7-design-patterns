<?php

namespace DesignPatterns\Creational\FactoryMethod;

interface ReportInterface
{
    public function export(array $data): string;
}
