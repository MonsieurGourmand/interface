<?php

namespace monsieurgourmand\Bundle\InterfaceBundle\Route\Product;

use monsieurgourmand\Bundle\InterfaceBundle\Model\Channel as ChannelEntity;
use monsieurgourmand\Bundle\InterfaceBundle\Model\Product;
use monsieurgourmand\Bundle\InterfaceBundle\Service\MGD;

class Channel
{
    /** @var MGD */
    private $master;

    /** @var string */
    private $entity;

    /** @var string */
    private $url;

    /**
     * Message constructor.
     * @param Product $product
     */
    public function __construct(Product $product)
    {
        $this->master = $product->getMaster();
        $this->entity = ChannelEntity::class;
        $this->url = "/products/" . $product->getIdProduct() . '/channels';
    }

    /**
     * @param array $params
     * @param string $format
     *
     * @return ChannelEntity[]
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
     * @param ChannelEntity $channel
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
