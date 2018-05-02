<?php
/**
 * Created by PhpStorm.
 * User: tom
 * Date: 02/05/18
 * Time: 07:09
 */

namespace ApiBundle\Constants;


abstract class PriceConstants extends MainConstants
{
    //Bases prix
    const BASE_PRODUCT = 0;
    const BASE_LOT = 1;
    const BASE_PIECE = 2;
    const BASE_KG = 3;
}