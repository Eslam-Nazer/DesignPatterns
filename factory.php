<?php

use DesignPattern\Design\Patterns\Creational\FactoryMethod\DialogExample\Dialog\SystemDialog;
use DesignPattern\Design\Patterns\Creational\FactoryMethod\DialogExample\Dialog\WebDialog;
use DesignPattern\Design\Patterns\Creational\FactoryMethod\DialogExample\Dialog\MobileDialog;

require 'vendor/autoload.php';


$systemDialog = new SystemDialog();
var_dump($systemDialog->renderDialog());

$webDialog = new WebDialog();
var_dump($webDialog->renderDialog());

$mobileDialog = new MobileDialog();
var_dump($mobileDialog->renderDialog());
