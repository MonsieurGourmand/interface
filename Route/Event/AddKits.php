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

class AddKits
{
    private $entity;
    private $url;
    private $master;

    public function __construct(Event $event)
    {
        $this->master = $event->getMaster();
        $this->entity = Event::class;
        $this->url = "/operations/" . $event->getOperation()->getIdOperation() . "/events/" . $event->getIdEvent() . "/addkits";
    }

    public function addKit($idKit, $params, $format = MGD::FORMAT_OBJECT)
    {
        return $this->master->put($this->url, $idKit, $params, $this->entity, $format);
    }

}