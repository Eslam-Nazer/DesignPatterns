<?php

namespace DesignPattern\Design\Patterns\Creational\FactoryMethod\DialogExample\Buttons;

abstract class Button
{
    abstract function show(): string;
    abstract function click(): void;
}
