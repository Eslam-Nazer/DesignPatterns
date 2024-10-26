<?php

namespace DesignPattern\OOP\PHP\Abstraction;

class TruckXT extends Car implements WeightHolder
{
    public function move(): int
    {
        return '';
    }
    public function turnOn(): bool
    {
        return '';
    }
    public function turnOff(): bool
    {
        return '';
    }
    public function acclerate(int $speed): bool
    {
        return '';
    }
    public function park(): bool
    {
        return '';
    }
    public function leftCargo(): bool
    {
        return '';
    }
}
