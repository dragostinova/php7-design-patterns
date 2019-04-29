<?php

namespace DesignPatterns\Behavioral\Mediator;

class AllyInvestColleague extends AbstractColleague implements ColleagueInterface
{
    private $name = 'Ally Invest';

    public function getName(): string
    {
        return $this->name;
    }
}
