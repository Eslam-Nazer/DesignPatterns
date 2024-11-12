<?php

namespace DesignPattern\Design\Patterns\Creational\AbstractFactory\FormAbstractFactory;

abstract class AbstractTextInput implements Renderable
{
    /**
     * @param string $name
     * @param string $label
     * @param string $value
     */
    public function __construct(
        protected string $name,
        protected string $label,
        protected string $value
    ) {}

    /**
     * @param string $name
     */
    public function setName(string $name): void
    {
        $this->name = $name;
    }
    /**
     * @param string $label
     */
    public function setLabel(string $label): void
    {
        $this->label = $label;
    }
    /**
     * @param string $value
     */
    public function setValue(string $value): void
    {
        $this->value = $value;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }
    /**
     * @return string
     */
    public function getLabel(): string
    {
        return $this->label;
    }
    /**
     * @return string
     */
    public function getValue(): string
    {
        return $this->value;
    }

    abstract public function onChange(): void;
}
