<?php

namespace DesignPatterns\Tests\Structural;

use DesignPatterns\Structural\Adapter\{Book, Kindle, EBookAdapter, BookInterface};
use PHPUnit\Framework\TestCase;

final class AdapterTest extends TestCase
{
    public function testTurnPageOnBook()
    {
        $book = new Book();
        $this->assertInstanceOf(BookInterface::class, $book);

        $book->choose('Learning PHP 7', 125);
        $book->open(25);

        $book->nextPage();
        $this->assertSame(26, $book->getPage());

        $book->previousPage();
        $this->assertSame(25, $book->getPage());
    }

    public function testTurnPageOnEBook()
    {
        $kindle = new Kindle();
        $eBook = new EBookAdapter($kindle);
        $this->assertInstanceOf(BookInterface::class, $eBook);

        $eBook->choose('The Crypto Crash Course', 250);
        $eBook->open(25);

        $eBook->nextPage();
        $this->assertSame(26, $eBook->getPage());

        $eBook->previousPage();
        $this->assertSame(25, $eBook->getPage());
    }
}