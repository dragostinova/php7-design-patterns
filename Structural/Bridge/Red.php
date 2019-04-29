<?php

namespace DesignPatterns\Structural\Bridge;

class Red implements ColorInterface
{
    public function colorShape(string $shape): string
    {
        return '<svg width="200" height="200"><' . $shape . ' fill="red" /></svg>';
    }
}
