<?php

namespace DesignPatterns\Structural\Adapter;

include '../../vendor/autoload.php';

$book = new Book();
$book->choose('Learning PHP 7', 125);
$book->open(25);
$book->nextPage();
echo $book->getTitle() . ' page: ' . $book->getPage();

$kindle = new Kindle();
$eBook = new EBookAdapter($kindle);
$eBook->choose('The Crypto Crash Course', 250);
$eBook->open(25);
$eBook->nextPage();
echo $eBook->getTitle() . ' page: ' . $eBook->getPage();
