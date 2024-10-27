<?php

namespace DesignPattern\OOP\PHP\Inheritance;

class TCPClient extends Client
{
    public int $portNumber;

    public function __construct(string $source, int $time, int $portNumber)
    {
        parent::__construct($source, $time);
        $this->portNumber = $portNumber;
    }
}
