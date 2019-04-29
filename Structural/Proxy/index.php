<?php

namespace DesignPatterns\Structural\Proxy;

include '../../vendor/autoload.php';


$bankAccount = new ProxyBankAccount();

// Transactions for years ago
$bankAccount->deposit(900);
$bankAccount->deposit(2100);
$bankAccount->deposit(-500);
$bankAccount->deposit(1500);

// The balance is calculated and saved in cache
echo $bankAccount->getBalance();

// The new transactions are not approved yet, so it will not change the balance
$bankAccount->deposit(1500);

// The previously calculated balance is returned without re-calculating it
echo $bankAccount->getBalance();

