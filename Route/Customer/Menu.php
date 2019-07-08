<?php
/**
 * Created by PhpStorm.
 * User: remi
 * Date: 1/20/17
 * Time: 6:10 PM
 */

namespace monsieurgourmand\Bundle\InterfaceBundle\Route\Customer;

use monsieurgourmand\Bundle\InterfaceBundle\Model\Customer;
use monsieurgourmand\Bundle\InterfaceBundle\Model\CustomerMenu;
use monsieurgourmand\Bundle\InterfaceBundle\Service\MGD;

class Menu
{
    private $entity;
    private $url;
    private $master;

    public function __construct(Customer $customer)
    {
        $this->master = $customer->getMaster();
        $this->entity = CustomerMenu::class;
        $this->url = "/customers/" . $customer->getIdCustomer() . "/menus";
    }

    public function getAll($params = [], $format = MGD::FORMAT_OBJECT)
    {
        return $this->master->getAll($this->url, $this->entity, $params, $format);
    }

    public function get($id, $format = MGD::FORMAT_OBJECT)
    {
        return $this->master->get($this->url, $id, $this->entity, $format);
    }

    public function post(CustomerMenu $customerMenu, $format = MGD::FORMAT_OBJECT)
    {
        return $this->master->post($this->url, $customerMenu, $this->entity, $format);
    }

    public function put(CustomerMenu $customerMenu, $format = MGD::FORMAT_OBJECT)
    {
        return $this->master->put($this->url, $customerMenu->getId(), $customerMenu, $this->entity, $format);
    }
}
