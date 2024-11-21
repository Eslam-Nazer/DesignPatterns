<?php

namespace DesignPattern\Design\Patterns\Structural\Proxy\Clients;

class Application2 extends Application
{
    /**
     * Summary of __construct
     * @param string $appName
     */
    public function __construct(
        string $appName = "APP_2",
    ) {
        parent::__construct($appName);
    }
}
