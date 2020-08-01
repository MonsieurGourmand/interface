<?php

namespace monsieurgourmand\Bundle\InterfaceBundle\Route\User;

use monsieurgourmand\Bundle\InterfaceBundle\Model\User;
use monsieurgourmand\Bundle\InterfaceBundle\Service\MGD;

class SponsoredSales
{
    /** @var string */
    private $entity;
    /** @var string */
    private $url;
    /** @var MGD */
    private $master;

    /**
     * SponsoredSales constructor.
     * @param User $user
     */
    public function __construct(User $user)
    {
        $this->master = $user->getMaster();
        $this->entity = null;
        $this->url = "/users/" . $user->getId() . "/sponsoredsales";
    }

    /**
     * @param string $format
     * @param array $params
     * @return float
     */
    public function getAll($params = [], $format = MGD::FORMAT_JSON)
    {
        return $this->master->getAll($this->url, $this->entity, $params, $format);
    }
}
