<?php

namespace monsieurgourmand\Bundle\InterfaceBundle\Route\Channel;

use monsieurgourmand\Bundle\InterfaceBundle\Model\Channel;
use monsieurgourmand\Bundle\InterfaceBundle\Model\User;
use monsieurgourmand\Bundle\InterfaceBundle\Service\MGD;

class Subscriber
{
    /** @var MGD */
    private $master;

    /** @var string */
    private $entity;

    /** @var string */
    private $url;

    /**
     * Message constructor.
     * @param Channel $channel
     */
    public function __construct(Channel $channel)
    {
        $this->master = $channel->getMaster();
        $this->entity = User::class;
        $this->url = "/channels/" . $channel->getId() . '/subscribers';
    }

    /**
     * @param array $params
     * @param string $format
     *
     * @return User[]
     */
    public function getAll($params = [], string $format = MGD::FORMAT_OBJECT)
    {
        return $this->master->getAll($this->url, $this->entity, $params, $format);
    }
}
