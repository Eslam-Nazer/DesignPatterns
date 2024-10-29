<?php

namespace DesignPattern\OOP\PHP\Relationships\Aggregation;

class Developer
{
    private string $name;

    /**
     * @param string $name
     */

    public function __construct(string $name)
    {
        $this->name = $name;
    }

    public function getName(): string
    {
        return $this->name;
    }
}
