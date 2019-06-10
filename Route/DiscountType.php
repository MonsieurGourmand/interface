<?php

namespace monsieurgourmand\Bundle\InterfaceBundle\Route;

use monsieurgourmand\Bundle\InterfaceBundle\Model\EventDiscountType;
use monsieurgourmand\Bundle\InterfaceBundle\Service\MGD;

class DiscountType
{

    private $master;
    private $entity;
    private $url;

    public function __construct(MGD $master)
    {
        $this->master = $master;
        $this->entity = EventDiscountType::class;
        $this->url = '/discounttypes';
    }

    public function getAll($params = array(), $format = MGD::FORMAT_OBJECT)
    {
        return $this->master->getAll($this->url, $this->entity, $params, $format);
    }
}
