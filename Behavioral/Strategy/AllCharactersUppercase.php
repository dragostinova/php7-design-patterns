<?php

namespace DesignPatterns\Behavioral\Strategy;

class AllCharactersUppercase implements StrategyInterface
{
    public function format(string $text): string
    {
        return strtoupper($text);
    }
}
