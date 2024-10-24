<?php

use DesignPattern\OOP\PHP\Employee;

require 'vendor/autoload.php';

$emp = new Employee(
    name: "Eslam",
    age: 24,
    salary: 3600
);

var_dump($emp);
