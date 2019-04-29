<?php

namespace DesignPatterns\Behavioral\Strategy;

class Context
{
    private $strategy;

    public function __construct(StrategyInterface $strategy)
    {
        $this->strategy = $strategy;
    }

    public function setStrategy(StrategyInterface $strategy)
    {
        $this->strategy = $strategy;
    }

    public function formatText(string $text): string
    {
        return $this->strategy->format($text);
    }
}
