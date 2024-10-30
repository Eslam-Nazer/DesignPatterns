<?php

namespace DesignPattern\Design\Patterns\Creational\FactoryMethod\DialogExample\Dialog;

use DesignPattern\Design\Patterns\Creational\FactoryMethod\DialogExample\Buttons\Button;
use DesignPattern\Design\Patterns\Creational\FactoryMethod\DialogExample\Buttons\WebButton;

class WebDialog extends Dialog
{
    public function createdButton(): Button
    {
        return new WebButton();
    }
}
