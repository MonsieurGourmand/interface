<?php
/**
 * Created by PhpStorm.
 * User: remi
 * Date: 1/20/17
 * Time: 6:10 PM
 */

namespace monsieurgourmand\Bundle\InterfaceBundle\Route\Format;


use monsieurgourmand\Bundle\InterfaceBundle\Model\Kit;
use monsieurgourmand\Bundle\InterfaceBundle\Service\MGD;

class Event
{
    private $entity;
    private $url;
    private $master;

    public function __construct(Kit $kit)
    {
        $this->master = $kit->getMaster();
        $this->entity = \monsieurgourmand\Bundle\InterfaceBundle\Model\Event::class;
        $this->url = "/formats/" . $kit->getIdKit() . "/events";
    }

    public function post(\monsieurgourmand\Bundle\InterfaceBundle\Model\Event $event, $format = MGD::FORMAT_OBJECT)
    {
        return $this->master->post($this->url, $event, $this->entity, $format);
    }
}