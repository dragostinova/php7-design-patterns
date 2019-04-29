<?php

namespace DesignPatterns\Creational\SimpleFactory;

interface ReportInterface
{
    public function export(array $data): string;
}