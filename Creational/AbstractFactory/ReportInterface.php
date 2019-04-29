<?php

namespace DesignPatterns\Creational\AbstractFactory;

interface ReportInterface
{
    public function export(array $data): string;
}