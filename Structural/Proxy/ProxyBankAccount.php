<?php

namespace DesignPatterns\Structural\Proxy;

class ProxyBankAccount extends BankAccount implements BankAccountInterface
{
    protected $balance;

    public function getBalance() : int
    {
        if (!$this->balance) {
            $this->balance = $this->calculateBalance();
        }

        return $this->balance;
    }
}
