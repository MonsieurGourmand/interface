<?php

namespace monsieurgourmand\Bundle\InterfaceBundle\Route\Operation;

use monsieurgourmand\Bundle\InterfaceBundle\Model\Operation;
use monsieurgourmand\Bundle\InterfaceBundle\Service\MGD;

class AddFormat
{
    /** @var string */
    private $url;

    /** @var MGD */
    private $master;

    public function __construct(Operation $operation)
    {
        $this->master = $operation->getMaster();
        $this->url = "/operations/" . $operation->getIdOperation() . "/addformats";
    }

    public function addFormat(int $formatId, array $params, string $format = MGD::FORMAT_OBJECT)
    {
        $this->master->put($this->url, $formatId, $params, null, $format);
    }
}
