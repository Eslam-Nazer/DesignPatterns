<?php

namespace DesignPattern\Design\Patterns\Creational\AbstractFactory\FormAbstractFactory\WebForm;

use DesignPattern\Design\Patterns\Creational\AbstractFactory\FormAbstractFactory\AbstractButton;

class WebFactoryButton extends AbstractButton
{
    public function onClick(): void
    {
        echo "The button has been clicked\n";
    }

    public function render(): void
    {
        echo "Web Button\n";
    }
}
