<?php

namespace monsieurgourmand\Bundle\InterfaceBundle\Route\Shop;

use monsieurgourmand\Bundle\InterfaceBundle\Model\Shop;
use monsieurgourmand\Bundle\InterfaceBundle\Service\MGD;
use monsieurgourmand\Bundle\InterfaceBundle\Model\Billing as BillingModel;

class Billing
{
    private $entity;
    private $url;
    private $master;

    public function __construct(Shop $shop)
    {
        $this->master = $shop->getMaster();
        $this->entity = BillingModel::class;
        $this->url = "/shops/" . $shop->getId() . "/addbillings";
    }

    public function put(BillingModel $billing, string $format = MGD::FORMAT_OBJECT)
    {
        return $this->master->put($this->url, $billing->getId(), $billing, $this->entity, $format);
    }
}
