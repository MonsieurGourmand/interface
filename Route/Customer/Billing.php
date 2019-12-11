<?php

namespace monsieurgourmand\Bundle\InterfaceBundle\Route\Customer;

use monsieurgourmand\Bundle\InterfaceBundle\Model\Customer;
use monsieurgourmand\Bundle\InterfaceBundle\Service\MGD;
use monsieurgourmand\Bundle\InterfaceBundle\Model\Billing as BillingModel;

class Billing
{
    private $entity;
    private $url;
    private $master;

    public function __construct(Customer $customer)
    {
        $this->master = $customer->getMaster();
        $this->entity = BillingModel::class;
        $this->url = "/customers/" . $customer->getIdCustomer() . "/billings";
    }

    public function getAll(array $params = [], string $format = MGD::FORMAT_OBJECT)
    {
        return $this->master->getAll($this->url, $this->entity, $params, $format);
    }

    public function get(int $id, string $format = MGD::FORMAT_OBJECT)
    {
        return $this->master->get($this->url, $id, $this->entity, $format);
    }

    public function post(BillingModel $billing, string $format = MGD::FORMAT_OBJECT)
    {
        return $this->master->post($this->url, $billing, $this->entity, $format);
    }

    public function put(BillingModel $billing, string $format = MGD::FORMAT_OBJECT)
    {
        return $this->master->put($this->url, $billing->getId(), $billing, $this->entity, $format);
    }

    public function remove(int $billingId)
    {
        return $this->master->remove($this->url, $billingId);
    }
}
