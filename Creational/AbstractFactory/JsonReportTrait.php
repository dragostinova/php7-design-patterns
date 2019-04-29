<?php

namespace DesignPatterns\Creational\AbstractFactory;

trait JsonReportTrait
{
    public function export(array $data): string
    {
    	return json_encode($data);
    }
}