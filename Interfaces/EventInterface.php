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
}