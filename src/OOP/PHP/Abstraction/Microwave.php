<?php

namespace DesignPattern\OOP\PHP\Abstraction;

class Microwave
{
    private int $temp;
    private string $program;
    private int $time;
    private bool $status = false;
    /**
     * @param int $temp
     * @param string $program
     * @param int $time
     */
    public function __construct(int $temp, string $program, int $time)
    {
        $this->temp = $temp;
        $this->program = $program;
        $this->time = $time;
    }
    public function turnOn(): bool
    {
        $this->status = true;
        return true;
    }
    public function turnOff(): bool
    {
        $this->status = false;
        return true;
    }
    public function deFreeze(): string
    {
        $this->turnOnMicrowaveHeatingSystem();
        $this->loadingDeFreezingProgram();
        $this->seTimer();
        return "I am de-freeze the food at {$this->temp} using the program {$this->program}";
    }
    private function turnOnMicrowaveHeatingSystem(): string
    {
        return "String on heating system";
    }
    private function loadingDeFreezingProgram(): string
    {
        return "Loading program {$this->program}";
    }
    private function seTimer(): string
    {
        return "Setting de-freeze time to {$this->time} seconds";
    }
}
