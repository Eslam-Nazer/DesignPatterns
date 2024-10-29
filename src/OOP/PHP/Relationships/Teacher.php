<?php

namespace DesignPattern\OOP\PHP\Relationships;

use DesignPattern\OOP\PHP\Relationships\Printer\Printer;

abstract class Teacher
{
    protected string $name;

    public function __construct(string $name)
    {
        $this->name = $name;
    }

    public function getName()
    {
        return $this->name;
    }

    public function sayWelcome(Printer $printer): string
    {
        $printer->setStringToPrinted($this->name);
        return $printer->printToScreen();
    }

    public abstract function assignHomeWork(): string;

    public function evaluateStudentHomeWork(Student $student)
    {
        if ($student->getHomeWorkScore() >= 50) {
            return "success";
        }
        return false;
    }
}
