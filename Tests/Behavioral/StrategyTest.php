<?php

namespace DesignPatterns\Tests\Structural;

use DesignPatterns\Behavioral\Strategy\Context;
use DesignPatterns\Behavioral\Strategy\{AllCharactersUppercase, FirstCharacterUppercase};
use PHPUnit\Framework\TestCase;

final class StrategyTest extends TestCase
{
    public function testFirstCharacterUppercaseStrategy()
    {
        $text = 'lorem ipsum';
        $context = new Context(new FirstCharacterUppercase());

        $this->assertSame(ucfirst($text), $context->formatText($text));
    }

    public function testAllCharactersUppercaseStrategy()
    {
        $text = 'lorem ipsum';
        $context = new Context(new AllCharactersUppercase());

        $this->assertSame(strtoupper($text), $context->formatText($text));
    }
}
