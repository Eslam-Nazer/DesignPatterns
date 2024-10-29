<?php

namespace DesignPattern\OOP\PHP\Relationships\Printer;

class PlanTextPrinter extends Printer
{
    public function printToScreen(): string
    {
        return "This is html format of the string:{$this->stringToPrinted}";
    }
}
