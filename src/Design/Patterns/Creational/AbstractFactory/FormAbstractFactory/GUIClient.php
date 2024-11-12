<?php

namespace DesignPattern\Design\Patterns\Creational\AbstractFactory\FormAbstractFactory;

class GUIClient
{
    private AbstractFormFactory $formFactory;

    /**
     * Summary of __construct
     * @param AbstractFormFactory $formFactory
     */
    public function __construct(AbstractFormFactory $formFactory)
    {
        $this->formFactory = $formFactory;
    }

    /**
     * Summary of setFormFactory
     * @param AbstractFormFactory $formFactory
     */
    public function setFormFactory(AbstractFormFactory $formFactory): void
    {
        $this->formFactory = $formFactory;
    }

    /**
     * Summary of createForm
     * @return string
     */
    public function createForm(): string
    {
        $window = $this->formFactory->createWindow();
        $window->addComponents($this->formFactory->createTextInput());
        $window->addComponents($this->formFactory->createTextArea());
        $window->addComponents($this->formFactory->createButton());
        return $window->render();
    }
}
