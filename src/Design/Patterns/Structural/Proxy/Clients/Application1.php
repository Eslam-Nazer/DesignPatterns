<?php

namespace DesignPattern\Design\Patterns\Structural\Proxy\Clients;

class Application1 extends Application
{
    /**
     * Summary of __construct
     * @param \DateTime $initializedAt
     * @param string $appName
     */
    public function __construct(
        private \DateTime $initializedAt,
        string $appName = "APP_1",
    ) {
        parent::__construct($appName);
    }
}
