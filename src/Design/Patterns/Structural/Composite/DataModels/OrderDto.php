<?php

namespace DesignPattern\Design\Patterns\Structural\Composite\DataModels;

use DesignPattern\Design\Patterns\Structural\Composite\DTOs\DTOModel;
use DateTime;


class OrderDto implements DTOModel
{
    /**
     * Summary of __construct
     * @param DTOModel $owner
     * @param \DateTime $createdAt
     * @param float $price
     * @param int $quantity
     */
    public function __construct(
        private DTOModel $owner,
        private DateTime $createdAt,
        private float $price,
        private int $quantity,
    ) {}

    /**
     * Summary of render
     * @return array
     */
    public function render(): array
    {
        return [
            'owner'         => $this->getOwner()->render(),
            'createdAt'     => $this->getCreatedAt()->format('Y-m-d'),
            'price'         => $this->getPrice(),
            'quantity'      => $this->getQuantity(),
        ];
    }

    /**
     * Summary of getOwner
     * @return DTOModel
     */
    public function getOwner(): DTOModel
    {
        return $this->owner;
    }

    /**
     * Summary of getCreatedAt
     * @return DateTime
     */
    public function getCreatedAt(): DateTime
    {
        return $this->createdAt;
    }

    /**
     * Summary of getPrice
     * @return float
     */
    public function getPrice(): float
    {
        return $this->price;
    }

    /**
     * Summary of getQuantity
     * @return int
     */
    public function getQuantity(): int
    {
        return $this->quantity;
    }
}
