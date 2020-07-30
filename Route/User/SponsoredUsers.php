<?php

namespace monsieurgourmand\Bundle\InterfaceBundle\Route\User;

use monsieurgourmand\Bundle\InterfaceBundle\Model\User;
use monsieurgourmand\Bundle\InterfaceBundle\Service\MGD;

class SponsoredUsers
{
    /** @var string */
    private $entity;
    /** @var string */
    private $url;
    /** @var MGD */
    private $master;

    /**
     * SponsoredUsers constructor.
     * @param User $user
     */
    public function __construct(User $user)
    {
        $this->master = $user->getMaster();
        $this->entity = User::class;
        $this->url = "/users/" . $user->getId() . "/sponsoredusers";
    }

    /**
     * @param string $format
     * @param array $params
     * @return User[]
     */
    public function getAll($params = [], $format = MGD::FORMAT_OBJECT)
    {
        return $this->master->getAll($this->url, $this->entity, $params, $format);
    }
}
