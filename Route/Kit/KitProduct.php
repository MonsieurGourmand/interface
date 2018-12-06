<?php
/**
 * Created by PhpStorm.
 * User: remi
 * Date: 1/20/17
 * Time: 6:10 PM
 */

namespace monsieurgourmand\Bundle\InterfaceBundle\Route\Kit;


use monsieurgourmand\Bundle\InterfaceBundle\Model\Kit;
use monsieurgourmand\Bundle\InterfaceBundle\Service\MGD;

class KitProduct
{
    private $entity;
    private $url;
    private $master;

    public function __construct(Kit $kit)
    {
        $this->master = $kit->getMaster();
        $this->entity = \monsieurgourmand\Bundle\InterfaceBundle\Model\EventProduct::class;
        $this->url = "/kits/" . $kit->getIdKit() . "/products";
    }

    public function getAll($format = MGD::FORMAT_OBJECT, $params = array())
    {
        return $this->master->getAll($this->url, $this->entity, $params, $format);
    }

    public function get($id, $format = MGD::FORMAT_OBJECT)
    {
        return $this->master->get($this->url, $id, $this->entity, $format);
    }

    public function post(\monsieurgourmand\Bundle\InterfaceBundle\Model\KitProduct $kitProduct, $format = MGD::FORMAT_OBJECT)
    {
        return $this->master->post($this->url, $kitProduct, $this->entity, $format);
    }

    public function put(\monsieurgourmand\Bundle\InterfaceBundle\Model\KitProduct $kitProduct, $format = MGD::FORMAT_OBJECT)
    {
        return $this->master->put($this->url, $kitProduct->getIdKitProduct(), $kitProduct, $this->entity, $format);
    }

    public function remove(\monsieurgourmand\Bundle\InterfaceBundle\Model\KitProduct $kitProduct)
    {
        return $this->master->remove($this->url, $kitProduct->getIdKitProduct());
    }

}