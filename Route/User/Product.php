<?php

namespace monsieurgourmand\Bundle\InterfaceBundle\Route\User;

use monsieurgourmand\Bundle\InterfaceBundle\Model\User;
use monsieurgourmand\Bundle\InterfaceBundle\Service\MGD;

class Product
{
    /** @var string */
    private $url;

    /** @var MGD */
    private $master;

    /**
     * Product constructor.
     *
     * @param User $user
     */
    public function __construct(User $user)
    {
        $this->master = $user->getMaster();
        $this->url = "/users/" . $user->getId() . "/products";
    }

    /**
     * @param int $id
     * @return bool
     */
    public function hasBought(int $id): bool
    {
        return $this->master->get($this->url, $id, null, null);
    }
}
