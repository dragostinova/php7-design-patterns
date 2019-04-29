<?php

namespace DesignPatterns\Structural\Composite;

class HeaderElement implements ElementInterface
{
    protected $elements;

    public function addElement(ElementInterface $element)
    {
        $this->elements[] = $element;
    }

    public function render(): string
    {
        $html = '<header>';

        foreach ($this->elements as $element) {
            $html .= $element->render();
        }

        $html .= '</header>';

        return $html;
    }
}