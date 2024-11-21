<?php

namespace DesignPattern\Design\Patterns\Structural\Proxy\RoutingComponents;

class RoutingTable
{
    /**
     * @var Route[]
     */
    private array $routes;

    /**
     * Summary of __construct
     * @param array|Route[] $routes
     */
    public function __construct($routes)
    {
        $this->routes = $routes;
    }

    /**
     * Summary of mapUrlToIPAddress
     * @param string $url
     * @return Route|null
     */
    public function mapUrlToIPAddress(string $url): ?Route
    {
        foreach ($this->routes as $route) {
            if ($route->getUrl() === $url) {
                return $route;
            }
            return null;
        }
    }
}
