<?php

namespace DesignPattern\Design\Patterns\Structural\Adapter\SMSAdapter\Messages;

interface Message
{
    public function getMessages(): string;
    public function getNumber(): string;
    public function validateMessages(): bool;
    public function validateNumber(): bool;
}
