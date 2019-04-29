<?php

namespace DesignPatterns\Creational\AbstractFactory;

class JsonCarrierReport implements ReportInterface
{
    use JsonReportTrait;
}