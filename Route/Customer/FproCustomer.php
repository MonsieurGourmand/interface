<?php

namespace monsieurgourmand\Bundle\InterfaceBundle\Route\Customer;

use monsieurgourmand\Bundle\InterfaceBundle\Model\Customer;
use monsieurgourmand\Bundle\InterfaceBundle\Service\MGD;

class FproCustomer
{
    private $entity;
    private $url;
    private $master;

    public function __construct(Customer $customer)
    {
        $this->master = $customer->getMaster();
        $this->entity = \monsieurgourmand\Bundle\InterfaceBundle\Model\FproCustomer::class;
        $this->url = "/customers/" . $customer->getIdCustomer() . "/fprocustomers";
    }

    public function getAll($params = [], $format = MGD::FORMAT_OBJECT)
    {
        return $this->master->getAll($this->url, $this->entity, $params, $format);
    }

    public function put(\monsieurgourmand\Bundle\InterfaceBundle\Model\FproCustomer $fproCustomer, string $format = MGD::FORMAT_OBJECT)
    {
        return $this->master->put($this->url, $fproCustomer->getId(), $fproCustomer, $this->entity, $format);
    }

    public function remove(int $idFproCustomer)
    {
        return $this->master->remove($this->url, $idFproCustomer);
    }
}
