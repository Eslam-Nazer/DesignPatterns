<?php

namespace DesignPattern\Design\Patterns\Structural\Proxy\RouterInterface;

use DesignPattern\Design\Patterns\Structural\Proxy\RouterInterface\Router;
use DesignPattern\Design\Patterns\Structural\Proxy\RoutingComponents\Route;
use DesignPattern\Design\Patterns\Structural\Proxy\RoutingComponents\FireWall;
use DesignPattern\Design\Patterns\Structural\Proxy\RoutingComponents\RoutingTable;
use DesignPattern\Design\Patterns\Structural\Proxy\RoutingComponents\ConnectionManager;

class RouterFactory
{

    /**
     * Summary of createRouter
     * @return RouterInterface
     */
    public static function createRouter(): RouterInterface
    {
        $routes = [
            new Route("http://www.google.com", "156.233.22.1"),
            new Route("http://www.abc.com", "93.23.2.1"),
            new Route("http://www.xyz.com", "18.87.190.11"),
        ];

        $table = new RoutingTable($routes);
        $firewall = new FireWall();
        $connectionManager = new ConnectionManager();

        return new Router(
            $connectionManager,
            $table,
            $firewall
        );
    }
}
