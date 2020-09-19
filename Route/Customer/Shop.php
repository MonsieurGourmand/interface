<?php

namespace monsieurgourmand\Bundle\InterfaceBundle\Route\Customer;

use monsieurgourmand\Bundle\InterfaceBundle\Model\Customer;
use monsieurgourmand\Bundle\InterfaceBundle\Service\MGD;
use monsieurgourmand\Bundle\InterfaceBundle\Model\Shop as ShopModel;

class Shop
{
    private $entity;
    private $url;
    private $master;

    public function __construct(Customer $customer)
    {
        $this->master = $customer->getMaster();
        $this->entity = ShopModel::class;
        $this->url = "/customers/" . $customer->getIdCustomer() . "/shops";
    }

    public function getAll($params = [], string $format = MGD::FORMAT_OBJECT)
    {
        return $this->master->getAll($this->url, $this->entity, $params, $format);
    }

    public function get($id, $format = MGD::FORMAT_OBJECT)
    {
        return $this->master->get($this->url, $id, $this->entity, $format);
    }

    public function post(ShopModel $shop, string $format = MGD::FORMAT_OBJECT)
    {
        return $this->master->post($this->url, $shop, $this->entity, $format);
    }

    public function put(ShopModel $shop, string $format = MGD::FORMAT_OBJECT)
    {
        return $this->master->put($this->url, $shop->getId(), $shop, $this->entity, $format);
    }

    public function remove(int $shopId)
    {
        return $this->master->remove($this->url, $shopId);
    }
}
