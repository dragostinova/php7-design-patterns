<?php

namespace DesignPatterns\Creational\AbstractFactory;

trait CsvReportTrait
{
    public function export(array $data): string
    {
    	$file = fopen(__DIR__ . '/' . $this->fileName, 'w');

        foreach ($data as $fields) {
            fputcsv($file, (array) $fields, chr(9));
        }

        fclose($file);

        return '<a href="' . $_SERVER['REQUEST_URI'] . $this->fileName . '">' . $this->fileName . '</a>';
    }
}