<?php

namespace monsieurgourmand\Bundle\InterfaceBundle\Route;

use monsieurgourmand\Bundle\InterfaceBundle\Service\MGD;
use monsieurgourmand\Bundle\InterfaceBundle\Model\Flux as FluxModel;

class Flux
{
    /** @var MGD */
    private $master;

    /** @var string */
    private $entity;

    /** @var string */
    private $url;

    public function __construct(MGD $master)
    {
        $this->master = $master;
        $this->entity = FluxModel::class;
        $this->url = '/fluxes';
    }

    /**
     * @param array $params
     * @param string $format
     * @return array|false|string|void
     */
    public function getAll($params = [], $format = MGD::FORMAT_OBJECT)
    {
        return $this->master->getAll($this->url, $this->entity, $params, $format);
    }

    /**
     * @param int $id
     * @param string $format
     * @return array|false|string|void
     */
    public function get(int $id, $format = MGD::FORMAT_OBJECT)
    {
        return $this->master->get($this->url, $id, $this->entity, $format);
    }

    /**
     * @param FluxModel $flux
     * @param string $format
     * @return array|false|string|void|null
     */
    public function post(FluxModel $flux, $format = MGD::FORMAT_OBJECT)
    {
        return $this->master->post($this->url, $flux, $this->entity, $format);
    }

    /**
     * @param FluxModel $flux
     * @param string $format
     * @return array|false|string|void|null
     */
    public function put(FluxModel $flux, $format = MGD::FORMAT_OBJECT)
    {
        return $this->master->put($this->url, $flux->getId(), $flux, $this->entity, $format);
    }
}
