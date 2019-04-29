<?php

namespace DesignPatterns\Creational\FactoryMethod;

interface ReportFactoryInterface
{
    public function create(): ReportInterface;
}
