<?php

namespace DesignPatterns\Structural\Flyweight;

class FlyweightBookFactory
{
    protected $author = [];

    public function create(string $title, string $author): BookInterface
    {
        // One author has more than one book
        if (empty($this->author[$author])) {
            $this->author[$author] = new Author($author);
        }

        return new Book($title, $this->author[$author]);
    }

    public function countAuthors(): int
    {
        return count($this->author);
    }
}
