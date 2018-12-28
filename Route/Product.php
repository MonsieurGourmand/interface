<?php
/**
 * Created by PhpStorm.
 * User: remi
 * Date: 1/20/17
 * Time: 6:04 PM
 */

namespace monsieurgourmand\Bundle\InterfaceBundle\Route;


use monsieurgourmand\Bundle\InterfaceBundle\Service\MGD;

class Product
{
    private $master;
    private $entity;
    private $url;

    public function __construct(MGD $master)
    {
        $this->master = $master;
        $this->entity = \monsieurgourmand\Bundle\InterfaceBundle\Model\Product::class;
        $this->url = '/products';
    }

    public function getAll($params = array(), $format = MGD::FORMAT_OBJECT)
    {
        return $this->master->getAll($this->url, $this->entity, $params, $format);
    }

    public function get($id, $params = array(), $format = MGD::FORMAT_OBJECT)
    {
        return $this->master->get($this->url, $id, $this->entity, $format, $params);
    }

    public function post(\monsieurgourmand\Bundle\InterfaceBundle\Model\Product $product, $format = MGD::FORMAT_OBJECT)
    {
        return $this->master->post($this->url, $product, $this->entity, $format);
    }

    public function put(\monsieurgourmand\Bundle\InterfaceBundle\Model\Product $product, $format = MGD::FORMAT_OBJECT)
    {
        return $this->master->put($this->url, $product->getIdProduct(), $product, $this->entity, $format);
    }

    public function remove(\monsieurgourmand\Bundle\InterfaceBundle\Model\Product $product)
    {
        return $this->master->remove($this->url, $product->getIdProduct());
    }
}