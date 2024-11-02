<?php

namespace DesignPattern\Design\Patterns\Creational\Builder\Computer\Types;

use DesignPattern\Design\Patterns\Creational\Builder\Computer\CoolingSystem;
use DesignPattern\Design\Patterns\Creational\Builder\Computer\UPS;

class ComputerXL extends Computer implements ICoolingSystem, IPower
{
    private CoolingSystem $cs;
    private UPS $ups;

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
     * @return bool
     */
    public function backupPower(): bool
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
    public function getCoolingSystem(): CoolingSystem
    {
        return $this->cs;
    }
    /**
     * @param UPS
     */
    public function setUPS(UPS $uPS)
    {
        $this->ups = $uPS;
    }
    /**
     * @return UPS
     */
    public function getUPS(): UPS
    {
        return $this->ups;
    }
}
