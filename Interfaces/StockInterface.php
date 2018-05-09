<?php
/**
 * Created by PhpStorm.
 * User: tom
 * Date: 02/05/18
 * Time: 07:09
 */

namespace ApiBundle\Interfaces;


use monsieurgourmand\Bundle\InterfaceBundle\Interfaces\MainInterface;

interface StockInterface extends MainInterface
{
    const TYPE_MGD = 0;
    const TYPE_CBN = 1;
}