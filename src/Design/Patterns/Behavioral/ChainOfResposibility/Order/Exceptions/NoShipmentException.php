<?php

namespace DesignPattern\Design\Patterns\Behavioral\ChainOfResposibility\Order\Exceptions;

use Exception;

class NoShipmentException extends Exception
{
    public function __construct(
        $message = "Sorry, we do not ship at this time"
    ) {
        parent::__construct($message);
    }
}
