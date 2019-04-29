<?php

namespace DesignPatterns\Structural\Bridge;

class Circle implements ShapeInterface
{
    protected $x;
    protected $y;
    protected $r;
    protected $color;

    public function __construct(ColorInterface $color, int $x, int $y, int $r)
    {
        $this->x = $x;
        $this->y = $y;
        $this->r = $r;
        $this->color = $color;
    }

    public function draw(): string
    {
        return $this->color->colorShape('circle cx="' . $this->x . '" cy="' . $this->y . '" r="' . $this->r . '"');
    }
}
