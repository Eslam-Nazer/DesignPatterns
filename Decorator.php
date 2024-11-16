<?php

use DesignPattern\Design\Patterns\Structural\Decorator\Decorators\SMSNotifierDecorator;
use DesignPattern\Design\Patterns\Structural\Decorator\Decorators\WhatsAppNotifierDecorator;
use DesignPattern\Design\Patterns\Structural\Decorator\EmailNotifier;

require "vendor/autoload.php";

$smsNotificationEnable = false;
$whatsAppNotificationEnable = true;

$notifier = new EmailNotifier("eslam@example.com");

if ($smsNotificationEnable) {
    $notifier = new SMSNotifierDecorator(
        $notifier,
        "010434543342"
    );
}
if ($whatsAppNotificationEnable) {
    $notifier = new WhatsAppNotifierDecorator(
        $notifier,
        "010434234500342"
    );
}

$notifier->notify();
