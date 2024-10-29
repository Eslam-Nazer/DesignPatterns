<?php

namespace DesignPattern\OOP\PHP\Relationships\Printer;

abstract class Printer
{
    protected string $stringToPrinted;

    public function setStringToPrinted(string $stringToPrinted)
    {
        $this->stringToPrinted = $stringToPrinted;
    }

    abstract public function printToScreen(): string;
}
