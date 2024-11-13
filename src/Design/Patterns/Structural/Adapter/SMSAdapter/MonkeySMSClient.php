<?php

namespace DesignPattern\Design\Patterns\Structural\Adapter\SMSAdapter;

use DesignPattern\Design\Patterns\Structural\Adapter\SMSAdapter\SMSClient;
use DesignPattern\Design\Patterns\Structural\Adapter\SMSAdapter\Messages\Message;


class MonkeySMSClient extends SMSClient
{
    public function filterNumbers(): bool
    {
        $this->messages = array_filter($this->messages, fn(Message $message) => $message->validateNumber());
        return !empty($this->messages);
    }

    public function send(): bool
    {
        /**
         * @var Message $message
         */
        if ($this->messages) {
            foreach ($this->messages as $message) {
                $this->deliveryStatus = rand(1, 4);
                echo "Message is being sent {$message->getMessages()}";
            }
        }
        return $this->getDeliveryStatus() === SmsDeliveryStatus::SENT;
    }

    public function getDeliveryStatus(): string
    {
        return $this->deliveryStatus;
    }
}
