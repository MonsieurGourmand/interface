<?php

namespace monsieurgourmand\Bundle\InterfaceBundle\Route;

use monsieurgourmand\Bundle\InterfaceBundle\Service\MGD;
use monsieurgourmand\Bundle\InterfaceBundle\Model\PunctualOperation as PunctualOperationEntity;
use monsieurgourmand\Bundle\InterfaceBundle\Model\Event;

class PunctualOperation
{
    private $master;
    private $entity;
    private $url;

    /**
     * PunctualOperation constructor.
     * @param MGD $master
     */
    public function __construct(MGD $master)
    {
        $this->master = $master;
        $this->entity = Event::class;
        $this->url = '/punctualoperations';
    }

    /**
     * @param PunctualOperationEntity $punctualOperation
     * @param string $format
     * @return array|false|string|void
     */
    public function post(PunctualOperationEntity $punctualOperation, $format = MGD::FORMAT_OBJECT)
    {
        return $this->master->post($this->url, $punctualOperation, $this->entity, $format);
    }
}
