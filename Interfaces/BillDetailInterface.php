<?php
/**
 * Created by PhpStorm.
 * User: tom
 * Date: 02/05/18
 * Time: 07:09
 */

namespace monsieurgourmand\Bundle\InterfaceBundle\Interfaces;


interface BillDetailInterface extends MainInterface
{
    const CATEGORY_SUPPLIES = 18189;
    const CATEGORY_COMMISSION = 18257;
    const CATEGORY_SERVICE = 18169;
    const CATEGORY_SOLUTIONS = 18011;
    const CATEGORY_TRANSPORT = 18164;
}