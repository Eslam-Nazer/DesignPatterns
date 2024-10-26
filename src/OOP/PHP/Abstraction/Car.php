<?php

namespace DesignPattern\OOP\PHP\Abstraction;

abstract class Car
{
    protected int $speed;
    protected int $numberOfDoors;
    protected string $gearboxSystem;
    protected string $color;
    /**
     * @param int $speed
     * @param int $numberOfDoors
     * @param string $gearboxSystem
     * @param string $color
     */
    public function __construct(int $speed, int $numberOfDoors, string $gearboxSystem, string $color)
    {
        $this->speed = $speed;
        $this->numberOfDoors = $numberOfDoors;
        $this->gearboxSystem = $gearboxSystem;
        $this->color = $color;
    }

    public abstract function move(): int;
    public abstract function turnOn(): bool;
    public abstract function turnOff(): bool;
    public abstract function acclerate(int $speed): bool;
    public abstract function park(): bool;
}
