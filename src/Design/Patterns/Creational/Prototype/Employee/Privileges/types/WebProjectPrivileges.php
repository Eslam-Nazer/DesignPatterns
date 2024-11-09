<?php

namespace DesignPattern\Design\Patterns\Creational\Prototype\Employee\Privileges\Types;

class WebProjectPrivileges implements TypesInterface
{
    /**
     * @return bool
     */
    public function enable(): bool
    {
        return true;
    }
    /**
     * @return bool
     */
    public function disable(): bool
    {
        return true;
    }
}