<?php

namespace DesignPattern\Design\Patterns\Structural\Decorator\Decorators;

use DesignPattern\Design\Patterns\Structural\Decorator\Notifier;
use DesignPattern\Design\Patterns\Structural\Decorator\NotifierDecorator;


class WhatsAppNotifierDecorator extends NotifierDecorator
{
    public function __construct(
        protected Notifier $notifier,
        protected string $phoneNumber,
    ) {
        parent::__construct($notifier);
    }

    public function notify()
    {
        parent::notify();
        $this->sendWhatsAppMsg();
    }

    public function sendWhatsAppMsg()
    {
        echo "sending WhatsApp to: {$this->phoneNumber}\n";
        echo "Your latest operation was executed successfully\n";
    }
}
