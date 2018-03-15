<?php
/**
 * Created by PhpStorm.
 * User: remi
 * Date: 1/20/17
 * Time: 6:10 PM
 */

namespace monsieurgourmand\Bundle\InterfaceBundle\Route\Purchase;


use monsieurgourmand\Bundle\InterfaceBundle\Model\Purchase;
use monsieurgourmand\Bundle\InterfaceBundle\Service\MGD;

class PurchaseProduct
{
    private $entity;
    private $url;
    private $master;

    public function __construct(Purchase $purchase)
    {
        $this->master = $purchase->getMaster();
        $this->entity = \monsieurgourmand\Bundle\InterfaceBundle\Model\PurchaseProduct::class;
        $this->url = "/purchases/" . $purchase->getIdPurchase() . "/products";
    }

    public function getAll($format = MGD::FORMAT_OBJECT, $params = array())
    {
        return $this->master->getAll($this->url, $this->entity, $params, $format);
    }

    public function get($id, $format = MGD::FORMAT_OBJECT)
    {
        return $this->master->get($this->url, $id, $this->entity, $format);
    }

    public function post(\monsieurgourmand\Bundle\InterfaceBundle\Model\PurchaseProduct $purchaseProduct, $format = MGD::FORMAT_OBJECT)
    {
        return $this->master->post($this->url, $purchaseProduct, $this->entity, $format);
    }

    public function put(\monsieurgourmand\Bundle\InterfaceBundle\Model\PurchaseProduct $purchaseProduct, $format = MGD::FORMAT_OBJECT)
    {
        return $this->master->put($this->url, $purchaseProduct->getIdPurchaseProduct(), $purchaseProduct, $this->entity, $format);
    }

    public function remove(\monsieurgourmand\Bundle\InterfaceBundle\Model\PurchaseProduct $purchaseProduct)
    {
        return $this->master->remove($this->url, $purchaseProduct->getIdPurchaseProduct());
    }
}