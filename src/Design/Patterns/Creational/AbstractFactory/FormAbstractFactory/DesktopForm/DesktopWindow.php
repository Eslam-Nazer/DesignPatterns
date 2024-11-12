<?php

namespace DesignPattern\Design\Patterns\Creational\AbstractFactory\FormAbstractFactory\DesktopForm;

use DesignPattern\Design\Patterns\Creational\AbstractFactory\FormAbstractFactory\AbstractWindow;

class DesktopWindow extends AbstractWindow
{
    public function onClose(): void
    {
        echo "thank you for your feedback.\n";
    }

    public function onResize(): void
    {
        echo "The windows has new size{$this->getSize()}.\n";
    }
}
