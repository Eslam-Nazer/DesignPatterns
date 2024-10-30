<?php

namespace DesignPattern\Design\Patterns\Creational\FactoryMethod\DialogExample\Dialog;

use DesignPattern\Design\Patterns\Creational\FactoryMethod\DialogExample\Buttons\Button;

abstract class Dialog
{
    abstract function createdButton(): Button;

    public function renderDialog(): string
    {
        $button = $this->createdButton();
        return "
        ##############################
        {$button->show()}
        ##############################
        ";
    }
}
