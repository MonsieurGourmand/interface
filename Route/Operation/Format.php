<?php
/**
 * Created by PhpStorm.
 * User: remi
 * Date: 1/20/17
 * Time: 6:10 PM
 */

namespace monsieurgourmand\Bundle\InterfaceBundle\Route\Operation;


use monsieurgourmand\Bundle\InterfaceBundle\Model\Operation;
use monsieurgourmand\Bundle\InterfaceBundle\Service\MGD;

class Format
{
    private $entity;
    private $url;
    private $master;

    public function __construct(Operation $operation)
    {
        $this->master = $operation->getMaster();
        $this->entity = \monsieurgourmand\Bundle\InterfaceBundle\Model\Kit::class;
        $this->url = "/operations/" . $operation->getIdOperation() . "/formats";
    }

    public function getAll($format = MGD::FORMAT_OBJECT, $params = array())
    {
        return $this->master->getAll($this->url, $this->entity, $params, $format);
    }

}