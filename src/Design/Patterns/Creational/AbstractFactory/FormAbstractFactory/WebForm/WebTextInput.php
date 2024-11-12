<?php

namespace DesignPattern\Design\Patterns\Creational\AbstractFactory\FormAbstractFactory\WebForm;

use DesignPattern\Design\Patterns\Creational\AbstractFactory\FormAbstractFactory\AbstractTextInput;

class WebTextInput extends AbstractTextInput
{
    public function onChange(): void
    {
        echo "the value of the {$this->getName()} input was changed to {$this->getValue()}\n";
    }

    public function render(): void
    {
        echo "Web text input\n";
    }
}
