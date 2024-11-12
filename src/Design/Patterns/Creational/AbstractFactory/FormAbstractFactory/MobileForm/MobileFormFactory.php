<?php

namespace DesignPattern\Design\Patterns\Creational\AbstractFactory\FormAbstractFactory\MobileForm;

use DesignPattern\Design\Patterns\Creational\AbstractFactory\FormAbstractFactory\AbstractButton;
use DesignPattern\Design\Patterns\Creational\AbstractFactory\FormAbstractFactory\AbstractWindow;
use DesignPattern\Design\Patterns\Creational\AbstractFactory\FormAbstractFactory\AbstractTextArea;
use DesignPattern\Design\Patterns\Creational\AbstractFactory\FormAbstractFactory\AbstractTextInput;
use DesignPattern\Design\Patterns\Creational\AbstractFactory\FormAbstractFactory\AbstractFormFactory;
use DesignPattern\Design\Patterns\Creational\AbstractFactory\FormAbstractFactory\MobileForm\MobileWindow;
use DesignPattern\Design\Patterns\Creational\AbstractFactory\FormAbstractFactory\MobileForm\MobileTextArea;
use DesignPattern\Design\Patterns\Creational\AbstractFactory\FormAbstractFactory\MobileForm\MobileTextInput;
use DesignPattern\Design\Patterns\Creational\AbstractFactory\FormAbstractFactory\MobileForm\MobileFactoryButton;

class MobileFormFactory implements AbstractFormFactory
{
    public function createTextInput(): AbstractTextInput
    {
        return new MobileTextInput('Mobile Input', 'Enter Your Name: ', '');
    }

    public function createTextArea(): AbstractTextArea
    {
        return new MobileTextArea('Mobile Text Area', 'Enter Your Message: ');
    }

    public function createButton(): AbstractButton
    {
        return new MobileFactoryButton('Save');
    }

    public function createWindow(): AbstractWindow
    {
        return new MobileWindow('720x320');
    }
}
