<?php

namespace DesignPatterns\Structural\Adapter;

class Kindle implements EBookInterface
{
    protected $page;
    protected $title;
    protected $totalPages;

    public function select(string $title, int $totalPages)
    {
        $this->title = $title;
        $this->totalPages = $totalPages;
    }

    public function open(int $page)
    {
        $this->page = $page;
    }

    public function pressNext()
    {
        $this->page++;
    }

    public function pressBack()
    {
        $this->page--;
    }

    public function getTitle(): string
    {
        return $this->title;
    }

    public function getPage(): int
    {
        return $this->page;
    }
}
