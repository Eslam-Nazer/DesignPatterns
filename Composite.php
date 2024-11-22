<?php

use DesignPattern\Design\Patterns\Structural\Composite\DataModels\AddressDTO;
use DesignPattern\Design\Patterns\Structural\Composite\DataModels\OrderDto;
use DesignPattern\Design\Patterns\Structural\Composite\DataModels\OrderOwnerDTO;
use DesignPattern\Design\Patterns\Structural\Composite\DataModels\PurchaseBill;

require "vendor/autoload.php";

$address1 = new AddressDTO(
    "Al Ahram street",
    "29a",
    "2343232"
);
$address2 = new AddressDTO(
    "Cairo street",
    "253",
    "435436"
);
$address3 = new AddressDTO(
    "Mansora street",
    "9A-1",
    "456546542"
);

$mohammed = new OrderOwnerDTO(
    "Mohammed adbo",
    $address1
);
$ahmed = new OrderOwnerDTO(
    "Ahmed Mahmoud",
    $address2
);
$eslam = new OrderOwnerDTO(
    "Eslam Nazer",
    $address3
);

$order1 = new OrderDto(
    $mohammed,
    new DateTime(),
    1200.00,
    2
);
$order2 = new OrderDto(
    $ahmed,
    new DateTime(),
    3500.50,
    5
);
$order3 = new OrderDto(
    $eslam,
    new DateTime(),
    2000.70,
    3
);

$bill = new PurchaseBill([
    $order1,
    $order2,
    $order3
]);

echo $bill;
