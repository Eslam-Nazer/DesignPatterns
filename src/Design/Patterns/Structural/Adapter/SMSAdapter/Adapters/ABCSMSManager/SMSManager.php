<?php

namespace DesignPattern\Design\Patterns\Structural\Adapter\SMSAdapter\Adapters\ABCSMSManager;

class SMSManager
{
    public function send(array $messages)
    {
        if ($this->checkConnection() && $this->authentcate() && $this->connect()) {
            foreach ($messages as $message) {
                echo "Your message {$message['text']} is being sent to {$message['number']}\n";
            }
        }
    }

    public function connect(): bool
    {
        return true;
    }

    public function checkConnection(): bool
    {
        return true;
    }

    public function authentcate(): bool
    {
        return true;
    }

    /**
     * Summary of validatePhoneNumber
     * @param string $phoneNumber
     * @return bool
     */
    public function validatePhoneNumber(string $phoneNumber): bool
    {
        return strlen($phoneNumber) < 8;
    }

    /**
     * Summary of getDeliveryStatus
     * @return string
     */
    public function getDeliveryStatus(): string
    {
        return rand(5, 8);
    }
}
