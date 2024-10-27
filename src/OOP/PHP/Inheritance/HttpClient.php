<?php

namespace DesignPattern\OOP\PHP\Inheritance;

class HttpClient extends Client
{
    public function __construct(string $source, int $time)
    {
        parent::__construct($source, $time);
    }

    public function welcomeAfterConnect(): string
    {
        return $this->connect() . "an extra welcome message " . $this->source;
    }
}
