<?php

namespace DesignPattern\OOP\PHP\Relationships\Printer;

class HtmlPrinter extends Printer
{
    public function printToScreen(): string
    {
        return "<h1>This is html format of the string:{$this->stringToPrinted}</h1>";
    }
}
