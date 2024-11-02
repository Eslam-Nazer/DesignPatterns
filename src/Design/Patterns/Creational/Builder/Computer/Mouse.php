<?php

namespace DesignPattern\Design\Patterns\Creational\Builder\Computer;

class Mouse
{
    private bool $withExtraUtilities;
    /**
     * @param bool $resolution
     */
    public function __construct(bool $withExtraUtilities)
    {
        $this->withExtraUtilities = $withExtraUtilities;
    }
    /**
     * @return bool
     */
    public function iswithExtraUtilities(): bool
    {
        return $this->withExtraUtilities;
    }
}
