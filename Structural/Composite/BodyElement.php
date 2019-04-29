<?php

namespace DesignPatterns\Structural\Composite;

class BodyElement implements ElementInterface
{
    protected $content;

    public function __construct(string $content)
    {
        $this->content = $content;
    }

    public function render(): string
    {
        return '<body>' . $this->content . '</body>';
    }
}