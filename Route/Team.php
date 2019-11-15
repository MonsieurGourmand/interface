<?php

namespace monsieurgourmand\Bundle\InterfaceBundle\Route;

use monsieurgourmand\Bundle\InterfaceBundle\Service\MGD;
use monsieurgourmand\Bundle\InterfaceBundle\Model\Team as TeamEntity;

class Team
{
    /** @var MGD  */
    private $master;

    /** @var string  */
    private $entity;

    /** @var string  */
    private $url;

    /**
     * Team constructor.
     * @param MGD $master
     */
    public function __construct(MGD $master)
    {
        $this->master = $master;
        $this->entity = TeamEntity::class;
        $this->url = '/teams';
    }

    /**
     * @param array $params
     * @param string $format
     * @return TeamEntity[]
     */
    public function getAll($params = [], $format = MGD::FORMAT_OBJECT)
    {
        return $this->master->getAll($this->url, $this->entity, $params, $format);
    }
}
