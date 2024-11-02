<?php

namespace DesignPattern\Design\Patterns\Creational\Builder\Computer;

class KeyBoard
{
    private bool $utfSupport;
    /**
     * @param bool $resolution
     */
    public function __construct(bool $utfSupport)
    {
        $this->utfSupport = $utfSupport;
    }
    /**
     * @return bool
     */
    public function isUtfSupport(): bool
    {
        return $this->utfSupport;
    }
}
