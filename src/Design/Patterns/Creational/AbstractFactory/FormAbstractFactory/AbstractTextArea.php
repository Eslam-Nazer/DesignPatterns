<?php

namespace DesignPattern\Design\Patterns\Creational\AbstractFactory\FormAbstractFactory;

abstract class AbstractTextArea implements Renderable
{
    /**
     * @param string $name
     * @param string $text
     */
    public function __construct(
        protected string $name,
        protected string $text
    ) {}

    /**
     * @param string $name
     */
    public function setName(string $name)
    {
        $this->name = $name;
    }
    /**
     * @param string $text
     */
    public function setText(string $text)
    {
        $this->text = $text;
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
    public function getText(): string
    {
        return $this->text;
    }

    abstract public function onResize(): void;
}
