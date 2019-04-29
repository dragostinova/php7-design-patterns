<?php

namespace DesignPatterns\Structural\Adapter;

class Book implements BookInterface
{
    protected $page;
    protected $title;
    protected $totalPages;

    public function choose(string $title, int $totalPages)
    {
        $this->title = $title;
        $this->totalPages = $totalPages;
    }

    public function open(int $page)
    {
        $this->page = $page;
    }

    public function nextPage()
    {
        if ($totalPages != $this->page) {
            $this->page++;
        }
    }

    public function previousPage()
    {
        if (1 != $this->page) {
            $this->page--;
        }
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
