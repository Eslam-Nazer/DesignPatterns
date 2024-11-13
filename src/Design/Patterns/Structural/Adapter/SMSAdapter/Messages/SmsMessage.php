<?php

namespace DesignPattern\Design\Patterns\Structural\Adapter\SMSAdapter\Messages;

class SmsMessage implements Message
{
    /**
     * Summary of __construct
     * @param string $messages
     * @param string $number
     */
    public function __construct(
        private string $messages,
        private string $number
    ) {}

    /**
     * Summary of getMessages
     * @return string
     */
    public function getMessages(): string
    {
        return $this->messages;
    }

    /**
     * Summary of getNumber
     * @return string
     */
    public function getNumber(): string
    {
        return $this->number;
    }

    /**
     * Summary of validateMessages
     * @return bool
     */
    public function validateMessages(): bool
    {
        return strlen($this->messages) < 10;
    }
    /**
     * Summary of validateNumber
     * @return bool
     */
    public function validateNumber(): bool
    {
        return strlen($this->number) > 8;
    }
}
