<?php

namespace DesignPattern\Design\Patterns\Behavioral\ChainOfResposibility\Order;

class Product
{
    /**
     * Summary of __construct
     * @param string $id
     * @param string $name
     */
    public function __construct(
        private string $id,
        private string $name,
    ) {}

    /**
     * Summary of getId
     * @return string
     */
    public function getId(): string
    {
        return $this->id;
    }

    /**
     * Summary of getName
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }
}
