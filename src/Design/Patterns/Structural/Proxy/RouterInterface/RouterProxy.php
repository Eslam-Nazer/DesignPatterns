<?php

namespace DesignPattern\Design\Patterns\Structural\Proxy\RouterInterface;

use DesignPattern\Design\Patterns\Structural\Proxy\Clients\Application;

class RouterProxy implements RouterInterface
{
    /**
     * @param RouterInterface $router
     * @param Application $application
     * @param array $acl
     */
    public function __construct(
        private RouterInterface $router,
        private Application $application,
        private array $acl
    ) {}

    public function reslove(string $url): bool
    {
        if ($this->isAllowedApp()) {
            return $this->router->reslove($url);
        }
        echo "this application not allowed";
        return false;
    }

    public function stream()
    {
        if ($this->isAllowedApp()) {
            return $this->router->stream();
        }
        echo "this application not allowed";
        return false;
    }

    private function isAllowedApp(): bool
    {
        return in_array($this->application->getAppName(), $this->acl);
    }
}
