<?php

namespace DesignPattern\Design\Patterns\Behavioral\ChainOfResposibility\Order\Handlers;

use DesignPattern\Design\Patterns\Behavioral\ChainOfResposibility\Order\Order;
use DesignPattern\Design\Patterns\Behavioral\ChainOfResposibility\Order\Services\OrderService\Application;
use Exception;

class OrderHandler extends BaseHandler
{
    public function handler(Order $order)
    {
        $orderService = new Application();
        $orderService->addOrder($order);
        echo "the order of {$order->getUser()->getName()} 
        containes {$order->getProduct()->getName()} 
        and will be shipped by {$order->getShipmentDate()->format("Y-m-d")}\n";
    }
}
