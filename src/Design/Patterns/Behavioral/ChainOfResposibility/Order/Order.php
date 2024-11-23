<?php

namespace DesignPattern\Design\Patterns\Behavioral\ChainOfResposibility\Order;

use DesignPattern\Design\Patterns\Behavioral\ChainOfResposibility\Order\Product;
use DesignPattern\Design\Patterns\Behavioral\ChainOfResposibility\Order\User;
use DateTime;

class Order
{
    /**
     * Summary of __construct
     * @param User $user
     * @param Product $product
     * @param DateTime $shipmentDate
     */
    public function __construct(
        private User $user,
        private Product $product,
        private DateTime $shipmentDate,
    ) {}

    /**
     * Summary of getUser
     * @return User
     */
    public function getUser(): User
    {
        return $this->user;
    }

    /**
     * Summary of getProduct
     * @return Product
     */
    public function getProduct(): Product
    {
        return $this->product;
    }

    /**
     * Summary of getShipmentDate
     * @return DateTime
     */
    public function getShipmentDate(): DateTime
    {
        return $this->shipmentDate;
    }
}
