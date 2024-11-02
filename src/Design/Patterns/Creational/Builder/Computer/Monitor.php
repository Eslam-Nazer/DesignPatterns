<?php

namespace DesignPattern\Design\Patterns\Creational\Builder\Computer;

class Monitor
{
    private string $resolution;
    /**
     * @param string $resolution
     */
    public function __construct(string $resolution)
    {
        $this->resolution = $resolution;
    }
    /**
     * @return string
     */
    public function getResolution(): string
    {
        return $this->resolution;
    }
}
