<?php

namespace DesignPatterns\Structural\Composite;

class TitleElement implements ElementInterface
{
    protected $title;

    public function __construct(string $title)
    {
        $this->title = $title;
    }

    public function render(): string
    {
        return '<title>' . $this->title . '</title>';
    }
}
