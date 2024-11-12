<?php

use DesignPattern\Design\Patterns\Creational\AbstractFactory\FormAbstractFactory\GUIClient;
use DesignPattern\Design\Patterns\Creational\AbstractFactory\FormAbstractFactory\WebForm\WebFormFactory;
use DesignPattern\Design\Patterns\Creational\AbstractFactory\FormAbstractFactory\MobileForm\MobileFormFactory;

require "vendor/autoload.php";

$client = new GUIClient(new WebFormFactory);
echo $client->createForm();

$client->setFormFactory(new MobileFormFactory);
echo $client->createForm();
