<?php
/**
 * Created by PhpStorm.
 * User: remi
 * Date: 1/20/17
 * Time: 6:10 PM
 */

namespace monsieurgourmand\Bundle\InterfaceBundle\Route\Format;

use monsieurgourmand\Bundle\InterfaceBundle\Model\Kit;
use monsieurgourmand\Bundle\InterfaceBundle\Service\MGD;

class Option
{
    private $entity;
    private $url;
    private $master;

    public function __construct(Kit $kit)
    {
        $this->master = $kit->getMaster();
        $this->entity = Kit::class;
        $this->url = "/formats/" . $kit->getIdKit() . "/options";
    }

    public function getAll($format = MGD::FORMAT_OBJECT, $params = array())
    {
        return $this->master->getAll($this->url, $this->entity, $params, $format);
    }
}
