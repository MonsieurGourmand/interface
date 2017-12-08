<?php
/**
 * Created by PhpStorm.
 * User: remi
 * Date: 1/20/17
 * Time: 6:10 PM
 */

namespace monsieurgourmand\Bundle\InterfaceBundle\Route;


use monsieurgourmand\Bundle\InterfaceBundle\Service\MGD;

class Supplier
{
    private $master;
    private $entity;
    private $url;

    public function __construct(MGD $mgd)
    {
        $this->master = $mgd;
        $this->entity = \monsieurgourmand\Bundle\InterfaceBundle\Model\Supplier::class;
        $this->url = '/suppliers';
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

    public function post(\monsieurgourmand\Bundle\InterfaceBundle\Model\Supplier $supplier, $format = MGD::FORMAT_OBJECT)
    {
        return $this->master->post($this->url, $supplier, $this->entity, $format);
    }

    public function put(\monsieurgourmand\Bundle\InterfaceBundle\Model\Supplier $supplier, $format = MGD::FORMAT_OBJECT)
    {
        return $this->master->put($this->url, $supplier->getIdSupplier(), $supplier, $this->entity, $format);
    }
}