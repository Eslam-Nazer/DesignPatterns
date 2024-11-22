<?php

namespace DesignPattern\Design\Patterns\Structural\Composite\DataModels;

use DesignPattern\Design\Patterns\Structural\Composite\DTOs\DTOModel;

class PurchaseBill implements DTOModel
{
    /**
     * Summary of __construct
     * @param DTOModel[]|array $orders
     */
    public function __construct(
        private array $orders,
    ) {}

    public function addOrder(DTOModel $order): void
    {
        array_push($this->orders, $order);
    }

    public function __toString()
    {
        return json_encode($this->render(), JSON_PRETTY_PRINT);
    }

    public function render(): array
    {
        return [
            "orders"    => [
                array_map(
                    fn(DTOModel $order) => $order->render(),
                    $this->orders
                ),
            ]
        ];
    }
}
