<?php

namespace monsieurgourmand\Bundle\InterfaceBundle\Route\Customer;

use monsieurgourmand\Bundle\InterfaceBundle\Model\Customer;
use monsieurgourmand\Bundle\InterfaceBundle\Service\MGD;
use monsieurgourmand\Bundle\InterfaceBundle\Model\Billing as BillingModel;

class AddBilling
{
    private $entity;
    private $url;
    private $master;

    public function __construct(Customer $customer)
    {
        $this->master = $customer->getMaster();
        $this->entity = BillingModel::class;
        $this->url = "/customers/" . $customer->getIdCustomer() . "/addbillings";
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
