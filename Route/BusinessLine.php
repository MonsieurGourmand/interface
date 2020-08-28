<?php

namespace monsieurgourmand\Bundle\InterfaceBundle\Route;

use monsieurgourmand\Bundle\InterfaceBundle\Service\MGD;

class BusinessLine
{
    private $master;
    private $entity;
    private $url;

    public function __construct(MGD $master)
    {
        $this->master = $master;
        $this->entity = \monsieurgourmand\Bundle\InterfaceBundle\Model\BusinessLine::class;
        $this->url = '/businesslines';
    }

    public function getAll($params = [], $format = MGD::FORMAT_OBJECT)
    {
        return $this->master->getAll($this->url, $this->entity, $params, $format);
    }
}
