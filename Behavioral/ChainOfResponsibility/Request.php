<?php

namespace DesignPatterns\Behavioral\ChainOfResponsibility;

class Request implements RequestInterface
{
    protected $type;

    public function __construct(string $type)
    {
        $this->type = $type;
    }

    public function getType(): string
    {
        return $this->type;
    }
}
