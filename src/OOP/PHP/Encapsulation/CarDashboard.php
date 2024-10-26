<?php

namespace DesignPattern\OOP\PHP\Encapsulation;

class CarDashboard
{
    private int $fualLevel;
    private int $oilLevel;
    private int $airPressure;

    /**
     * @return int 
     */
    private function getFualLevel(): int
    {
        return $this->fualLevel;
    }
    /**
     * @return int
     */
    private function getOilLevel(): int
    {
        return $this->oilLevel;
    }
    /**
     * @return int
     */
    private function getAirPressure(): int
    {
        return $this->airPressure;
    }
    /**
     * @return string
     */
    public function readDashboard(): string
    {
        return "Showing the following analysis: \n
        Fual: {$this->getFualLevel()} \n
        Oil: {$this->getOilLevel()} \n
        AirPressure: {$this->getAirPressure()} \n";
    }
}
