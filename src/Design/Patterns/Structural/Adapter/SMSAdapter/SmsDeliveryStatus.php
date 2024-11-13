<?php

namespace DesignPattern\Design\Patterns\Structural\Adapter\SMSAdapter;


class SmsDeliveryStatus
{
    const PENDING = 1;
    const SENT = 2;
    const DELIVERED = 3;
    const FAILED = 4;
}
