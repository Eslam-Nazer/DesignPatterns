<?php

namespace DesignPattern\Design\Patterns\Creational\AbstractFactory\FormAbstractFactory\MobileForm;

use DesignPattern\Design\Patterns\Creational\AbstractFactory\FormAbstractFactory\AbstractButton;
use DesignPattern\Design\Patterns\Creational\AbstractFactory\FormAbstractFactory\Renderable;

class MobileFactoryButton extends AbstractButton
{
    public function onClick(): void
    {
        echo "The button has been clicked\n";
    }

    public function render(): void
    {
        echo "Mobile Button";
    }
}
