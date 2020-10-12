<?php

namespace monsieurgourmand\Bundle\InterfaceBundle\Route\Event;

use monsieurgourmand\Bundle\InterfaceBundle\Model\Event;
use monsieurgourmand\Bundle\InterfaceBundle\Model\EventCoupon;
use monsieurgourmand\Bundle\InterfaceBundle\Service\MGD;

class Coupon
{
    private $entity;
    private $url;
    private $master;

    public function __construct(Event $event)
    {
        $this->master = $event->getMaster();
        $this->entity = EventCoupon::class;
        $this->url = "/operations/" . $event->getOperation()->getIdOperation() . "/events/" . $event->getIdEvent() . "/coupons";
    }

    /**
     * @param array $params
     * @param string $format
     * @return EventCoupon[]
     */
    public function getAll($params = [], $format = MGD::FORMAT_OBJECT)
    {
        return $this->master->getAll($this->url, $this->entity, $params, $format);
    }

    /**
     * @param EventCoupon $eventCoupon
     * @param string $format
     * @return EventCoupon
     */
    public function post(EventCoupon $eventCoupon, $format = MGD::FORMAT_OBJECT)
    {
        return $this->master->post($this->url, $eventCoupon, $this->entity, $format);
    }
}
