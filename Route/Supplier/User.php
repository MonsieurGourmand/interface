<?php
/**
 * Created by PhpStorm.
 * User: remi
 * Date: 1/20/17
 * Time: 6:10 PM
 */

namespace monsieurgourmand\Bundle\InterfaceBundle\Route\Supplier;

use monsieurgourmand\Bundle\InterfaceBundle\Model\Supplier;
use monsieurgourmand\Bundle\InterfaceBundle\Service\MGD;

class User
{
    private $master;
    private $entity;
    private $url;

    public function __construct(Supplier $supplier)
    {
        $this->master = $supplier->getMaster();
        $this->entity = \monsieurgourmand\Bundle\InterfaceBundle\Model\User::class;
        $this->url = "/suppliers/" . $supplier->getIdSupplier() . "/users";
    }

    public function getAll($format = MGD::FORMAT_OBJECT)
    {
        $params = array();
        return $this->master->getAll($this->url, $this->entity, $params, $format);
    }

    public function get($id, $format = MGD::FORMAT_OBJECT)
    {
        return $this->master->get($this->url, $id, $this->entity, $format);
    }

    public function post(\monsieurgourmand\Bundle\InterfaceBundle\Model\User $user, $format = MGD::FORMAT_OBJECT)
    {
        return $this->master->post($this->url, $user, $this->entity, $format);
    }

    public function put(\monsieurgourmand\Bundle\InterfaceBundle\Model\User $user, $format = MGD::FORMAT_OBJECT)
    {
        return $this->master->put($this->url, $user->getId(), $user, $this->entity, $format);
    }
}