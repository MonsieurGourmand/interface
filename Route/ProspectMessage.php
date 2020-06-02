<?php

namespace monsieurgourmand\Bundle\InterfaceBundle\Route;

use monsieurgourmand\Bundle\InterfaceBundle\Service\MGD;

class ProspectMessage
{
    private $entity;
    private $url;
    private $master;

    public function __construct(MGD $master)
    {
        $this->master = $master;
        $this->entity = \monsieurgourmand\Bundle\InterfaceBundle\Model\ProspectMessage::class;
        $this->url = '/prospectsmessages';
    }

    public function getAll($params = [], $format=MGD::FORMAT_OBJECT)
    {
        return $this->master->getAll($this->url, $this->entity, $params, $format);
    }

    public function get(int $id, $params = [], $format=MGD::FORMAT_OBJECT)
    {
        return $this->master->get($this->url, $id, $this->entity, $format, $params);
    }

    public function post(\monsieurgourmand\Bundle\InterfaceBundle\Model\ProspectMessage $message, $format=MGD::FORMAT_OBJECT)
    {
        return $this->master->post($this->url, $message, $this->entity, $format);
    }

    public function put(\monsieurgourmand\Bundle\InterfaceBundle\Model\ProspectMessage $message, $format=MGD::FORMAT_OBJECT)
    {
        return $this->master->put($this->url, $message->getIdMessage(), $message, $this->entity, $format);
    }

    public function remove(\monsieurgourmand\Bundle\InterfaceBundle\Model\ProspectMessage $message)
    {
        return $this->master->remove($this->url, $message->getIdMessage());
    }
}
