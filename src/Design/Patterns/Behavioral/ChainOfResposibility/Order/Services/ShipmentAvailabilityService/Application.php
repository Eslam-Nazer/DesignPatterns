<?php

namespace DesignPattern\Design\Patterns\Behavioral\ChainOfResposibility\Order\Services\ShipmentAvailabilityService;

use DesignPattern\Design\Patterns\Behavioral\ChainOfResposibility\Order\Order;
use DateTime;

class Application
{
    private array $shipmentAvailability = [
        "TRK-1" => "2020-07-02",
        "TRK-2" => "2022-08-20",
        "TRK-3" => "2024-10-15",
    ];

    public function hasShipmentTruckAvailable(Order $order)
    {
        foreach ($this->shipmentAvailability as $shipmentDate) {
            if ($order->getShipmentDate() >= new DateTime($shipmentDate)) {
                return true;
            }
        }
        return false;
    }
}
