<?php

namespace DesignPatterns\Structural\Bridge;

class Square implements ShapeInterface
{
    protected $color;
    protected $width;

    public function __construct(ColorInterface $color, int $width)
    {
        $this->color = $color;
        $this->width = $width;
    }

    public function draw(): string
    {
        return $this->color->colorShape('rect width="' . $this->width . '" height="' . $this->width . '"');
    }
}
