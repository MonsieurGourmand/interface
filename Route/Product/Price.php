<?php
/**
 * Created by PhpStorm.
 * User: remi
 * Date: 1/20/17
 * Time: 6:10 PM
 */

namespace monsieurgourmand\Bundle\InterfaceBundle\Route\Product;

use monsieurgourmand\Bundle\InterfaceBundle\Model\Product;
use monsieurgourmand\Bundle\InterfaceBundle\Model\Supplier;
use monsieurgourmand\Bundle\InterfaceBundle\Service\MGD;

class Price
{
    private $entity;
    private $url;
    private $master;

    public function __construct(Product $product)
    {
        $this->master = $product->getMaster();
        $this->entity = \monsieurgourmand\Bundle\InterfaceBundle\Model\Price::class;
        $this->url = "/products/" . $product->getIdProduct() . "/prices";
    }

    public function getAll(Supplier $supplier = null, $format = MGD::FORMAT_OBJECT)
    {
        if ($supplier)
            $url = "/suppliers/" . $supplier->getIdSupplier() . $this->url;
        else
            $url = $this->url;
        $params = array();
        return $this->master->getAll($url, $this->entity, $params, $format);
    }

    public function get($id, Supplier $supplier = null, $format = MGD::FORMAT_OBJECT)
    {
        if ($supplier)
            $url = "/suppliers/" . $supplier->getIdSupplier() . $this->url;
        else
            $url = $this->url;
        return $this->master->get($url, $id, $this->entity, $format);
    }

    public function post(\monsieurgourmand\Bundle\InterfaceBundle\Model\Price $price, Supplier $supplier = null, $format = MGD::FORMAT_OBJECT)
    {
        if ($supplier)
            $url = "/suppliers/" . $supplier->getIdSupplier() . $this->url;
        else
            $url = $this->url;
        return $this->master->post($url, $price, $this->entity, $format);
    }

    public function put(\monsieurgourmand\Bundle\InterfaceBundle\Model\Price $price, Supplier $supplier = null, $format = MGD::FORMAT_OBJECT)
    {
        if ($supplier)
            $url = "/suppliers/" . $supplier->getIdSupplier() . $this->url;
        else
            $url = $this->url;
        return $this->master->put($url, $price->getIdPrice(), $price, $this->entity, $format);
    }

    public function patch(\monsieurgourmand\Bundle\InterfaceBundle\Model\Price $price, Supplier $supplier = null, $format = MGD::FORMAT_OBJECT)
    {
        if ($supplier)
            $url = "/suppliers/" . $supplier->getIdSupplier() . $this->url;
        else
            $url = $this->url;
        return $this->master->patch($url, $price->getIdPrice(), $price, $this->entity, $format);
    }

    public function remove(\monsieurgourmand\Bundle\InterfaceBundle\Model\Price $price, Supplier $supplier = null)
    {
        if ($supplier)
            $url = "/suppliers/" . $supplier->getIdSupplier() . $this->url;
        else
            $url = $this->url;
        return $this->master->remove($url, $price->getIdPrice());
    }
}