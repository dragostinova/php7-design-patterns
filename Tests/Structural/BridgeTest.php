<?php

namespace DesignPatterns\Tests\Structural;

use DesignPatterns\Structural\Bridge\{Circle, Square};
use DesignPatterns\Structural\Bridge\{Green, Red};
use DesignPatterns\Structural\Bridge\{ColorInterface, ShapeInterface};
use PHPUnit\Framework\TestCase;

final class BridgeTest extends TestCase
{
    public function testDrawRedCircle()
    {
        $red = new Red();
        $redCircle = new Circle($red, 50, 50, 50);

        $this->assertInstanceOf(Red::class, $red);
        $this->assertInstanceOf(ColorInterface::class, $red);

        $this->assertInstanceOf(Circle::class, $redCircle);
        $this->assertInstanceOf(ShapeInterface::class, $redCircle);

        $this->assertSame('<svg width="200" height="200"><circle cx="50" cy="50" r="50" fill="red" /></svg>', $redCircle->draw());
    }

    public function testDrawGreenCircle()
    {
        $red = new Green();
        $redCircle = new Circle($red, 50, 50, 50);

        $this->assertInstanceOf(Green::class, $red);
        $this->assertInstanceOf(ColorInterface::class, $red);

        $this->assertInstanceOf(Circle::class, $redCircle);
        $this->assertInstanceOf(ShapeInterface::class, $redCircle);

        $this->assertSame('<svg width="200" height="200"><circle cx="50" cy="50" r="50" fill="green" /></svg>', $redCircle->draw());
    }
}
