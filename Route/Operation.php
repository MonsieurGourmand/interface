<?php
/**
 * Created by PhpStorm.
 * User: remi
 * Date: 1/20/17
 * Time: 6:10 PM
 */

namespace monsieurgourmand\Bundle\InterfaceBundle\Route;


use monsieurgourmand\Bundle\InterfaceBundle\Service\MGD;

class Operation
{
    private $master;
    private $entity;
    private $url;

    public function __construct(MGD $master)
    {
        $this->master = $master;
        $this->entity = \monsieurgourmand\Bundle\InterfaceBundle\Model\Operation::class;
        $this->url = '/operations';
    }

    public function getAll($format = MGD::FORMAT_OBJECT, $params = array())
    {
        return $this->master->getAll($this->url, $this->entity, $params, $format);
    }

    public function get($id, $params = array(), $format = MGD::FORMAT_OBJECT)
    {
        return $this->master->get($this->url, $id, $this->entity, $format, $params);
    }

    public function post(\monsieurgourmand\Bundle\InterfaceBundle\Model\Operation $operation, $format = MGD::FORMAT_OBJECT)
    {
        return $this->master->post($this->url, $operation, $this->entity, $format);
    }

    public function put(\monsieurgourmand\Bundle\InterfaceBundle\Model\Operation $operation, $format = MGD::FORMAT_OBJECT)
    {
        return $this->master->put($this->url, $operation->getIdOperation(), $operation, $this->entity, $format);
    }
}