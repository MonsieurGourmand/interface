<?php
/**
 * Created by PhpStorm.
 * User: remi
 * Date: 1/20/17
 * Time: 6:10 PM
 */

namespace monsieurgourmand\Bundle\InterfaceBundle\Route\Event;


use monsieurgourmand\Bundle\InterfaceBundle\Model\Event;
use monsieurgourmand\Bundle\InterfaceBundle\Service\MGD;

class EventMoment
{
    private $entity;
    private $url;
    private $master;

    public function __construct(Event $event)
    {
        $this->master = $event->getMaster();
        $this->entity = \monsieurgourmand\Bundle\InterfaceBundle\Model\EventMoment::class;
        $this->url = "/operations/" . $event->getOperation()->getIdOperation() . "/events/" . $event->getIdEvent() . "/moments";
    }

    public function getAll($format = MGD::FORMAT_OBJECT, $params = array())
    {
        return $this->master->getAll($this->url, $this->entity, $params, $format);
    }

    public function get($id, $format = MGD::FORMAT_OBJECT)
    {
        return $this->master->get($this->url, $id, $this->entity, $format);
    }

    public function post(\monsieurgourmand\Bundle\InterfaceBundle\Model\EventMoment $eventMoment, $format = MGD::FORMAT_OBJECT)
    {
        return $this->master->post($this->url, $eventMoment, $this->entity, $format);
    }

    public function put(\monsieurgourmand\Bundle\InterfaceBundle\Model\EventMoment $eventMoment, $format = MGD::FORMAT_OBJECT)
    {
        return $this->master->put($this->url, $eventMoment->getIdEventMoment(), $eventMoment, $this->entity, $format);
    }

    public function remove(\monsieurgourmand\Bundle\InterfaceBundle\Model\EventMoment $eventMoment)
    {
        return $this->master->remove($this->url, $eventMoment->getIdEventMoment());
    }

}