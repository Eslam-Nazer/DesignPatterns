<?php

use DesignPattern\Design\Patterns\Creational\Singleton\AppSettings;

require "vendor/autoload.php";

$settings = AppSettings::getInstance();
var_dump($settings::getConfig("Database"));

$settings2 = AppSettings::getInstance();
var_dump($settings2::getConfig("Cache")["protNumber"]);
