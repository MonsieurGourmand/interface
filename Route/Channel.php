<?php

namespace monsieurgourmand\Bundle\InterfaceBundle\Route;

use monsieurgourmand\Bundle\InterfaceBundle\Service\MGD;
use monsieurgourmand\Bundle\InterfaceBundle\Model\Channel as ChannelEntity;

class Channel
{
    /** @var MGD */
    private $master;

    /** @var string */
    private $entity;

    /** @var string */
    private $url;

    /**
     * Channel constructor.
     * @param MGD $master
     */
    public function __construct(MGD $master)
    {
        $this->master = $master;
        $this->entity = ChannelEntity::class;
        $this->url = "/channels";
    }

    /**
     * @param array $params
     * @param string $format
     *
     * @return array
     */
    public function getAll($params = [], string $format = MGD::FORMAT_OBJECT)
    {
        return $this->master->getAll($this->url, $this->entity, $params, $format);
    }

    /**
     * @param int $id
     * @param array $params
     * @param string $format
     *
     * @return ChannelEntity
     */
    public function get(int $id, array $params = [], string $format = MGD::FORMAT_OBJECT)
    {
        return $this->master->get($this->url, $id, $this->entity, $format, $params);
    }

    /**
     * @param ChannelEntity$channel
     * @param string $format
     * @return ChannelEntity
     */
    public function post(ChannelEntity $channel, string $format = MGD::FORMAT_OBJECT)
    {
        return $this->master->post($this->url, $channel, $this->entity, $format);
    }

    /**
     * @param ChannelEntity $channel
     * @param string $format
     * @return ChannelEntity
     */
    public function put(ChannelEntity $channel, string $format = MGD::FORMAT_OBJECT)
    {
        return $this->master->put($this->url, $channel->getId(), $channel, $this->entity, $format);
    }
}
