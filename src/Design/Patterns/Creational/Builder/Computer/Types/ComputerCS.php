<?php

namespace DesignPattern\Design\Patterns\Creational\Builder\Computer\Types;

use DesignPattern\Design\Patterns\Creational\Builder\Computer\CoolingSystem;

class ComputerCS extends Computer implements ICoolingSystem
{
    private CoolingSystem $cs;

    /**
     * @return bool
     */
    public function turnOn(): bool
    {
        return true;
    }
    /**
     * @return bool
     */
    public function turnOff(): bool
    {
        return true;
    }
    /**
     * @return bool
     */
    public function coolDown(int $temp): bool
    {
        return true;
    }
    /**
     * @param CoolingSystem
     */
    public function setCoolingSystem(CoolingSystem $coolingSystem)
    {
        $this->cs = $coolingSystem;
    }
    /**
     * @return CoolingSystem
     */
    public function getCoolingSystem(CoolingSystem $coolingSystem): CoolingSystem
    {
        return $this->cs;
    }
}
