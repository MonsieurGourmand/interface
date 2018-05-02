<?php
/**
 * Created by PhpStorm.
 * User: tom
 * Date: 02/05/18
 * Time: 07:09
 */

namespace monsieurgourmand\Bundle\InterfaceBundle\Interfaces;


interface PackageInterface extends MainInterface
{
    //Status
    const STATUS_PENDING = 0;
    const STATUS_READY = 1;
    const STATUS_SHIPPING = 2;
    const STATUS_DELIVERED = 3;
    const STATUS_TROUBLE = 4;

    //Type
    const TYPE_SEC = 0;
    const TYPE_FRESH = 1;
    const TYPE_FREEZE = 2;
}