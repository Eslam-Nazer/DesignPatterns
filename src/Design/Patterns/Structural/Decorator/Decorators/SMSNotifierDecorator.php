<?php

namespace DesignPattern\Design\Patterns\Structural\Decorator\Decorators;

use DesignPattern\Design\Patterns\Structural\Decorator\Notifier;
use DesignPattern\Design\Patterns\Structural\Decorator\NotifierDecorator;

class SMSNotifierDecorator extends NotifierDecorator
{
    /**
     * Summary of __construct
     * @param Notifier $notifier
     * @param string $phoneNumber
     */
    public function __construct(
        protected Notifier $notifier,
        protected string $phoneNumber,
    ) {
        parent::__construct($notifier);
    }

    public function notify()
    {
        parent::notify();
        $this->sendSMS();
    }

    private function sendSMS()
    {
        echo "sending sms to: {$this->phoneNumber}\n";
        echo "Your latest operation was executed successfully\n";
    }
}
