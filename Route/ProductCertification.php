<?php

namespace monsieurgourmand\Bundle\InterfaceBundle\Route;

use monsieurgourmand\Bundle\InterfaceBundle\Model\ProductCertification as CertificationModel;
use monsieurgourmand\Bundle\InterfaceBundle\Service\MGD;

class ProductCertification
{
    private $master;
    private $entity;
    private $url;

    public function __construct(MGD $master)
    {
        $this->master = $master;
        $this->entity = CertificationModel::class;
        $this->url = '/productcertifications';
    }

    /**
     * @param array $params
     * @param string $format
     * @return CertificationModel[]
     */
    public function getAll($params = [], $format = MGD::FORMAT_OBJECT): array
    {
        return $this->master->getAll($this->url, $this->entity, $params, $format);
    }
}
