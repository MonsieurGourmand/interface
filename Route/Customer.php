<?php
/**
 * Created by PhpStorm.
 * User: remi
 * Date: 1/20/17
 * Time: 6:10 PM
 */

namespace monsieurgourmand\Bundle\InterfaceBundle\Route;



use monsieurgourmand\Bundle\InterfaceBundle\Service\MGD;

class Customer
{
    private $master;
    private $entity;
    private $url;

    public function __construct(MGD $master)
    {
        $this->master = $master;
        $this->entity = \monsieurgourmand\Bundle\InterfaceBundle\Model\Customer::class;
        $this->url = '/customers';
    }

    public function getAll($params = array(),$format = MGD::FORMAT_OBJECT)
    {
        return $this->master->getAll($this->url, $this->entity, $params, $format);
    }

    public function get($id, $format = MGD::FORMAT_OBJECT)
    {
        return $this->master->get($this->url, $id, $this->entity, $format);
    }

    public function post(\monsieurgourmand\Bundle\InterfaceBundle\Model\Customer $customer, $format = MGD::FORMAT_OBJECT)
    {
        return $this->master->post($this->url, $customer, $this->entity, $format);
    }

    public function put(\monsieurgourmand\Bundle\InterfaceBundle\Model\Customer $customer, $format = MGD::FORMAT_OBJECT)
    {
        return $this->master->put($this->url, $customer->getIdCustomer(), $customer, $this->entity, $format);
    }
}