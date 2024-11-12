<?php

namespace DesignPattern\Design\Patterns\Creational\AbstractFactory\FormAbstractFactory\DesktopForm;

use DesignPattern\Design\Patterns\Creational\AbstractFactory\FormAbstractFactory\AbstractButton;

class DesktopFactoryButton extends AbstractButton
{
    public function onClick(): void
    {
        echo "The button has been clicked\n";
    }

    public function render(): void
    {
        echo "Desktop Button";
    }
}
