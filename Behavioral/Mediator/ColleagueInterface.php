<?php

namespace DesignPatterns\Behavioral\Mediator;

interface ColleagueInterface
{
    public function setMediator(MediatorInterface $mediator);

    public function buyStock(string $stock, int $shares): bool;

    public function sellStock(string $stock, int $shares): bool;

    public function notify(string $message);

    public function getName(): string;
}
