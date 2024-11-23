<?php

namespace DesignPattern\Design\Patterns\Behavioral\ChainOfResposibility\Order\Exceptions;

use Exception;

class NoLoyalUserException extends Exception
{
    public function __construct(
        $message = "Sorry you do not have required points to the order"
    ) {
        parent::__construct($message);
    }
}
