<?php

namespace DesignPatterns\Creational\AbstractFactory;

include('../../vendor/autoload.php');

$data = [
    'carriers' => [
        'John Doe',
        'Maxwell Weeks',
        'Alex McConnell',
    ],
    'shippers' => [
        'Eve Harlow',
        'Conner McDermott',
        'Robbie Wahlberg',
        'Sarah Shlesinger ',
        'Julie Hagerty',
        'Eve Bierman',
    ],
];

$reportFactory = new ReportAbstractFactory($data);

$jsonFactory = new JsonReportFactory();
echo $reportFactory->renderReport($jsonFactory);

$csvFactory = new CsvReportFactory();
echo $reportFactory->renderReport($csvFactory);