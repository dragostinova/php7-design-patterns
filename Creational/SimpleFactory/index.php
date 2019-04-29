<?php

namespace DesignPatterns\Creational\SimpleFactory;

include('../../vendor/autoload.php');

$data = [
    ['Bradley Cooper', 'A Star Is Born'],
    ['Peter Farrelly', 'Green Book'],
    ['Sean Anders', 'Instant Family'],
];

$reportFactory = new ReportFactory();

$report = $reportFactory->create('json');
echo $report->export($data);

$report = $reportFactory->create('csv');
echo $report->export($data);