<?php

use DesignPattern\Design\Patterns\Creational\Builder\Builders\ComputerCSBuilder;
use DesignPattern\Design\Patterns\Creational\Builder\Builders\ComputerXLBuilder;
use DesignPattern\Design\Patterns\Creational\Builder\Director;

require 'vendor/autoload.php';

$director = new Director(new ComputerCSBuilder());
$computer = $director->makeComputer();

var_dump($computer);
echo "###############################################\n";
$director->switchBuilder(new ComputerXLBuilder);
$computer = $director->makeComputer();
var_dump($computer);
