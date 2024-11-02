<?php

namespace DesignPattern\Design\Patterns\Creational\Builder\Computer\MotherBoard;

use DesignPattern\Design\Patterns\Creational\Builder\Computer\MotherBoard\MainParts\CPU;
use DesignPattern\Design\Patterns\Creational\Builder\Computer\MotherBoard\MainParts\Disk;
use DesignPattern\Design\Patterns\Creational\Builder\Computer\MotherBoard\MainParts\GPU;
use DesignPattern\Design\Patterns\Creational\Builder\Computer\MotherBoard\MainParts\NetworkCard;
use DesignPattern\Design\Patterns\Creational\Builder\Computer\MotherBoard\MainParts\RAM;
use DesignPattern\Design\Patterns\Creational\Builder\Computer\MotherBoard\MainParts\Sockets;

class MotherBoard
{
    private CPU $cpu;
    private RAM $ram;
    private GPU $gpu;
    private Disk $disk;
    private NetworkCard $networkCard;
    private Sockets $sockets;

    /**
     * @param CPU $cpu;
     * @param RAM $ram;
     * @param GPU $gpu;
     * @param Disk $disk;
     * @param NetworkCard $networkCard;
     * @param Sockets $sockets;
     */
    public function __construct(CPU $cpu, RAM $ram, GPU $gpu, Disk $disk, NetworkCard $networkCard, Sockets $sockets)
    {
        $this->cpu  = $cpu;
        $this->ram  = $ram;
        $this->gpu  = $gpu;
        $this->disk = $disk;
        $this->networkCard = $networkCard;
        $this->sockets = $sockets;
    }
    /**
     * @return CPU
     */
    public function getCPU(): CPU
    {
        return $this->cpu;
    }
    /**
     * @return RAM
     */
    public function getRAM(): RAM
    {
        return $this->ram;
    }
    /**
     * @return GPU
     */
    public function getGPU(): GPU
    {
        return $this->gpu;
    }
    /**
     * @return Disk
     */
    public function getDisk(): Disk
    {
        return $this->disk;
    }
    /**
     * @return NetworkCard
     */
    public function getNetworkCard(): NetworkCard
    {
        return $this->networkCard;
    }
    /**
     * @return Sockets
     */
    public function getSockets(): Sockets
    {
        return $this->sockets;
    }
}
