<?php

namespace DesignPatterns\Creational\SimpleFactory;

final class ReportFactory
{
    public function create(string $type): ReportInterface
    {
        $report = 'DesignPatterns\\Creational\\SimpleFactory\\' . ucwords($type) . 'Report';

        if (class_exists($report)) {
            return new $report();
        }

        // Default Report
        return new JsonReport();
    }
}