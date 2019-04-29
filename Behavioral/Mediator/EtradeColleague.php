<?php

namespace DesignPatterns\Behavioral\Mediator;

class EtradeColleague extends AbstractColleague implements ColleagueInterface
{
    private $name = 'Etrade';

    public function getName(): string
    {
        return $this->name;
    }
}
