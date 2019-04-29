<?php

namespace DesignPatterns\Behavioral\Mediator;

class StockOffer
{
    public static $buyType = 1;
    public static $sellType = 2;

    protected $type;
    protected $code;
    protected $shares;
    protected $broker;

    public function __construct(string $type, string $code, int $shares, ColleagueInterface $broker)
    {
        $this->type = $type;
        $this->code = $code;
        $this->shares = $shares;
        $this->broker = $broker;
    }

    public function getType(): string
    {
        return $this->type;
    }

    public function getCode(): string
    {
        return $this->code;
    }

    public function getShares(): int
    {
        return $this->shares;
    }

    public function getBroker(): ColleagueInterface
    {
        return $this->broker;
    }
}
