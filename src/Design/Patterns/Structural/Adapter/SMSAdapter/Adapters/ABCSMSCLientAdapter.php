<?php

namespace DesignPattern\Design\Patterns\Structural\Adapter\SMSAdapter\Adapters;

use DesignPattern\Design\Patterns\Structural\Adapter\SMSAdapter\Adapters\ABCSMSManager\SMSManager;
use DesignPattern\Design\Patterns\Structural\Adapter\SMSAdapter\Messages\Message;
use DesignPattern\Design\Patterns\Structural\Adapter\SMSAdapter\SMSClient;

class ABCSMSCLientAdapter extends SMSClient
{
    private ?SMSManager $smsManager = null;

    public function __construct(array $messages = [])
    {
        parent::__construct($messages);
        $this->smsManager = new SMSManager();
    }

    public function filterNumbers(): bool
    {
        $this->messages = array_filter(
            $this->messages,
            fn(Message $message): bool => $this->smsManager->validatePhoneNumber($message->getNumber())
        );
        return !empty($this->messages);
    }

    public function send()
    {
        if ($this->filterNumbers()) {
            $this->smsManager->send(
                array_map(function (Message $message): array {
                    return [
                        "number" => $message->getNumber(),
                        "text" => $message->getMessages()
                    ];
                }, $this->messages)
            );
        }
    }

    public function getDeliveryStatus()
    {
        return $this->smsManager->getDeliveryStatus() - 4;
    }
}
