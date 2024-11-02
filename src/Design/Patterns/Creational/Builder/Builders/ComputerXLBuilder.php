<?php

namespace DesignPattern\Design\Patterns\Creational\Builder\Builders;

use Socket;
use DesignPattern\Design\Patterns\Creational\Builder\Builder;
use DesignPattern\Design\Patterns\Creational\Builder\Computer\UPS;
use DesignPattern\Design\Patterns\Creational\Builder\Computer\Mouse;
use DesignPattern\Design\Patterns\Creational\Builder\Computer\Monitor;
use DesignPattern\Design\Patterns\Creational\Builder\Computer\KeyBoard;
use DesignPattern\Design\Patterns\Creational\Builder\Computer\MotherBoard\MotherBoard;
use DesignPattern\Design\Patterns\Creational\Builder\Computer\MotherBoard\Sockets\USB;
use DesignPattern\Design\Patterns\Creational\Builder\Computer\CoolingSystem;
use DesignPattern\Design\Patterns\Creational\Builder\Computer\MotherBoard\MainParts\CPU;
use DesignPattern\Design\Patterns\Creational\Builder\Computer\MotherBoard\MainParts\GPU;
use DesignPattern\Design\Patterns\Creational\Builder\Computer\MotherBoard\MainParts\RAM;
use DesignPattern\Design\Patterns\Creational\Builder\Computer\MotherBoard\Sockets\CType;
use DesignPattern\Design\Patterns\Creational\Builder\Computer\MotherBoard\MainParts\Disk;
use DesignPattern\Design\Patterns\Creational\Builder\Computer\MotherBoard\MainParts\Sockets;
use DesignPattern\Design\Patterns\Creational\Builder\Computer\MotherBoard\MainParts\NetworkCard;
use DesignPattern\Design\Patterns\Creational\Builder\Computer\Types\Computer;
use DesignPattern\Design\Patterns\Creational\Builder\Computer\Types\ComputerXL;

class ComputerXLBuilder extends Builder
{
    protected function buildMohterBoard(): MotherBoard
    {
        $cpu = new CPU(2.8);
        $ram = new RAM(16);
        $gpu = new GPU(2);
        $sockets = new Sockets([
            new USB(2),
            new USB(3),
            new CType(true),
            new CType(true),
            new CType(true),
        ]);
        $networkCard = new NetworkCard(5);
        $disk = new Disk('SSD');
        return new MotherBoard(
            $cpu,
            $ram,
            $gpu,
            $disk,
            $networkCard,
            $sockets
        );
    }
    protected function buildKeyBoard(): KeyBoard
    {
        return new KeyBoard(true);
    }
    protected function buildMouse(): Mouse
    {
        return new Mouse(false);
    }
    protected function buildMonitor(): Monitor
    {
        return new Monitor('1920 FHD');
    }
    protected function buildCoolingSystem(): CoolingSystem
    {
        return new CoolingSystem(5);
    }
    protected function buildUPS(): UPS
    {
        return new UPS(96);
    }
    public function getComputer(): Computer
    {
        $computer = new ComputerXL();
        $computer->setKeyBoard($this->buildKeyBoard());
        $computer->setMonitor($this->buildMonitor());
        $computer->setMotherBoard($this->buildMohterBoard());
        $computer->setMouse($this->buildMouse());
        $computer->setCoolingSystem($this->buildCoolingSystem());
        $computer->setUPS($this->buildUPS());
        return $computer;
    }
}
