<?php

namespace monsieurgourmand\Bundle\InterfaceBundle\Route;

use monsieurgourmand\Bundle\InterfaceBundle\Model\Sponsorship as SponsorshipModel;
use monsieurgourmand\Bundle\InterfaceBundle\Service\MGD;

class Sponsorship
{
    /** @var MGD */
    private $master;
    /** @var string */
    private $entity;
    /** @var string */
    private $url;

    /**
     * Sponsorship constructor.
     *
     * @param MGD $master
     */
    public function __construct(MGD $master)
    {
        $this->master = $master;
        $this->entity = SponsorshipModel::class;
        $this->url = '/sponsorships';
    }

    /**
     * @param array $params
     * @param string $format
     * @return SponsorshipModel[]
     */
    public function getAll($params = [], $format=MGD::FORMAT_OBJECT)
    {
        return $this->master->getAll($this->url, $this->entity, $params, $format);
    }
}