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
    const SHIPPER_STATUS_READY = 0;
    const SHIPPER_STATUS_ROUTING = 1;
    const SHIPPER_STATUS_SHIPPING_READY = 6;
    const SHIPPER_STATUS_SHIPPING = 2;
    const SHIPPER_STATUS_DELIVERED = 3;
    const SHIPPER_STATUS_TROUBLE = 4;
    const SHIPPER_STATUS_CANCEL = 7;
    const SHIPPER_STATUS_RETURN = 8;
    const SHIPPER_STATUS_AVAILABLE = 9;

    const SUPPORT_STATUS_PENDING = 0;
    const SUPPORT_STATUS_VALIDATED = 1;
    const SUPPORT_STATUS_TROUBLE = 2;

    //Type
    const TYPE_SEC = 0;
    const TYPE_FRESH = 1;
    const TYPE_FREEZE = 2;

    const SIZE_SMALL_EXP = 0;
    const SIZE_MEDIUM_EXP = 1;
    const SIZE_BOX_SMALL_AUE = 2;
    const SIZE_BOX_MEDIUM_AUE = 3;
    const SIZE_SMALL_COMMON_CGE = 4;
    const SIZE_MEDIUM_COMMON_CGE = 5;
    const SIZE_SMALL_WHITE_RAJA = 6;
    const SIZE_MEDIUM_WHITE_RAJA = 7;
    const SIZE_BIG_WHITE_RAJA = 8;
    const SIZE_MEDIUM_WHITE_EXP = 9;
    const SIZE_BROWN_RAJA = 10;
}
