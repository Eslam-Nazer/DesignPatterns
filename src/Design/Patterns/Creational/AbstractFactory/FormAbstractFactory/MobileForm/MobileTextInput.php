<?php

namespace DesignPattern\Design\Patterns\Creational\AbstractFactory\FormAbstractFactory\MobileForm;

use DesignPattern\Design\Patterns\Creational\AbstractFactory\FormAbstractFactory\AbstractTextInput;

class MobileTextInput extends AbstractTextInput
{
    public function onChange(): void
    {
        echo "the value of the {$this->getName()} input was changed to {$this->getValue()}\n";
    }

    public function render(): void
    {
        echo "Mobile text input";
    }
}
