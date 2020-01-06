<?php

namespace monsieurgourmand\Bundle\InterfaceBundle\Route\Operation;

use monsieurgourmand\Bundle\InterfaceBundle\Model\Operation;
use monsieurgourmand\Bundle\InterfaceBundle\Model\OperationMenu;
use monsieurgourmand\Bundle\InterfaceBundle\Service\MGD;

class Menu
{
    private $entity;
    private $url;
    private $master;

    public function __construct(Operation $operation)
    {
        $this->master = $operation->getMaster();
        $this->entity = OperationMenu::class;
        $this->url = "/operations/" . $operation->getIdOperation() . "/menus";
    }

    public function getAll($params = [], $format = MGD::FORMAT_OBJECT)
    {
        return $this->master->getAll($this->url, $this->entity, $params, $format);
    }

    public function get($id, $format = MGD::FORMAT_OBJECT)
    {
        return $this->master->get($this->url, $id, $this->entity, $format);
    }

    public function post(OperationMenu $operationMenu, $format = MGD::FORMAT_OBJECT)
    {
        return $this->master->post($this->url, $operationMenu, $this->entity, $format);
    }

    public function put(OperationMenu $operationMenu, $format = MGD::FORMAT_OBJECT)
    {
        return $this->master->put($this->url, $operationMenu->getId(), $operationMenu, $this->entity, $format);
    }
}
