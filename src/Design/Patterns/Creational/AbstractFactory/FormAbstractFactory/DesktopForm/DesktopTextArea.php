<?php

namespace DesignPattern\Design\Patterns\Creational\AbstractFactory\FormAbstractFactory\DesktopForm;

use DesignPattern\Design\Patterns\Creational\AbstractFactory\FormAbstractFactory\AbstractTextArea;

class DesktopTextArea extends AbstractTextArea
{
    public function onResize(): void
    {
        echo "The text area {$this->getName()} has been resized\n";
    }

    public function render(): void
    {
        echo "Desktop text area";
    }
}
