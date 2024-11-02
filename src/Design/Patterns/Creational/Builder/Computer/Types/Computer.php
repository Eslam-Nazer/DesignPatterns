<?php

namespace DesignPattern\Design\Patterns\Creational\Builder\Computer\Types;

use DesignPattern\Design\Patterns\Creational\Builder\Computer\KeyBoard;
use DesignPattern\Design\Patterns\Creational\Builder\Computer\Monitor;
use DesignPattern\Design\Patterns\Creational\Builder\Computer\MotherBoard\MotherBoard;
use DesignPattern\Design\Patterns\Creational\Builder\Computer\Mouse;

abstract class Computer
{
    protected MotherBoard $motherBoard;
    protected KeyBoard $keyBoard;
    protected Mouse $mouse;
    protected Monitor $monitor;

    abstract public function turnOn(): bool;
    abstract public function turnOff(): bool;

    public function dashboard(): string
    {
        return '';
    }

    /**
     * @param MotherBoard $motherBoard
     */
    public function setMotherBoard(MotherBoard $motherBoard)
    {
        $this->motherBoard = $motherBoard;
    }
    /**
     * @param KeyBoard $keyBoard
     */
    public function setKeyBoard(KeyBoard $keyBoard)
    {
        $this->keyBoard = $keyBoard;
    }
    /**
     * @param Mouse $mouse
     */
    public function setMouse(Mouse $mouse)
    {
        $this->mouse = $mouse;
    }
    /**
     * @param Monitor $monitor
     */
    public function setMonitor(Monitor $monitor)
    {
        $this->monitor = $monitor;
    }
}
