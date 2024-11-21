<?php

namespace DesignPattern\Design\Patterns\Structural\Proxy\RouterInterface;

interface RouterInterface
{
    public function reslove(string $url): bool;
    public function stream();
}
