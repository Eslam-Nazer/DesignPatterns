<?php

require "vendor/autoload.php";

use DesignPattern\Design\Patterns\Behavioral\ChainOfResposibility\Order\User;
use DesignPattern\Design\Patterns\Behavioral\ChainOfResposibility\Order\Product;

use DesignPattern\Design\Patterns\Behavioral\ChainOfResposibility\Order\Order;
use DesignPattern\Design\Patterns\Behavioral\ChainOfResposibility\Order\Handlers\OrderHandler;
use DesignPattern\Design\Patterns\Behavioral\ChainOfResposibility\Order\Handlers\LoyaltyHandler;
use DesignPattern\Design\Patterns\Behavioral\ChainOfResposibility\Order\Handlers\ShipmentHandler;
use DesignPattern\Design\Patterns\Behavioral\ChainOfResposibility\Order\Exceptions\NoShipmentException;
use DesignPattern\Design\Patterns\Behavioral\ChainOfResposibility\Order\Exceptions\NoLoyalUserException;
use DesignPattern\Design\Patterns\Behavioral\ChainOfResposibility\Order\Handlers\ProductAvailabilityHandler;
use DesignPattern\Design\Patterns\Behavioral\ChainOfResposibility\Order\Exceptions\NoProductAvailableException;

$user = new User("USR-103", "Eslam Abdo");
$product = new Product("PRD-1", "Lenovo laptop");
$order = new Order($user, $product, new DateTime("2024-10-15"));

$loyaltyHandler = new LoyaltyHandler();
$loyaltyHandler->setNextHandler(new ProductAvailabilityHandler)
    ->setNextHandler(new ShipmentHandler())
    ->setNextHandler(new OrderHandler());

try {
    $loyaltyHandler->handler($order);
} catch (NoLoyalUserException $e) {
    echo $e->getMessage() . "\n";
} catch (NoProductAvailableException $e) {
    echo $e->getMessage() . "\n";
} catch (NoShipmentException $e) {
    echo $e->getMessage() . "\n";
}
