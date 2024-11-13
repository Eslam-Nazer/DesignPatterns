<?php

use DesignPattern\Design\Patterns\Structural\Adapter\SMSAdapter\Adapters\ABCSMSCLientAdapter;
use DesignPattern\Design\Patterns\Structural\Adapter\SMSAdapter\Messages\SmsMessage;
use DesignPattern\Design\Patterns\Structural\Adapter\SMSAdapter\MonkeySMSClient;

require "vendor/autoload.php";

$message1 = new SmsMessage("welcome to our club\n", '0123456793');
$message2 = new SmsMessage("please join our community\n", '0126793');
$message3 = new SmsMessage("Your account has been activated\n", '0123456793');
$message4 = new SmsMessage("Thanks for your feedback\n", '0126793');

// $client = new MonkeySMSClient([
$client = new ABCSMSCLientAdapter([
    $message1,
    $message2,
    $message3
]);
$client->addMessage($message4);

$client->filterNumbers();
$client->send();
var_dump($client->getDeliveryStatus());
