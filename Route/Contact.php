<?php

namespace monsieurgourmand\Bundle\InterfaceBundle\Route;

use monsieurgourmand\Bundle\InterfaceBundle\Service\MGD;
use monsieurgourmand\Bundle\InterfaceBundle\Model\User;

class Contact
{

    /** @var MGD  */
    private $master;

    /** @var string  */
    private $entity;

    /** @var string  */
    private $url;

    /**
     * Contact constructor.
     * @param MGD $master
     */
    public function __construct(MGD $master)
    {
        $this->master = $master;
        $this->entity = User::class;
        $this->url = '/contacts';
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
     * @param $id
     * @param string $format
     * @return array|false|string|void
     */
    public function get($id, $format = MGD::FORMAT_OBJECT)
    {
        return $this->master->get($this->url, $id, $this->entity, $format);
    }

    /**
     * @param User $user
     * @param string $format
     * @return array|false|string|void
     */
    public function post(User $user, $format = MGD::FORMAT_OBJECT)
    {
        return $this->master->post($this->url, $user, $this->entity, $format);
    }

    /**
     * @param User $user
     * @param string $format
     * @return array|false|string|void
     */
    public function put(User $user, $format = MGD::FORMAT_OBJECT)
    {
        return $this->master->put($this->url, $user->getId(), $user, $this->entity, $format);
    }
}
