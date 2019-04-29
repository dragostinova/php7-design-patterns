<?php

namespace DesignPatterns\Structural\Proxy;

class BankAccount implements BankAccountInterface
{
    protected $transactions = [];

    public function deposit(int $amount)
    {
        $this->transactions[] = $amount;
    }

    public function calculateBalance(): int
    {
        return array_sum($this->transactions);
    }
}
