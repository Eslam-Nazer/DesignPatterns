<?php

namespace DesignPattern\Design\Patterns\Creational\AbstractFactory\FormAbstractFactory;

abstract class AbstractWindow
{
    protected array $components;
    /**
     * @param string $size
     */
    public function __construct(
        protected string $size,
    ) {}

    /**
     * Summary of addComponents
     * @param Renderable $component
     * @return void
     */
    public function addComponents(Renderable $component)
    {
        $this->components[] = $component;
    }

    /**
     * @param string $size
     */
    public function setSize(string $size)
    {
        $this->size = $size;
    }

    /**
     * Summary of render
     * @return string
     */
    public function render(): string
    {
        $renderedComponents =  implode('', array_map(fn(Renderable $elm) => $elm->render(), $this->components));
        return "Welcome to our GUI form\n {$renderedComponents}";
    }

    /**
     * @return string
     */
    public function getSize(): string
    {
        return $this->size;
    }

    abstract public function onClose(): void;
    abstract public function onResize(): void;
}
