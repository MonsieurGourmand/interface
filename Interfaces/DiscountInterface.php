<?php
/**
 * Created by PhpStorm.
 * User: tom
 * Date: 02/05/18
 * Time: 07:09
 */

namespace monsieurgourmand\Bundle\InterfaceBundle\Interfaces;


interface DiscountInterface extends MainInterface
{
    const TYPE_PERCENT = 1;
    const TYPE_EUROS = 0;
}