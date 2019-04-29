<?php

namespace DesignPatterns\Creational\Prototype;

include '../../vendor/autoload.php';

// Create prototype
$phpBookPrototype = new PhpBookPrototype();
$javaBookPrototype = new JavaBookPrototype();

// Clone the prototype and change some of its properties
$book1 = clone $phpBookPrototype;
$book1->setTitle('Mastering PHP Design Patterns');
$book1->setAuthor('Junade Ali');
echo $book1;

$book2 = clone $phpBookPrototype;
$book2->setTitle('Cracking the Coding Interview: 189 Programming Questions and Solutions');
$book2->setAuthor('Gayle Laakmann McDowell');
echo $book2;

$book3 = clone $javaBookPrototype;
$book3->setTitle('Java Design Pattern Essentials');
$book3->setAuthor('Tony Bevis');
echo $book3;
