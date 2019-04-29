<?php

namespace DesignPatterns\Structural\Adapter;

// Use e-books as paper books
final class EBookAdapter implements BookInterface
{
    private $eBook;

    public function __construct(EBookInterface $eBook)
    {
        $this->eBook = $eBook;
    }

    public function choose(string $title, int $totalPages)
    {
        $this->eBook->select($title, $totalPages);
    }

    public function open(int $page)
    {
        $this->eBook->open($page);
    }

    public function nextPage()
    {
        $this->eBook->pressNext();
    }

    public function previousPage()
    {
        $this->eBook->pressBack();
    }

    public function getTitle(): string
    {
        return $this->eBook->getTitle();
    }

    public function getPage(): int
    {
        return $this->eBook->getPage();
    }
}
