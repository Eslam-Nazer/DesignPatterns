<?php

namespace DesignPattern\Design\Patterns\Behavioral\ChainOfResposibility\Order\Handlers;

use DesignPattern\Design\Patterns\Behavioral\ChainOfResposibility\Order\Exceptions\NoLoyalUserException;
use DesignPattern\Design\Patterns\Behavioral\ChainOfResposibility\Order\Exceptions\NoProductAvailableException;
use DesignPattern\Design\Patterns\Behavioral\ChainOfResposibility\Order\Order;
use DesignPattern\Design\Patterns\Behavioral\ChainOfResposibility\Order\Services\ProductAvailabilityService\Application;
use Exception;

class ProductAvailabilityHandler extends BaseHandler
{
    /**
     * Summary of handler
     * @param Order $order
     * @throws NoLoyalUserException
     */
    public function handler(Order $order)
    {
        $productService = new Application();
        if ($productService->isProductAvailable($order->getProduct())) {
            if ($this->getNextHandler() !== null) {
                $this->getNextHandler()->handler($order);
            }
        } else {
            throw new NoProductAvailableException();
        }
    }
}
