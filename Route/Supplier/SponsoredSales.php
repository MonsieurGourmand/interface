<?php

namespace monsieurgourmand\Bundle\InterfaceBundle\Route\Supplier;

use monsieurgourmand\Bundle\InterfaceBundle\Model\Supplier;
use monsieurgourmand\Bundle\InterfaceBundle\Service\MGD;

class SponsoredSales
{
    /** @var string */
    private $entity;
    /** @var string */
    private $url;
    /** @var MGD */
    private $master;

    /**
     * SponsoredSales constructor.
     * @param Supplier $supplier
     */
    public function __construct(Supplier $supplier)
    {
        $this->master = $supplier->getMaster();
        $this->entity = null;
        $this->url = "/suppliers/" . $supplier->getIdSupplier() . "/sponsoredsales";
    }

    /**
     * @param string $format
     * @param array $params
     * @return float
     */
    public function getAll($params = [], $format = MGD::FORMAT_JSON)
    {
        return $this->master->getAll($this->url, $this->entity, $params, $format);
    }
}
