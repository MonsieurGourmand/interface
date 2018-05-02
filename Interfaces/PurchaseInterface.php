<?php
/**
 * Created by PhpStorm.
 * User: tom
 * Date: 02/05/18
 * Time: 07:09
 */

namespace monsieurgourmand\Bundle\InterfaceBundle\Interfaces;


interface PurchaseInterface extends MainInterface
{
    const STATUS_PENDING = 0;
    const STATUS_SENDED = 1;
    const STATUS_VALIDATED = 2;
    const STATUS_DELIVERED = 3;
    const STATUS_CANCELED = 4;
    const STATUS_ARCHIVED = 5;
}