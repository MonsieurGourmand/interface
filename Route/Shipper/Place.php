<?php
/**
 * Created by PhpStorm.
 * User: remi
 * Date: 1/20/17
 * Time: 6:10 PM
 */

namespace monsieurgourmand\Bundle\InterfaceBundle\Route\Shipper;

use monsieurgourmand\Bundle\InterfaceBundle\Model\Shipper;
use monsieurgourmand\Bundle\InterfaceBundle\Service\MGD;

class Place
{
    private $entity;
    private $url;
    private $master;

    public function __construct(Shipper $shipper)
    {
        $this->master = $shipper->getMaster();
        $this->entity = \monsieurgourmand\Bundle\InterfaceBundle\Model\Place::class;
        $this->url = "/shippers/" . $shipper->getIdShipper() . "/places";
    }

    public function getAll($params = [], $format = MGD::FORMAT_OBJECT)
    {
        return $this->master->getAll($this->url, $this->entity, $params, $format);
    }

    public function get($id, $format = MGD::FORMAT_OBJECT)
    {
        return $this->master->get($this->url, $id, $this->entity, $format);
    }

    public function post(\monsieurgourmand\Bundle\InterfaceBundle\Model\Place $place, $format = MGD::FORMAT_OBJECT)
    {
        return $this->master->post($this->url, $place, $this->entity, $format);
    }

    public function put(\monsieurgourmand\Bundle\InterfaceBundle\Model\Place $place, $format = MGD::FORMAT_OBJECT)
    {
        return $this->master->put($this->url, $place->getId(), $place, $this->entity, $format);
    }
}
