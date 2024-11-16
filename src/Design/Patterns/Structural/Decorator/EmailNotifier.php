<?php

namespace DesignPattern\Design\Patterns\Structural\Decorator;

class EmailNotifier implements Notifier
{
    /**
     * Summary of __construct
     * @param string $email
     */
    public function __construct(
        private string $email,
    ) {}


    public function notify()
    {
        echo "Sending email to: {$this->email}\n";
        echo "Your latest operation was executed successfully\n";
    }
}
