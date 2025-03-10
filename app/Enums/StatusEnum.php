<?php

namespace App\Enums;

enum StatusEnum: string
{
    case PENDING = 'Pending';
    case SHIPPED = 'On-Transit';
    case DELIVERED = 'Delivered';
    case RETURNED = 'Returned';
    case ONHOLD = 'On hold';

    public static function getStatuses(): array
    {
        return [
            self::PENDING->value => 'Pending',
            self::SHIPPED->value => 'On-Transit',
            self::ONHOLD->value => 'On hold',
            self::DELIVERED->value => 'Delivered',
            self::RETURNED->value => 'Canceled',
        ];
    }
}
