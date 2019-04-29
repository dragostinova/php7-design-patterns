<?php

namespace DesignPatterns\Tests\Structural;

use DesignPatterns\Structural\Proxy\ProxyBankAccount;
use PHPUnit\Framework\TestCase;

final class ProxyTest extends TestCase
{
    public function testCachedBalance()
    {
        $bankAccount = new ProxyBankAccount();
        $bankAccount->deposit(900);
        $bankAccount->deposit(2100);
        $bankAccount->deposit(-500);
        $bankAccount->deposit(1500);

        $this->assertSame(4000, $bankAccount->getBalance());

        $bankAccount->deposit(1500);

        $this->assertSame(4000, $bankAccount->getBalance());
    }
}
