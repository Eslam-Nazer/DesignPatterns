<?php

namespace DesignPattern\OOP\PHP\Abstraction;

use DesignPattern\OOP\PHP\Encapsulation\CarDashboard;

abstract class Car
{
    protected int $speed;
    protected int $numberOfDoors;
    protected string $gearboxSystem;
    protected string $color;

    private CarDashboard $carDashboad;
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

    public function installDashboard(CarDashboard $dashboard)
    {
        $this->carDashboad = $dashboard;
    }
    /**
     * @return string
     */
    public function CarInfo(): string
    {
        if ($this->carDashboad) {
            return "The speed is {$this->speed} \n more info ... {$this->carDashboad->readDashboard()}";
        } else {
            return "The speed is {$this->speed} \n";
        }
    }
}
