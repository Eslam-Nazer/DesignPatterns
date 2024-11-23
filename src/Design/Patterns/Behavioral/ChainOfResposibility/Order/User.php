<?php

namespace DesignPattern\Design\Patterns\Behavioral\ChainOfResposibility\Order;

class User
{
    /**
     * Summary of __construct
     * @param string $id
     */
    public function __construct(
        private string $id,
        private string $name,
    ) {}

    public function getId()
    {
        return $this->id;
    }

    public function getName(): string
    {
        return $this->name;
    }
}
