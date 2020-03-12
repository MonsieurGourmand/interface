<?php

namespace monsieurgourmand\Bundle\InterfaceBundle\Route\Format;

use monsieurgourmand\Bundle\InterfaceBundle\Model\Format;
use monsieurgourmand\Bundle\InterfaceBundle\Model\Kit;
use monsieurgourmand\Bundle\InterfaceBundle\Service\MGD;

class Option
{
    private $entity;
    private $url;
    private $master;

    public function __construct(Kit $kit)
    {
        $this->master = $kit->getMaster();
        $this->entity = Kit::class;
        $this->url = "/formats/" . $kit->getIdKit() . "/options";
    }

    /**
     * @param string $format
     * @param array $params
     * @return Format[]
     */
    public function getAll(string $format = MGD::FORMAT_OBJECT, array $params = []): array
    {
        return $this->master->getAll($this->url, $this->entity, $params, $format);
    }

    /**
     * @param int $optionId
     * @param array $params
     * @param string $format
     */
    public function addOption(int $optionId, array $params, string $format = MGD::FORMAT_OBJECT): void
    {
        $this->master->put($this->url, $optionId, $params, $this->entity, $format);
    }

    /**
     * @param int $optionId
     */
    public function removeOption(int $optionId): void
    {
        $this->master->remove($this->url, $optionId);
    }
}
