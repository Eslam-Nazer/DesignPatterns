<?php

namespace DesignPattern\Design\Patterns\Behavioral\ChainOfResposibility\Order\Exceptions;

use Exception;

class NoProductAvailableException extends Exception
{
    public function __construct(
        $message = "Sorry, the product is not available at the moment"
    ) {
        parent::__construct($message);
    }
}
