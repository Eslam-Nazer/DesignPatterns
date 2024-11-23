<?php

namespace DesignPattern\Design\Patterns\Behavioral\ChainOfResposibility\Order\Handlers;

use DesignPattern\Design\Patterns\Behavioral\ChainOfResposibility\Order\Order;

interface Handler
{
    public function setNextHandler(Handler $handler);
    public function handler(Order $order);
}
