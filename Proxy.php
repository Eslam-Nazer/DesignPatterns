<?php

use DesignPattern\Design\Patterns\Structural\Proxy\Clients\Application1;
use DesignPattern\Design\Patterns\Structural\Proxy\Clients\Application2;
use DesignPattern\Design\Patterns\Structural\Proxy\RouterInterface\RouterProxy;
use DesignPattern\Design\Patterns\Structural\Proxy\RouterInterface\RouterFactory;

require "vendor/autoload.php";

$acl = ['APP_1', 'APP_3', 'APP_4'];

$app1 = new Application1(new \DateTime());
$app2 = new Application2();

$router = new RouterProxy(
    RouterFactory::createRouter(),
    $app2,
    $acl
);

if ($router->reslove("http://www.google.com")) {
    $router->stream();
}
