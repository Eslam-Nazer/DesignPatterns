<?php

namespace DesignPattern\Design\Patterns\Structural\Proxy\RoutingComponents;

class FireWall
{
    public function isValid(string $packet): bool
    {
        return !preg_match("/__BAD__/i", $packet);
    }
}
