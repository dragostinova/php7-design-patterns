<?php

namespace DesignPatterns\Structural\Adapter;

interface EBookInterface
{
    public function select(string $title, int $totalPages);

    public function open(int $page);

    public function pressNext();

    public function pressBack();

    public function getTitle(): string;

    public function getPage(): int;
}
