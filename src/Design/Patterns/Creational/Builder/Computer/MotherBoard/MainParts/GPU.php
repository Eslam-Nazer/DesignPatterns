<?php

namespace DesignPattern\Design\Patterns\Creational\Builder\Computer\MotherBoard\MainParts;

class GPU
{
    private int $size;
    /**
     * @param int $spead
     */
    public function __construct(int $size)
    {
        $this->size = $size;
    }

    /**
     * @return int
     */
    public function getSize(): int
    {
        return $this->size;
    }
}
