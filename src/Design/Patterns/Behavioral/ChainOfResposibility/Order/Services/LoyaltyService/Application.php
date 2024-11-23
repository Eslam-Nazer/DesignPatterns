<?php

namespace DesignPattern\Design\Patterns\Behavioral\ChainOfResposibility\Order\Services\LoyaltyService;

use DesignPattern\Design\Patterns\Behavioral\ChainOfResposibility\Order\User;

class Application
{
    private array $loyaltyDirectory = [
        "USR-100" => 5,
        "USR-101" => 7,
        "USR-103" => 3,
    ];

    public function isUserLoyal(User $user): bool
    {
        return $this->loyaltyDirectory[$user->getId()] >= 5;
    }
}
