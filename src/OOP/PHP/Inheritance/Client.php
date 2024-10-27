<?php

namespace DesignPattern\OOP\PHP\Inheritance;

class Client
{
    protected string $source;
    protected int $time;

    public function __construct(string $source, int $time)
    {
        $this->source = $source;
        $this->time = $time;
    }

    public function connect(): string
    {
        return "I am connect to {$this->source} \n";
    }
    public function call(string $url): string
    {
        return "I have fetched data from {$url}: DATATATATATATATATA\n";
    }
    public function terminate(): bool
    {
        return true;
    }
}
