<?php

namespace DesignPatterns\Structural\Adapter;

interface BookInterface
{
    public function choose(string $title, int $totalPages);

    public function open(int $page);

    public function nextPage();

    public function previousPage();

    public function getTitle(): string;

    public function getPage(): int;

}
