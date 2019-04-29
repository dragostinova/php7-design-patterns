<?php

namespace DesignPatterns\Behavioral\ChainOfResponsibility;

interface HandlerInterface
{
    public function setNext(HandlerInterface $handler);

    public function handle(RequestInterface $request): string;
}
