<?php

namespace DesignPatterns\Structural\Bridge;

interface ColorInterface
{
    public function colorShape(string $shape): string;
}
