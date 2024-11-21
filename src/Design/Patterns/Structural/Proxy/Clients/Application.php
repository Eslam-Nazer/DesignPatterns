<?php

namespace DesignPattern\Design\Patterns\Structural\Proxy\Clients;

class Application
{
    /**
     * Summary of __construct
     * @param string $appName
     */
    public function __construct(
        protected string $appName,
    ) {}

    /**
     * Summary of getAppName
     * @return string
     */
    public function getAppName(): string
    {
        return $this->appName;
    }

    /**
     * Summary of setAppName
     * @param string $appName
     * @return void
     */
    public function setAppName(string $appName): void
    {
        $this->appName = $appName;
    }
}
