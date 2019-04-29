<?php

namespace DesignPatterns\Tests\Structural;

use DesignPatterns\Behavioral\Observer\Load;
use DesignPatterns\Behavioral\Observer\Carrier;
use PHPUnit\Framework\TestCase;

final class ObserverTest extends TestCase
{
    private $subject;
    private $observer;

    public function setUp()
    {
        $this->subject = new Load();
        $this->observer = new Carrier();
    }

    public function testSubjectInstance()
    {
         $this->assertInstanceOf(\SplSubject::class, $this->subject);
    }

    public function testObserverInstance()
    {
         $this->assertInstanceOf(\SplObserver::class, $this->observer);
    }

    public function testAttachObserver()
    {
        $this->subject->attach($this->observer);
        $observers = $this->subject->getObservers();

        $this->assertCount(1, $observers);

        foreach ($observers as $observer) {
            $this->assertInstanceOf(\SplObserver::class, $observer);
        }
    }

    public function testDetachObserver()
    {
        $this->subject->attach($this->observer);
        $this->subject->detach($this->observer);
        $observers = $this->subject->getObservers();

        $this->assertCount(0, $observers);
    }

    public function testNotifyObserver()
    {
        $this->subject->attach($this->observer);

        $loadTitle = 'test';
        $this->expectOutputString('New Load ' . $loadTitle . ' was posted in the market place.');

        $this->subject->create($loadTitle);
    }
}
