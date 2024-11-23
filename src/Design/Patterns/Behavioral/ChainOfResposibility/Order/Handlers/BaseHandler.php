<?php

namespace DesignPattern\Design\Patterns\Behavioral\ChainOfResposibility\Order\Handlers;

abstract class BaseHandler implements Handler
{
    private Handler $nextHandler;

    /**
     * Summary of setNextHandler
     * @param Handler $handler
     * @return static
     */
    public function setNextHandler(Handler $handler)
    {
        $this->nextHandler = $handler;
        return $this->getNextHandler();
    }

    /**
     * @return Handler
     */
    public function getNextHandler(): Handler
    {
        return $this->nextHandler;
    }
}
