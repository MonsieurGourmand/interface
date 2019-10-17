<?php

namespace monsieurgourmand\Bundle\InterfaceBundle\Route\Channel;

use monsieurgourmand\Bundle\InterfaceBundle\Model\Channel;
use monsieurgourmand\Bundle\InterfaceBundle\Service\MGD;

class AddSub
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
        $this->entity = Channel::class;
        $this->url = "/channels/" . $channel->getId() . '/addsub';
    }

    /**
     * @param int $idUser
     * @param string $format
     * @return Channel
     */
    public function put(int $idUser, string $format = MGD::FORMAT_OBJECT)
    {
        return $this->master->put($this->url, $idUser, [], $this->entity, $format);
    }

    /**
     * @param int $idUser
     */
    public function remove(int $idUser)
    {
        $this->master->remove($this->url, $idUser);
    }
}
