<?php

namespace monsieurgourmand\Bundle\InterfaceBundle\Route\Supplier;

use monsieurgourmand\Bundle\InterfaceBundle\Model\Supplier;
use monsieurgourmand\Bundle\InterfaceBundle\Model\User as UserModel;
use monsieurgourmand\Bundle\InterfaceBundle\Service\MGD;

class SponsoredUsers
{
    /** @var string */
    private $entity;
    /** @var string */
    private $url;
    /** @var MGD */
    private $master;

    /**
     * SponsoredUsers constructor.
     * @param Supplier $supplier
     */
    public function __construct(Supplier $supplier)
    {
        $this->master = $supplier->getMaster();
        $this->entity = UserModel::class;
        $this->url = "/suppliers/" . $supplier->getIdSupplier() . "/sponsoredusers";
    }

    /**
     * @param string $format
     * @param array $params
     * @return UserModel[]
     */
    public function getAll($params = [], $format = MGD::FORMAT_OBJECT)
    {
        return $this->master->getAll($this->url, $this->entity, $params, $format);
    }
}
