<?php

namespace DesignPatterns\Structural\Composite;

class HtmlPage implements ElementInterface
{
    protected $elements = [];

    public function addElement(ElementInterface $element)
    {
        $this->elements[] = $element;
    }

    public function render(): string
    {
        $html = '<html>';

        foreach ($this->elements as $element) {
            $html .= $element->render();
        }

        $html .= '</html>';

        return $html;
    }
}
