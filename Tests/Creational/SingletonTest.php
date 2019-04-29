<?php

namespace DesignPatterns\Tests\Creational;

use DesignPatterns\Creational\Singleton\Singleton;
use PHPUnit\Framework\TestCase;

final class SingletonTest extends TestCase
{
    public function testSingletonInstance()
    {
        $firstInstance = Singleton::getInstance();
        $secondInstance = Singleton::getInstance();

        $this->assertInstanceOf(Singleton::class, $firstInstance);
        $this->assertSame($firstInstance, $secondInstance);
    }
}