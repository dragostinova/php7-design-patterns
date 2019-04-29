<?php

namespace DesignPatterns\Structural\Flyweight;

class Book implements BookInterface
{
    protected $title;
    protected $author;

    public function __construct(string $title, AuthorInterface $author)
    {
        $this->title = $title;
        $this->author = $author;
    }

    public function render(): string
    {
        return $this->title . ' by ' . $this->author->getName();
    }
}
