<?php
/**
 * Created by PhpStorm.
 * User: tom
 * Date: 02/05/18
 * Time: 07:09
 */

namespace ApiBundle\Constants;


class ProductConstants extends MainConstants
{
    //Bases poids
    const BASE_PRODUCT = 0;
    const BASE_LOT = 1;
    const BASE_PIECE = 2;
    const BASE_KG = 3;

    //Bases Alertes
    const BASE_DAY = 0;
    const BASE_WEEK = 1;
    const BASE_MONTH = 2;
}