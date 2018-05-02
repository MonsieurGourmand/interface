<?php
/**
 * Created by PhpStorm.
 * User: remi
 * Date: 4/26/17
 * Time: 7:22 PM
 */

namespace monsieurgourmand\Bundle\InterfaceBundle\Model;



use monsieurgourmand\Bundle\InterfaceBundle\Service\MGD;

class Master
{
    /**
     * @var MGD
     */
    protected $master;

    /**
     * @return Mgd
     */
    public function getMaster()
    {
        return $this->master;
    }

    /**
     * @param Mgd $master
     * @return Master
     */
    public function setMaster($master)
    {
        $this->master = $master;
        return $this;
    }
}