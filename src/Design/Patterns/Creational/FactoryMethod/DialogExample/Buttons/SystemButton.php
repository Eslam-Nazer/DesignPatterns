<?php

namespace DesignPattern\Design\Patterns\Creational\FactoryMethod\DialogExample\Buttons;

class SystemButton extends Button
{
    public function show(): string
    {
        return '# Click Me (System Button) #';
    }

    public function click(): void
    {
        //
    }
}
