<?php

namespace DesignPattern\OOP\PHP\Abstraction;

class BMW extends Car
{
    public function move(): int
    {
        //
        return $this->speed;
    }
    public function turnOn(): bool
    {
        return true;
    }
    public function turnOff(): bool
    {
        return false;
    }
    public function acclerate(int $speed): bool
    {
        $this->speed = $speed;
        return true;
    }
    public function park(): bool
    {
        return true;
    }
}
