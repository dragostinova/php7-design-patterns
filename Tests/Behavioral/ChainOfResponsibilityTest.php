<?php

namespace DesignPatterns\Tests\Structural;

use DesignPatterns\Behavioral\ChainOfResponsibility\JsonHandler;
use DesignPatterns\Behavioral\ChainOfResponsibility\Request;
use DesignPatterns\Behavioral\ChainOfResponsibility\XMLHandler;
use DesignPatterns\Behavioral\ChainOfResponsibility\HandlerInterface;
use PHPUnit\Framework\TestCase;

final class ChainOfResponsibilityTest extends TestCase
{
    public function testXMLHandler()
    {
        $xml = $this->createMock('DesignPatterns\Behavioral\ChainOfResponsibility\HandlerInterface');
        $xml->method('handle')->willReturn('XML Request');

        $json = new JsonHandler();
        $json->setNext($xml);

        $this->assertInstanceOf(HandlerInterface::class, $json);
        $this->assertSame('XML Request', $json->handle(new Request('XML')));
    }

    public function testJsonHandler()
    {
        $json = $this->createMock('DesignPatterns\Behavioral\ChainOfResponsibility\HandlerInterface');
        $json->method('handle')->willReturn('Json Request');

        $xml = new XMLHandler();
        $xml->setNext($json);

        $this->assertInstanceOf(HandlerInterface::class, $xml);
        $this->assertSame('Json Request', $xml->handle(new Request('Json')));
    }
}
