<?php
/**
 * Created by PhpStorm.
 * User: tom
 * Date: 02/05/18
 * Time: 07:09
 */

namespace monsieurgourmand\Bundle\InterfaceBundle\Interfaces;


interface FormatInterface extends MainInterface
{
    //Status
    const STATUS_PENDING = 0;
    const STATUS_VALIDATED = 1;
    const STATUS_REFUSED = 2;

    //Type
    const TYPE_COCKTAIL = 0;
    const TYPE_BUFFET = 1;
    const TYPE_PR = 2;

    //FormatType
    const FORMATYPE_PONCTUEL = 0;
    const FORMATYPE_MULTI = 1;
}