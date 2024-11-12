<?php

namespace DesignPattern\Design\Patterns\Creational\AbstractFactory\FormAbstractFactory\DesktopForm;

use DesignPattern\Design\Patterns\Creational\AbstractFactory\FormAbstractFactory\AbstractTextInput;

class DesktopTextInput extends AbstractTextInput
{
    public function onChange(): void
    {
        echo "the value of the {$this->getName()} input was changed to {$this->getValue()}\n";
    }

    public function render(): void
    {
        echo "Desktop text input";
    }
}
