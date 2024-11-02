<?php

namespace DesignPattern\Design\Patterns\Creational\Builder\Computer;

class CoolingSystem
{
    private int $lowTempLimit;
    /**
     * @param int $lowTempLimit
     */
    public function __construct(int $lowTempLimit)
    {
        $this->lowTempLimit = $lowTempLimit;
    }

    /**
     * @return int
     */
    public function getLowTempLimit(): int
    {
        return $this->lowTempLimit;
    }
}
