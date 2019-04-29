<?php

namespace DesignPatterns\Structural\Flyweight;

class Author implements AuthorInterface
{
    protected $name;

    public function __construct(string $name)
    {
        $this->name = $name;
    }

    public function getName(): string
    {
        return $this->name;
    }
}
