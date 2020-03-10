<?php

namespace monsieurgourmand\Bundle\InterfaceBundle\Route;

use monsieurgourmand\Bundle\InterfaceBundle\Service\MGD;
use monsieurgourmand\Bundle\InterfaceBundle\Model\PaymentMethod as PaymentMethodModel;

class PaymentMethod
{
    /** @var MGD */
    private $master;

    /** @var string */
    private $entity;

    /** @var string */
    private $url;

    /**
     * PaymentMethod constructor.
     *
     * @param MGD $master
     */
    public function __construct(MGD $master)
    {
        $this->master = $master;
        $this->entity = PaymentMethodModel::class;
        $this->url = '/paymentmethods';
    }

    /**
     * @param array $params
     * @param string $format
     * @return PaymentMethod[]
     */
    public function getAll($params = [], $format = MGD::FORMAT_OBJECT): array
    {
        return $this->master->getAll($this->url, $this->entity, $params, $format);
    }
}
