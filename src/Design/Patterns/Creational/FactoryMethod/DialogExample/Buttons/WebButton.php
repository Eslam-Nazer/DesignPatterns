<?php

namespace DesignPattern\Design\Patterns\Creational\FactoryMethod\DialogExample\Buttons;

class WebButton extends Button
{
    public function show(): string
    {
        return '<div><button>Click Me (Web Button)</button></div>';
    }

    public function click(): void
    {
        //
    }
}
