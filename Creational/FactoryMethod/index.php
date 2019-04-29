<?php

namespace DesignPatterns\Creational\FactoryMethod;

include '../../vendor/autoload.php';

$data = [
    ['Bradley Cooper', 'A Star Is Born'],
    ['Peter Farrelly', 'Green Book'],
    ['Sean Anders', 'Instant Family'],
];

$josnReportFactory = new JsonReportFactory();
$jsonReport = $josnReportFactory->create();
echo $jsonReport->export($data);

$csvReportFactory = new CsvReportFactory();
$csvReport = $csvReportFactory->create();
echo $csvReport->export($data);
