<?php
/**
 * Created by PhpStorm.
 * User: remi
 * Date: 1/20/17
 * Time: 6:10 PM
 */

namespace monsieurgourmand\Bundle\InterfaceBundle\Route\Stock;

use monsieurgourmand\Bundle\InterfaceBundle\Model\Stock;
use monsieurgourmand\Bundle\InterfaceBundle\Service\MGD;

class Flux
{
    public function __construct(Stock $stock)
    {
        $this->master = $stock->getMaster();
        $this->entity = \monsieurgourmand\Bundle\InterfaceBundle\Model\Flux::class;
        $this->url = "/products/" . $stock->getProduct()->getIdProduct() . "/stocks/" . $stock->getIdStock() . "/fluxes";
    }

    public function getAll($format = MGD::FORMAT_OBJECT)
    {
        $url = $this->url;
        $params = array();
        return $this->master->getAll($url, $this->entity, $params, $format);
    }

    public function get($id, $format = MGD::FORMAT_OBJECT)
    {
        $url = $this->url;
        return $this->master->get($url, $id, $this->entity, $format);
    }

    public function post(\monsieurgourmand\Bundle\InterfaceBundle\Model\Flux $flux, $format = Mgd::FORMAT_OBJECT)
    {
        $url = $this->url;
        return $this->master->post($url, $flux, $this->entity, $format);
    }

    public function put(\monsieurgourmand\Bundle\InterfaceBundle\Model\Flux $flux, $format = MGD::FORMAT_OBJECT)
    {
        $url = $this->url;
        return $this->master->put($url, $flux->getIdFlux(), $flux, $this->entity, $format);
    }
}