<?php

namespace DesignPattern\OOP\PHP\Relationships\Composition;

class Room
{
    private string $color;
    private int $size;
    /**
     * @param string $color
     * @param int $size
     */
    public function __construct(string $color, int $size)
    {
        $this->color = $color;
        $this->size  = $size;
    }
}
