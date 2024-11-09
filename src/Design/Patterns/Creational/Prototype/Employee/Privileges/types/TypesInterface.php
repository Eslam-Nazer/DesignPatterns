<?php

namespace DesignPattern\Design\Patterns\Creational\Prototype\Employee\Privileges\Types;

interface TypesInterface
{
    public function enable(): bool;
    public function disable(): bool;
}
