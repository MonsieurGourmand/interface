<?php

namespace monsieurgourmand\Bundle\InterfaceBundle\Route\Quote;

use monsieurgourmand\Bundle\InterfaceBundle\Model\Quote;
use monsieurgourmand\Bundle\InterfaceBundle\Service\MGD;

class PurchaseOrder
{
    private $entity;
    private $url;
    private $master;

    public function __construct(Quote $quote)
    {
        $this->master = $quote->getMaster();
        $this->url = "/events/" . $quote->getEvent()->getIdEvent() . "/quotes/" . $quote->getId() . '/purchaseorders';
        $this->entity = Quote::class;
    }

    public function post(Quote $quote, $format = MGD::FORMAT_OBJECT)
    {
        return $this->master->post($this->url, $quote, $this->entity, $format);
    }

    public function delete(int $purchaseOrderId, $format = MGD::FORMAT_OBJECT)
    {
        return $this->master->remove($this->url, $purchaseOrderId);
    }
}
