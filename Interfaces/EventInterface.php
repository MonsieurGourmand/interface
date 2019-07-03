<?php
/**
 * Created by PhpStorm.
 * User: tom
 * Date: 02/05/18
 * Time: 07:09
 */

namespace monsieurgourmand\Bundle\InterfaceBundle\Interfaces;


interface EventInterface extends MainInterface
{
    const STATUS_PENDING = 0;
    const STATUS_SEND = 1;
    const STATUS_VALIDATE = 2;
    const STATUS_TROUBLE = 3;
    const STATUS_CANCEL = 4;
    const STATUS_DONE = 5;
    const STATUS_DRAFT = 6;
    const STATUS_DRAFTCANCEL = 8;

    const MARKETING_STATUS_NOT = 0;
    const MARKETING_STATUS_PENDING = 1;
    const MARKETING_STATUS_DONE = 2;

    const TYPE_PUNCTUAL = 0;
    const TYPE_MULTI = 1;

    const SHIPPING_CODE_C12 = 0;
    const SHIPPING_CODE_C13 = 1;
}
