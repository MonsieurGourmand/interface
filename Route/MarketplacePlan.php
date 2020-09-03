<?php

namespace monsieurgourmand\Bundle\InterfaceBundle\Route;

use monsieurgourmand\Bundle\InterfaceBundle\Service\MGD;
use monsieurgourmand\Bundle\InterfaceBundle\Model\MarketplacePlan as MarketplacePlanModel;

class MarketplacePlan
{
    /** @var MGD */
    private $master;

    /** @var string */
    private $entity;

    /** @var string */
    private $url;

    /**
     * ShopType constructor.
     *
     * @param MGD $master
     */
    public function __construct(MGD $master)
    {
        $this->master = $master;
        $this->entity = MarketplacePlanModel::class;
        $this->url = '/marketplaceplans';
    }

    /**
     * @param array $params
     * @param string $format
     * @return MarketplacePlanModel[]
     */
    public function getAll($params = [], $format = MGD::FORMAT_OBJECT): array
    {
        return $this->master->getAll($this->url, $this->entity, $params, $format);
    }
}
