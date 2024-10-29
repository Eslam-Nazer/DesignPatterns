<?php

namespace DesignPattern\OOP\PHP\Relationships\Composition;

class House
{
    private array $rooms;
    /**
     * @param array $rooms
     */

    public function __construct(array $rooms)
    {
        $this->rooms = $rooms;
    }
}
