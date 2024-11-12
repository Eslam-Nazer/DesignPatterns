<?php

namespace DesignPattern\Design\Patterns\Creational\AbstractFactory\FormAbstractFactory\WebForm;

use DesignPattern\Design\Patterns\Creational\AbstractFactory\FormAbstractFactory\AbstractButton;
use DesignPattern\Design\Patterns\Creational\AbstractFactory\FormAbstractFactory\AbstractWindow;
use DesignPattern\Design\Patterns\Creational\AbstractFactory\FormAbstractFactory\AbstractTextArea;
use DesignPattern\Design\Patterns\Creational\AbstractFactory\FormAbstractFactory\AbstractTextInput;
use DesignPattern\Design\Patterns\Creational\AbstractFactory\FormAbstractFactory\WebForm\WebWindow;
use DesignPattern\Design\Patterns\Creational\AbstractFactory\FormAbstractFactory\AbstractFormFactory;
use DesignPattern\Design\Patterns\Creational\AbstractFactory\FormAbstractFactory\WebForm\WebTextArea;
use DesignPattern\Design\Patterns\Creational\AbstractFactory\FormAbstractFactory\WebForm\WebTextInput;
use DesignPattern\Design\Patterns\Creational\AbstractFactory\FormAbstractFactory\WebForm\WebFactoryButton;

class WebFormFactory implements AbstractFormFactory
{
    public function createTextInput(): AbstractTextInput
    {
        return new WebTextInput('Web Input', 'Enter Your Name: ', '');
    }

    public function createTextArea(): AbstractTextArea
    {
        return new WebTextArea('Web Text Area', 'Enter Your Message: ');
    }

    public function createButton(): AbstractButton
    {
        return new WebFactoryButton('Submit');
    }

    public function createWindow(): AbstractWindow
    {
        return new WebWindow('800x600');
    }
}
