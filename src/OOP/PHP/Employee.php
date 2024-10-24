<?php

namespace DesignPattern\OOP\PHP;

class Employee
{
    private string $name;
    private int $age;
    private int $salary;
    /**
     * @param string $name
     * @param int $age
     * @param int $salary
     */
    public function __construct(string $name, int $age, int $salary)
    {
        $this->name     = $name;
        $this->age      = $age;
        $this->salary   = $salary;
    }

    /**
     * @retrun string
     */
    public function getName(): string
    {
        return $this->name;
    }
    /**
     * @retrun int
     */
    public function getAge(): int
    {
        return $this->age;
    }
    /**
     * @retrun int
     */
    public function getSalary(): int
    {
        return $this->salary;
    }
}
