<?php

namespace DesignPatterns\Behavioral\ChainOfResponsibility;

include_once '../../vendor/autoload.php';

$json = new JsonHandler();
$xml = new XMLHandler();

$json->setNext($xml);
echo $json->handle(new Request('XML'));