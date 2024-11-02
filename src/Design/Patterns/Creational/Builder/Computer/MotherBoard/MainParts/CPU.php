<?php

namespace DesignPattern\Design\Patterns\Creational\Builder\Computer\MotherBoard\MainParts;

class CPU
{
    private float $speed;
    /**
     * @param float $spead
     */
    public function __construct(float $speed)
    {
        $this->speed = $speed;
    }

    /**
     * @return float
     */
    public function getSpeed(): float
    {
        return $this->speed;
    }
}
