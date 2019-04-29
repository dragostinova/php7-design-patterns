<?php

namespace DesignPatterns\Structural\Composite;

class MetaElement implements ElementInterface
{
    protected $charset;

    public function __construct(string $charset)
    {
        $this->charset = $charset;
    }

    public function render(): string
    {
        return '<meta charset="' . $this->charset . '">';
    }
}
