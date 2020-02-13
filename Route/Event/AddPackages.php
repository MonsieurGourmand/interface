<?php

namespace monsieurgourmand\Bundle\InterfaceBundle\Route\Event;

use monsieurgourmand\Bundle\InterfaceBundle\Model\Event;
use monsieurgourmand\Bundle\InterfaceBundle\Service\MGD;

class AddPackages
{
    /** @var string */
    private $url;

    /** @var MGD */
    private $master;

    /**
     * AddPackages constructor.
     * @param Event $event
     */
    public function __construct(Event $event)
    {
        $this->master = $event->getMaster();
        $this->url = "/operations/" . $event->getOperation()->getIdOperation() . "/events/" . $event->getIdEvent() . "/addpackages";
    }

    /**
     * @param array $params
     * @param string $format
     */
    public function addPackages(array $params, $format = MGD::FORMAT_OBJECT)
    {
        $this->master->post($this->url, $params, null, $format);
    }
}
