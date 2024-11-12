<?php

namespace DesignPattern\Design\Patterns\Creational\AbstractFactory\FormAbstractFactory;

abstract class AbstractButton implements Renderable
{
    /**
     * @param string $value
     */
    public function __construct(
        protected string $value
    ) {}

    /**
     * @param string $value
     */
    public function setValue(string $value)
    {
        $this->value = $value;
    }

    /**
     * @return string
     */
    public function getValue(): string
    {
        return $this->value;
    }

    abstract public function onClick(): void;
}
