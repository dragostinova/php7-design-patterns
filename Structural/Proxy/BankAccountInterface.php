<?php

namespace DesignPatterns\Structural\Proxy;

interface BankAccountInterface
{
    public function deposit(int $amount);

    public function calculateBalance(): int;
}
