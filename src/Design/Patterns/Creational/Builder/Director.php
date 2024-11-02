<?php

namespace DesignPattern\Design\Patterns\Creational\Builder;

use DesignPattern\Design\Patterns\Creational\Builder\Computer\Types\Computer;

class Director
{
    private Builder $builder;
    /**
     * @param Builder $builder
     */
    public function __construct(Builder $builder)
    {
        $this->builder = $builder;
    }

    public function switchBuilder(Builder $builder)
    {
        $this->builder = $builder;
    }

    public function makeComputer(): Computer
    {
        return $this->builder->getComputer();
    }
}
