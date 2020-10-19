<?php

namespace monsieurgourmand\Bundle\InterfaceBundle\Route\Supplier;

use monsieurgourmand\Bundle\InterfaceBundle\Model\Supplier;
use monsieurgourmand\Bundle\InterfaceBundle\Service\MGD;
use monsieurgourmand\Bundle\InterfaceBundle\Model\Event as EventModel;

class Event
{
    /** @var string */
    private $entity;
    /** @var string */
    private $url;
    /** @var MGD */
    private $master;

    /**
     * Event constructor.
     * @param Supplier $supplier
     */
    public function __construct(Supplier $supplier)
    {
        $this->master = $supplier->getMaster();
        $this->entity = EventModel::class;
        $this->url = "/suppliers/" . $supplier->getIdSupplier() . "/events";
    }

    /**
     * @param string $format
     * @param array $params
     * @return EventModel[]
     */
    public function getAll($params = array(), $format = MGD::FORMAT_OBJECT)
    {
        return $this->master->getAll($this->url, $this->entity, $params, $format);
    }

    /**
     * @param int $id
     * @param array $params
     * @param string $format
     * @return EventModel
     */
    public function get(int $id, array $params = [], $format = MGD::FORMAT_OBJECT): ?EventModel
    {
        return $this->master->get($this->url, $id, $this->entity, $format, $params);
    }
}
