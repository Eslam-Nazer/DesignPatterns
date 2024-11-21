<?php

namespace DesignPattern\Design\Patterns\Structural\Proxy\RouterInterface;

use DesignPattern\Design\Patterns\Structural\Proxy\RoutingComponents\FireWall;
use DesignPattern\Design\Patterns\Structural\Proxy\RoutingComponents\RoutingTable;
use DesignPattern\Design\Patterns\Structural\Proxy\RoutingComponents\ConnectionManager;

class Router implements RouterInterface
{
    /**
     * Summary of __construct
     * @param ConnectionManager $connectionManager
     * @param RoutingTable $routingTable
     * @param FireWall $fireWall
     */
    public function __construct(
        private ConnectionManager $connectionManager,
        private RoutingTable $routingTable,
        private FireWall $fireWall,
    ) {}

    /**
     * Summary of reslove
     * @param string $url
     * @return bool
     */
    public function reslove(string $url): bool
    {
        $route = $this->routingTable->mapUrlToIPAddress($url);
        if ($route) {
            $this->connect($route->getIpAddress());
        } else {
            echo "Route was not found...\n";
            return false;
        }
        return true;
    }

    public function stream()
    {
        $packets = [
            "Package one is clean",
            "Package two is clean",
            "Package three is __BAD__",
            "Package four is __BAD__",
        ];

        foreach ($packets as $packet) {
            if ($this->fireWall->isValid($packet)) {
                echo "{$packet}\n";
            } else {
                echo "Dropping a packets\n";
            }
        }

        $this->terminate();
    }

    private function connect(string $ipAddress)
    {
        $this->connectionManager->connectTo($ipAddress);
    }

    private function terminate()
    {
        $this->connectionManager->terminate();
    }
}
