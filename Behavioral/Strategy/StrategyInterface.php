<?php

namespace DesignPatterns\Behavioral\Strategy;

interface StrategyInterface
{
    public function format(string $text): string;
}
