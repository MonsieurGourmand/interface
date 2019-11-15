<?php

namespace monsieurgourmand\Bundle\InterfaceBundle\Route\Channel;

use monsieurgourmand\Bundle\InterfaceBundle\Model\Channel;
use monsieurgourmand\Bundle\InterfaceBundle\Service\MGD;
use monsieurgourmand\Bundle\InterfaceBundle\Model\Message as MessageEntity;

class Message
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
        $this->entity = MessageEntity::class;
        $this->url = "/channels/" . $channel->getId() . '/messages';
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
     * @return MessageEntity
     */
    public function get(int $id, array $params = [], string $format = MGD::FORMAT_OBJECT)
    {
        return $this->master->get($this->url, $id, $this->entity, $format, $params);
    }

    /**
     * @param MessageEntity $message
     * @param string $format
     * @return MessageEntity
     */
    public function post(MessageEntity $message, string $format = MGD::FORMAT_OBJECT)
    {
        return $this->master->post($this->url, $message, $this->entity, $format);
    }

    /**
     * @param MessageEntity $message
     * @param string $format
     * @return MessageEntity
     */
    public function put(MessageEntity $message, string $format = MGD::FORMAT_OBJECT)
    {
        return $this->master->put($this->url, $message->getId(), $message, $this->entity, $format);
    }

    /**
     * @param int $idMessage
     */
    public function remove(int $idMessage)
    {
        $this->master->remove($this->url, $idMessage);
    }
}
