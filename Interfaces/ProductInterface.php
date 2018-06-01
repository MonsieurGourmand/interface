<?php
/**
 * Created by PhpStorm.
 * User: tom
 * Date: 02/05/18
 * Time: 07:09
 */

namespace monsieurgourmand\Bundle\InterfaceBundle\Interfaces;


interface ProductInterface extends MainInterface
{
    //Bases poids
    const BASEWEIGHT_PRODUCT = 0;
    const BASEWEIGHT_BATCH = 1;
    const BASEWEIGHT_PIECE = 2;
    const BASEWEIGHT_KG = 3;

    //Bases Alertes
    const BASETIME_DAY = 0;
    const BASETIME_WEEK = 1;
    const BASETIME_MONTH = 2;

    const TYPE_FREEZE = 0;
    const TYPE_FRESH = 1;
    const TYPE_SEC = 2;

    const THAWING_SEC = 2;
    const THAWING_FRESH = 1;

    const IMPLEMENTATION_HOT = 2;
    const IMPLEMENTATION_FRESH = 1;
}