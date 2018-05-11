<?php
/**
 * Created by PhpStorm.
 * User: remi
 * Date: 1/20/17
 * Time: 6:10 PM
 */

namespace monsieurgourmand\Bundle\InterfaceBundle\Route\Product;

use monsieurgourmand\Bundle\InterfaceBundle\Model\Product;
use monsieurgourmand\Bundle\InterfaceBundle\Service\MGD;

class Stock
{
    private $entity;
    private $url;
    private $master;

    public function __construct(Product $product)
    {
        $this->master = $product->getMaster();
        $this->entity = \monsieurgourmand\Bundle\InterfaceBundle\Model\Stock::class;
        $this->url = "/products/" . $product->getIdProduct() . "/stocks";
    }

    public function getAll($params = array(), $format = MGD::FORMAT_OBJECT)
    {
        $url = $this->url;
        return $this->master->getAll($url, $this->entity, $params, $format);
    }

    public function get($id, $format = MGD::FORMAT_OBJECT)
    {
        $url = $this->url;
        return $this->master->get($url, $id, $this->entity, $format);
    }

    public function post(\monsieurgourmand\Bundle\InterfaceBundle\Model\Stock $stock, $format = MGD::FORMAT_OBJECT)
    {
        $url = $this->url;
        return $this->master->post($url, $stock, $this->entity, $format);
    }

    public function put(\monsieurgourmand\Bundle\InterfaceBundle\Model\Stock $stock, $format = MGD::FORMAT_OBJECT)
    {
        $url = $this->url;
        return $this->master->put($url, $stock->getIdstock(), $stock, $this->entity, $format);
    }
}