<?php

namespace DesignPatterns\Structural\Flyweight;

include '../../vendor/autoload.php';

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
    echo $newBook->render();
}

// The unique authors are only 2
echo $factory->countAuthors();