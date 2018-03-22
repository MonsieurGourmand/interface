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

class Product
{
    private $entity;
    private $url;
    private $master;

    public function __construct(Supplier $supplier)
    {
        $this->master = $supplier->getMaster();
        $this->entity = \monsieurgourmand\Bundle\InterfaceBundle\Model\Product::class;
        $this->url = "/suppliers/" . $supplier->getIdSupplier() . "/products";
    }

    public function getAll($params = array(),$format = MGD::FORMAT_OBJECT)
    {
        return $this->master->getAll($this->url, $this->entity, $params, $format);
    }

    public function get($id, $format = MGD::FORMAT_OBJECT)
    {
        return $this->master->get($this->url, $id, $this->entity, $format);
    }

    public function post(\monsieurgourmand\Bundle\InterfaceBundle\Model\Product $product, $format = MGD::FORMAT_OBJECT)
    {
        return $this->master->post($this->url, $product, $this->entity, $format);
    }

    public function put(\monsieurgourmand\Bundle\InterfaceBundle\Model\Product $product, $format = MGD::FORMAT_OBJECT)
    {
        return $this->master->put($this->url, $product->getIdProduct(), $product, $this->entity, $format);
    }
}