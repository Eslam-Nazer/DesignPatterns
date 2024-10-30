<?php

namespace DesignPattern\Design\Patterns\Creational\FactoryMethod\DialogExample\Buttons;

class UIButton extends Button
{
    public function show(): string
    {
        return "<UIButton props='{Click Me}'>Click Me (UI Button)</UIButton>";
    }

    public function click(): void
    {
        //
    }
}
