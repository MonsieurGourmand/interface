<?php

namespace monsieurgourmand\Bundle\InterfaceBundle\Route;

use monsieurgourmand\Bundle\InterfaceBundle\Service\MGD;

class Picking
{
    /** @var MGD */
    private $master;

    /** @var string */
    private $entity;

    /** @var string */
    private $url;

    /**
     * Picking constructor.
     * @param MGD $master
     */
    public function __construct(MGD $master)
    {
        $this->master = $master;
        $this->entity = null;
        $this->url = '/pickings';
    }

    /**
     * @param array $params
     * @param string $format
     * @return array|false|string|void
     */
    public function getAll($params = [], $format = MGD::FORMAT_PDF)
    {
        return $this->master->getAll($this->url, $this->entity, $params, $format);
    }
}
