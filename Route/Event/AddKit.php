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

class AddKit
{
    private $entity;
    private $url;
    private $master;

    public function __construct(Event $event)
    {
        $this->master = $event->getMaster();
        $this->entity = \monsieurgourmand\Bundle\InterfaceBundle\Model\Event::class;
        $this->url = "/operations/" . $event->getOperation()->getIdOperation() . "/events/" . $event->getIdEvent() . "/addkits";
    }

    public function put($idKit, $format = MGD::FORMAT_OBJECT)
    {
        return $this->master->put($this->url, $idKit, null, $this->entity, $format);
    }

}