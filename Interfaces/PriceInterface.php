<?php
/**
 * Created by PhpStorm.
 * User: tom
 * Date: 02/05/18
 * Time: 07:09
 */

namespace monsieurgourmand\Bundle\InterfaceBundle\Interfaces;


interface PriceInterface extends MainInterface
{
    //Bases prix
    const BASE_PRODUCT = 0;
    const BASE_LOT = 1;
    const BASE_PIECE = 2;
    const BASE_KG = 3;
}