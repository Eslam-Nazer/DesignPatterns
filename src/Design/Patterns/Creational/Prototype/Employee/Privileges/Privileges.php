<?php

namespace DesignPattern\Design\Patterns\Creational\Prototype\Employee\Privileges;

use DesignPattern\Design\Patterns\Creational\Prototype\Employee\Privileges\Types\TypesInterface;

class Privileges
{
    /**
     * @param array $privileges
     */
    public function __construct(
        private array $privileges
    ) {}
    /**
     * @return array
     */
    public function getPrivileges(): array
    {
        return $this->privileges;
    }

    public function addPrivileges(TypesInterface $privileges)
    {
        array_push($this->privileges, $privileges);
    }
    public function clearPrivileges()
    {
        $this->privileges = [];
    }
}
