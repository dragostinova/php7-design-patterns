<?php

namespace DesignPatterns\Behavioral\ChainOfResponsibility;

interface RequestInterface
{
    public function getType(): string;
}
