<?php

namespace DesignPattern\Design\Patterns\Creational\Builder;

use DesignPattern\Design\Patterns\Creational\Builder\Computer\CoolingSystem;
use DesignPattern\Design\Patterns\Creational\Builder\Computer\KeyBoard;
use DesignPattern\Design\Patterns\Creational\Builder\Computer\Monitor;
use DesignPattern\Design\Patterns\Creational\Builder\Computer\MotherBoard\MotherBoard;
use DesignPattern\Design\Patterns\Creational\Builder\Computer\Mouse;
use DesignPattern\Design\Patterns\Creational\Builder\Computer\UPS;
use DesignPattern\Design\Patterns\Creational\Builder\Computer\Types\Computer;
use DesignPattern\Design\Patterns\Creational\Builder\Computer\Types\ComputerCS;
use DesignPattern\Design\Patterns\Creational\Builder\Computer\Types\ComputerXL;

abstract class Builder
{
    protected Computer $computer;
    protected ComputerCS $computerCS;
    protected ComputerXL $computerXL;

    abstract protected function buildMohterBoard(): MotherBoard;
    abstract protected function buildKeyBoard(): KeyBoard;
    abstract protected function buildMouse(): Mouse;
    abstract protected function buildMonitor(): Monitor;
    abstract protected function buildCoolingSystem(): CoolingSystem;
    abstract protected function buildUPS(): UPS;
    abstract public function getComputer(): Computer;
}
