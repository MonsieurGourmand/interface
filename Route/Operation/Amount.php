<?php
/**
 * Created by PhpStorm.
 * User: remi
 * Date: 1/20/17
 * Time: 6:10 PM
 */

namespace monsieurgourmand\Bundle\InterfaceBundle\Route\Operation;


use monsieurgourmand\Bundle\InterfaceBundle\Model\Event;
use monsieurgourmand\Bundle\InterfaceBundle\Model\Operation;
use monsieurgourmand\Bundle\InterfaceBundle\Service\MGD;

class Amount
{
    private $entity;
    private $url;
    private $master;

    public function __construct(Operation $operation)
    {
        $this->master = $operation->getMaster();
        $this->entity = \monsieurgourmand\Bundle\InterfaceBundle\Model\Amount::class;
        $this->url = "/operations/" . $operation->getIdOperation() . "/amounts";
    }

    public function getAll($format = MGD::FORMAT_OBJECT, $params = array())
    {
        return $this->master->getAll($this->url, $this->entity, $params, $format);
    }

    public function get($id, $format = MGD::FORMAT_OBJECT)
    {
        return $this->master->get($this->url, $id, $this->entity, $format);
    }

    public function post(\monsieurgourmand\Bundle\InterfaceBundle\Model\Amount $amount, $format = MGD::FORMAT_OBJECT)
    {
        return $this->master->post($this->url, $amount, $this->entity, $format);
    }

    public function put(\monsieurgourmand\Bundle\InterfaceBundle\Model\Amount $amount, $format = MGD::FORMAT_OBJECT)
    {
        return $this->master->put($this->url, $amount->getIdAmount(), $amount, $this->entity, $format);
    }

    public function remove($idAmount)
    {
        return $this->master->remove($this->url, $idAmount);
    }

}