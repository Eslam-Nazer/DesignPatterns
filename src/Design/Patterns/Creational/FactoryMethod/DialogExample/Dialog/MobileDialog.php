<?php

namespace DesignPattern\Design\Patterns\Creational\FactoryMethod\DialogExample\Dialog;

use DesignPattern\Design\Patterns\Creational\FactoryMethod\DialogExample\Buttons\Button;
use DesignPattern\Design\Patterns\Creational\FactoryMethod\DialogExample\Buttons\UIButton;

class MobileDialog extends Dialog
{
    public function createdButton(): Button
    {
        return new UIButton();
    }
}
