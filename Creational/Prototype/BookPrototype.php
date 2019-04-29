<?php

namespace DesignPatterns\Creational\Prototype;

abstract class BookPrototype
{
    protected $title;
    protected $author;
    protected $topic;

    abstract public function __clone();

    public function getTitle(): string
    {
        return $this->title;
    }

    public function setTitle(string $title)
    {
        $this->title = $title;
    }

    public function getAuthor(): string
    {
        return $this->author;
    }

    public function setAuthor(string $author)
    {
        $this->author = $author;
    }

    public function getTopic(): string
    {
        return $this->topic;
    }

    public function __toString(): string
    {
        return '<strong>' . $this->title . '</strong> by ' . $this->author . ' (' . $this->topic . ')<br />';
    }
}
