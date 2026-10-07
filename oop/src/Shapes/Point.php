<?php

namespace Unicah\Oop\Shapes;

class Point
{
    private int $x;
    private int $y;
    private int $quadrant;
    public function __construct(int $x, int $y)
    {
        $this->x = $x;
        $this->y = $y;

        if ($this->x >= 0 && $this->y >= 0) {
            $this->quadrant = 1;
        }
        if ($this->x >= 0 && $this->y < 0) {
            $this->quadrant = 2;
        }
        if ($this->x < 0 && $this->y < 0) {
            $this->quadrant = 3;
        }
        if ($this->x < 0 && $this->y >= 0) {
            $this->quadrant = 4;
        }
    }

    public function toString(): string
    {
        return sprintf(
            "Q(%d) P( %d, %d )",
            $this->quadrant,
            $this->x,
            $this->y
        );
    }
}
