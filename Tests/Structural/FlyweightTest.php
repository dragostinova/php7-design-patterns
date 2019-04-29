<?php

namespace DesignPatterns\Tests\Structural;

use DesignPatterns\Structural\Flyweight\FlyweightBookFactory;
use PHPUnit\Framework\TestCase;

final class FlyweightTest extends TestCase
{
    public function testFlyweight()
    {
        $books = [
            [
                'author' => 'Author A',
                'book' => 'Book A',
            ],
            [
                'author' => 'Author B',
                'book' => 'Book B',
            ],
            [
                'author' => 'Author B',
                'book' => 'Book C',
            ],
        ];

        $factory = new FlyweightBookFactory();
        foreach ($books as $book) {
            $newBook = $factory->create($book['book'], $book['author']);

            $this->assertSame($book['book'] . ' by ' . $book['author'], $newBook->render());
        }

        $this->assertSame(2, $factory->countAuthors());

    }
}