<?php

namespace DesignPatterns\Creational\SimpleFactory;

class CsvReport implements ReportInterface
{
    private $fileName = 'file.csv';

    public function export(array $data): string
    {
        $file = fopen(__DIR__ . '/' . $this->fileName, 'w');

        foreach ($data as $fields) {
            fputcsv($file, $fields, chr(9));
        }

        fclose($file);

        return "<a href='" . $_SERVER['REQUEST_URI'] . $this->fileName ."'>file.csv</a>";
    }
}