<?php

namespace monsieurgourmand\Bundle\InterfaceBundle\Route;

use monsieurgourmand\Bundle\InterfaceBundle\Service\MGD;
use monsieurgourmand\Bundle\InterfaceBundle\Model\Product as ProductEntity;

class AllProduct
{
    /** @var MGD */
    private $master;

    /** @var string */
    private $entity;

    /** @var string */
    private $url;

    /**
     * AllProduct constructor.
     * @param MGD $master
     */
    public function __construct(MGD $master)
    {
        $this->master = $master;
        $this->entity = ProductEntity::class;
        $this->url = '/allproducts';
    }

    /**
     * @param int $id
     * @param array $params
     * @param string $format
     * @return array|false|string|void
     */
    public function get(int $id, $params = [], $format = MGD::FORMAT_OBJECT)
    {
        return $this->master->get($this->url, $id, $this->entity, $format, $params);
    }
}
