<?php

namespace DesignPatterns\Tests\Creational;

use DesignPatterns\Creational\Prototype\{PhpBookPrototype, JavaBookPrototype};
use PHPUnit\Framework\TestCase;

class PrototypeTest extends TestCase
{
    public function testCanClonePhpBook()
    {
        $phpBookPrototype = new PhpBookPrototype();

        $book1 = clone $phpBookPrototype;
        $book1->setTitle('Mastering PHP Design Patterns');
        $book1->setAuthor('Junade Ali');

        $this->assertInstanceOf(PhpBookPrototype::class, $book1);
        $this->assertEquals('PHP', $book1->getTopic());

        $book2 = clone $phpBookPrototype;
        $book2->setTitle('Cracking the Coding Interview: 189 Programming Questions and Solutions');
        $book2->setAuthor('Gayle Laakmann McDowell');

        $this->assertInstanceOf(PhpBookPrototype::class, $book2);
        $this->assertEquals('Gayle Laakmann McDowell', $book2->getAuthor());
    }

    public function testCanCloneJavaBook()
    {
        $javaBookPrototype = new JavaBookPrototype();

        $book = clone $javaBookPrototype;
        $book->setTitle('Java Design Pattern Essentials');
        $book->setAuthor('Tony Bevis');

        $this->assertInstanceOf(JavaBookPrototype::class, $book);
        $this->assertEquals('Java', $book->getTopic());
    }
}