<?php

namespace DesignPattern\Design\Patterns\Behavioral\ChainOfResposibility\Order\Handlers;

use DesignPattern\Design\Patterns\Behavioral\ChainOfResposibility\Order\Exceptions\NoShipmentException;
use DesignPattern\Design\Patterns\Behavioral\ChainOfResposibility\Order\Order;
use DesignPattern\Design\Patterns\Behavioral\ChainOfResposibility\Order\Services\ShipmentAvailabilityService\Application;
use Exception;

class ShipmentHandler extends BaseHandler
{
    /**
     * Summary of handler
     * @param Order $order
     * @throws NoShipmentException
     */
    public function handler(Order $order)
    {
        $shipmentAvailability = new Application();
        if ($shipmentAvailability->hasShipmentTruckAvailable($order)) {
            if ($this->getNextHandler() !== null) {
                $this->getNextHandler()->handler($order);
            }
        } else {
            throw new NoShipmentException();
        }
    }
}
