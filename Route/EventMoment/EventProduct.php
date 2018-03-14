<?php
/**
 * Created by PhpStorm.
 * User: remi
 * Date: 1/20/17
 * Time: 6:10 PM
 */

namespace monsieurgourmand\Bundle\InterfaceBundle\Route\EventMoment;


use monsieurgourmand\Bundle\InterfaceBundle\Model\EventMoment;
use monsieurgourmand\Bundle\InterfaceBundle\Service\MGD;

class EventProduct
{
    private $entity;
    private $url;
    private $master;

    public function __construct(EventMoment $eventMoment)
    {
        $this->master = $eventMoment->getMaster();
        $this->entity = \monsieurgourmand\Bundle\InterfaceBundle\Model\EventProduct::class;
        $this->url = "/operations/" . $eventMoment->getEvent()->getOperation()->getIdOperation() . "/events/" . $eventMoment->getEvent()->getIdEvent() . "/moments/" . $eventMoment->getIdEventMoment() . '/products';
    }

    public function getAll($format = MGD::FORMAT_OBJECT, $params = array())
    {
        return $this->master->getAll($this->url, $this->entity, $params, $format);
    }

    public function get($id, $format = MGD::FORMAT_OBJECT)
    {
        return $this->master->get($this->url, $id, $this->entity, $format);
    }

    public function post(\monsieurgourmand\Bundle\InterfaceBundle\Model\EventProduct $eventProduct, $format = MGD::FORMAT_OBJECT)
    {
        return $this->master->post($this->url, $eventProduct, $this->entity, $format);
    }

    public function put(\monsieurgourmand\Bundle\InterfaceBundle\Model\EventProduct $eventProduct, $format = MGD::FORMAT_OBJECT)
    {
        return $this->master->put($this->url, $eventProduct->getIdEventProduct(), $eventProduct, $this->entity, $format);
    }
}