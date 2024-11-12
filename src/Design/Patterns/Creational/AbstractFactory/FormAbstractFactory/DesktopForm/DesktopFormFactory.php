<?php

namespace DesignPattern\Design\Patterns\Creational\AbstractFactory\FormAbstractFactory\WebForm;

use DesignPattern\Design\Patterns\Creational\AbstractFactory\FormAbstractFactory\AbstractButton;
use DesignPattern\Design\Patterns\Creational\AbstractFactory\FormAbstractFactory\AbstractWindow;
use DesignPattern\Design\Patterns\Creational\AbstractFactory\FormAbstractFactory\AbstractTextArea;
use DesignPattern\Design\Patterns\Creational\AbstractFactory\FormAbstractFactory\AbstractTextInput;
use DesignPattern\Design\Patterns\Creational\AbstractFactory\FormAbstractFactory\AbstractFormFactory;
use DesignPattern\Design\Patterns\Creational\AbstractFactory\FormAbstractFactory\DesktopForm\DesktopWindow;
use DesignPattern\Design\Patterns\Creational\AbstractFactory\FormAbstractFactory\DesktopForm\DesktopTextArea;
use DesignPattern\Design\Patterns\Creational\AbstractFactory\FormAbstractFactory\DesktopForm\DesktopTextInput;
use DesignPattern\Design\Patterns\Creational\AbstractFactory\FormAbstractFactory\DesktopForm\DesktopFactoryButton;

class DesktopFormFactory implements AbstractFormFactory
{
    public function createTextInput(): AbstractTextInput
    {
        return new DesktopTextInput('Desktop Input', 'Enter Your Name: ', '');
    }

    public function createTextArea(): AbstractTextArea
    {
        return new DesktopTextArea('Desktop Text Area', 'Enter Your Message: ');
    }

    public function createButton(): AbstractButton
    {
        return new DesktopFactoryButton('Click Me');
    }

    public function createWindow(): AbstractWindow
    {
        return new DesktopWindow('1920x1080');
    }
}
