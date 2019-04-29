<?php

namespace DesignPatterns\Behavioral\Mediator;

interface MediatorInterface
{
    public function addColleague(ColleagueInterface $colleague);

    public function buyStock(string $stock, int $shares, ColleagueInterface $colleague): bool;

    public function sellStock(string $stock, int $shares, ColleagueInterface $colleague): bool;

    public function getStockOffers(): array;
}
