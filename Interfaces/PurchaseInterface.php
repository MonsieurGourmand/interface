<?php

namespace monsieurgourmand\Bundle\InterfaceBundle\Interfaces;

interface PurchaseInterface
{
    const STATUS_PENDING = 0;
    const STATUS_SENDED = 1;
    const STATUS_VALIDATED = 2;
    const STATUS_DELIVERED = 3;
    const STATUS_CANCELED = 4;
    const STATUS_ARCHIVED = 5;
}
