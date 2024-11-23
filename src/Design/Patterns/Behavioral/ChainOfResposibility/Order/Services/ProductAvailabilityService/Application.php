<?php

namespace DesignPattern\Design\Patterns\Behavioral\ChainOfResposibility\Order\Services\ProductAvailabilityService;

use DesignPattern\Design\Patterns\Behavioral\ChainOfResposibility\Order\Product;

class Application
{
    private array $productAvailability = [
        "PRD-1" => 10,
        "PRD-2" => 73,
        "PRD-3" => 0,
    ];

    public function isProductAvailable(Product $product): bool
    {
        return $this->productAvailability[$product->getId()] > 0;
    }
}
