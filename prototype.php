<?php

use DesignPattern\Design\Patterns\Creational\Prototype\Employee\Address;
use DesignPattern\Design\Patterns\Creational\Prototype\Employee\EmployeePrototype;
use DesignPattern\Design\Patterns\Creational\Prototype\Employee\Privileges\Privileges;
use DesignPattern\Design\Patterns\Creational\Prototype\Employee\Privileges\Types\NetworkPrivileges;
use DesignPattern\Design\Patterns\Creational\Prototype\Employee\Privileges\Types\ServerRoomPrivileges;
use DesignPattern\Design\Patterns\Creational\Prototype\Employee\Privileges\Types\WebProjectPrivileges;
use DesignPattern\Design\Patterns\Creational\Prototype\Employee\Profile;
use DesignPattern\Design\Patterns\Creational\Prototype\Employee\Salary;

require 'vendor/autoload.php';

$mohammed = new EmployeePrototype(
    new Profile(
        'Mohemmed Abdoh',
        38,
        new Address(
            51.9348334,
            5483433454,
            'Al azher street',
            'Cairo',
            'Egypt',
            13,
            3454545
        ),
        '+20324234324324',
        '+20324234324324',
        'Mohamed.Abdoh'
    ),
    new Salary(
        2000.50,
        .23,
        300
    ),
    new Privileges(
        [
            new WebProjectPrivileges(),
            new ServerRoomPrivileges()
        ]
    )
);

$mohammed->getPrivileges()->addPrivileges(new NetworkPrivileges());

var_dump($mohammed);

$ahmed = clone $mohammed;
var_dump($ahmed);
