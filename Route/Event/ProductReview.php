<?php

namespace monsieurgourmand\Bundle\InterfaceBundle\Route\Event;

use monsieurgourmand\Bundle\InterfaceBundle\Model\Event;
use monsieurgourmand\Bundle\InterfaceBundle\Model\ProductReview as ProductReviewModel
use monsieurgourmand\Bundle\InterfaceBundle\Service\MGD;

class ProductReview
{
    private $entity;
    private $url;
    private $master;

    public function __construct(Event $event)
    {
        $this->master = $event->getMaster();
        $this->entity = ProductReviewModel::class;
        $this->url = "/operations/" . $event->getOperation()->getIdOperation() . "/events/" . $event->getIdEvent() . "/reviews";
    }

    /**
     * @param array $params
     * @param string $format
     * @return ProductReviewModel[]
     */
    public function getAll($params = [], $format = MGD::FORMAT_OBJECT): array
    {
        return $this->master->getAll($this->url, $this->entity, $params, $format);
    }
}
