<?php

namespace Unicah\Oop\Math;

class Point
{
    private int $x;
    private int $y;
    public function __construct(int $x, int $y)
    {
        $this->x = $x;
        $this->y = $y;
    }
    public function toString()
    {
        return sprintf(
            "P( %d, %d )",
            $this->x,
            $this->y
        );
    }
    public function getX(): int
    {
        return $this->x;
    }
    public function getY(): int
    {
        return $this->y;
    }
    public function distance(Point $pointb): float
    {
        // x^2 + y^2 = c^2 // 
        $distancia = sqrt(
            pow($this->x - $pointb->getX(), 2) +
                pow($this->y - $pointb->getY(), 2)
        );
        return $distancia;
    }
}
