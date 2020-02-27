<?php

namespace monsieurgourmand\Bundle\InterfaceBundle\Route\Operation;

use monsieurgourmand\Bundle\InterfaceBundle\Model\Operation;
use monsieurgourmand\Bundle\InterfaceBundle\Service\MGD;

class AddPackages
{
    /** @var string */
    private $url;

    /** @var MGD */
    private $master;

    /**
     * AddPackages constructor.
     * @param Operation $operation
     */
    public function __construct(Operation $operation)
    {
        $this->master = $operation->getMaster();
        $this->url = "/operations/" . $operation->getIdOperation() . "/formats";
    }

    /**
     * @param int $formatId
     * @param array $params
     * @param string $format
     */
    public function addPackages(int $formatId, array $params, string $format = MGD::FORMAT_OBJECT)
    {
        $this->master->post($this->url . '/' . $formatId . '/addpackages', $params, null, $format);
    }

}
