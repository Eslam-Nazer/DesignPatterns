<?php

namespace DesignPattern\Design\Patterns\Creational\Builder\Computer\Types;

interface ICoolingSystem
{
    public function coolDown(int $temp): bool;
}
