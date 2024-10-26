<?php

use DesignPattern\OOP\PHP\Abstraction\BMW;
use DesignPattern\OOP\PHP\Employee;
use DesignPattern\OOP\PHP\Abstraction\Microwave;
use DesignPattern\OOP\PHP\Abstraction\Order;

require 'vendor/autoload.php';

$emp = new Employee(
    name: "Eslam",
    age: 24,
    salary: 3600
);
/**
 * Abstraction Example
 */
$microwave = new Microwave(temp: 90, program: "DE1", time: 30);

if ($microwave->turnOn()) {
    var_dump($microwave->deFreeze());
}
if (! $microwave->turnOff()) {
    var_dump($microwave->deFreeze());
}

$bmw = new BMW(speed: 320, numberOfDoors: 2, gearboxSystem: "Front", color: "black");

$order = new Order(source: "Cairo", destination: "Alexandria", weight: 120);

var_dump($order->deliverOrder($bmw));
