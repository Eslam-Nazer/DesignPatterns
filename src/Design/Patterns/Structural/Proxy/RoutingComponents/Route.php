<?php

namespace DesignPattern\Design\Patterns\Structural\Proxy\RoutingComponents;

class Route
{
    /**
     * @param string $url
     * @param string $ipAddress
     */
    public function __construct(
        private string $url,
        private string $ipAddress,
    ) {}

    /**
     * Summary of getUrl
     * @return string
     */
    public function getUrl(): string
    {
        return $this->url;
    }

    /**
     * Summary of getIpAddress
     * @return string
     */
    public function getIpAddress(): string
    {
        return $this->ipAddress;
    }

    /**
     * Summary of setUrl
     * @param string $url
     * @return void
     */
    public function setUrl(string $url): void
    {
        $this->url = $url;
    }

    /**
     * Summary of setIpAddress
     * @param string $ipAddress
     * @return void
     */
    public function setIpAddress(string $ipAddress): void
    {
        $this->ipAddress = $ipAddress;
    }
}
