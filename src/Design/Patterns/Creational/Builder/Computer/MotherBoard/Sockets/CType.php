<?php

namespace DesignPattern\Design\Patterns\Creational\Builder\Computer\MotherBoard\Sockets;

class CType
{
    private bool $withVedioTransfer;

    /**
     * @param string $version
     */
    public function __construct(bool $withVedioTransfer)
    {
        $this->withVedioTransfer = $withVedioTransfer;
    }

    /**
     * @return string
     */
    public function isWithVedioTransfer(): bool
    {
        return $this->withVedioTransfer;
    }
}
