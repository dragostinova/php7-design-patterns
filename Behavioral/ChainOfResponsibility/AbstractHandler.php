<?php

namespace DesignPatterns\Behavioral\ChainOfResponsibility;

abstract class AbstractHandler implements HandlerInterface
{
    protected $handler;

    public function setNext(HandlerInterface $handler)
    {
        $this->handler = $handler;
    }

    abstract public function handle(RequestInterface $request): string;
}
