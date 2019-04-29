<?php

namespace DesignPatterns\Behavioral\Strategy;

class FirstCharacterUppercase implements StrategyInterface
{
    public function format(string $text): string
    {
        return ucfirst($text);
    }
}
