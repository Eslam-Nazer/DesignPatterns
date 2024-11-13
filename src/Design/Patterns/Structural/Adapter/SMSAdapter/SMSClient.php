<?php

namespace DesignPattern\Design\Patterns\Structural\Adapter\SMSAdapter;

use DesignPattern\Design\Patterns\Structural\Adapter\SMSAdapter\Messages\Message;


abstract class SMSClient
{
    protected string $deliveryStatus;

    /**
     * Summary of __construct
     * @param array $messages
     */
    public function __construct(
        protected array $messages = [],
    ) {}

    public function addMessage(Message $message): void
    {
        array_push($this->messages, $message);
    }

    abstract public function filterNumbers();
    abstract public function send();
    abstract public function getDeliveryStatus();
}
