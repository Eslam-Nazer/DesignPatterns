<?php

namespace DesignPattern\Design\Patterns\Behavioral\ChainOfResposibility\Order\Handlers;

use DesignPattern\Design\Patterns\Behavioral\ChainOfResposibility\Order\Exceptions\NoLoyalUserException;
use DesignPattern\Design\Patterns\Behavioral\ChainOfResposibility\Order\Order;
use DesignPattern\Design\Patterns\Behavioral\ChainOfResposibility\Order\Services\LoyaltyService\Application;
use Exception;

class LoyaltyHandler extends BaseHandler
{
    /**
     * Summary of handler
     * @param Order $order
     * @throws NoLoyalUserException
     */
    public function handler(Order $order)
    {
        $loyaltyService = new Application();
        if ($loyaltyService->isUserLoyal($order->getUser())) {
            if ($this->getNextHandler() !== null) {
                $this->getNextHandler()->handler($order);
            }
        } else {
            throw new NoLoyalUserException();
        }
    }
}
