<?php

namespace DesignPatterns\Behavioral\Mediator;

abstract class AbstractColleague
{
    protected $mediator;

    public function setMediator(MediatorInterface $mediator)
    {
        $this->mediator = $mediator;
    }

    public function buyStock(string $stock, int $shares): bool
    {
        return $this->mediator->buyStock($stock, $shares, $this);
    }

    public function sellStock(string $stock, int $shares): bool
    {
        return $this->mediator->sellStock($stock, $shares, $this);
    }

    public function notify(string $message)
    {
        echo $message . PHP_EOL;
    }

    abstract public function getName(): string;
}
