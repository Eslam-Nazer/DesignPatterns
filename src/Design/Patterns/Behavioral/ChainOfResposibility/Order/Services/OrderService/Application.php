<?php

namespace DesignPattern\Design\Patterns\Behavioral\ChainOfResposibility\Order\Services\OrderService;

use DesignPattern\Design\Patterns\Behavioral\ChainOfResposibility\Order\Order;

class Application
{
    private array $order = [];

    public function addOrder(Order $order)
    {
        array_push($this->order, $order);
    }
}
