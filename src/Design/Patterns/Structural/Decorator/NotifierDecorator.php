<?php

namespace DesignPattern\Design\Patterns\Structural\Decorator;

class NotifierDecorator implements Notifier
{
    /**
     * Summary of __construct
     * @param Notifier $notifier
     */
    public function __construct(
        private Notifier $notifier,
    ) {}

    /**
     * Summary of setNotifier
     * @param Notifier $notifier
     * @return void
     */
    public function setNotifier(Notifier $notifier): void
    {
        $this->notifier = $notifier;
    }

    public function notify()
    {
        $this->notifier->notify();
    }
}
