<?php

namespace monsieurgourmand\Bundle\InterfaceBundle\Route\Supplier;

use monsieurgourmand\Bundle\InterfaceBundle\Model\Supplier;
use monsieurgourmand\Bundle\InterfaceBundle\Model\SupplierCertification;
use monsieurgourmand\Bundle\InterfaceBundle\Service\MGD;

class Certification
{
    /** @var string */
    private $entity;
    /** @var string */
    private $url;
    /** @var MGD */
    private $master;

    /**
     * Picture constructor.
     * @param Supplier $supplier
     */
    public function __construct(Supplier $supplier)
    {
        $this->master = $supplier->getMaster();
        $this->entity = SupplierCertification::class;
        $this->url = "/suppliers/" . $supplier->getIdSupplier() . "/certifications";
    }

    public function put(SupplierCertification $certification, $format = MGD::FORMAT_OBJECT)
    {
        return $this->master->put($this->url, $certification->getId(), $certification, $this->entity, $format);
    }

    public function delete(int $certificationId)
    {
        return $this->master->remove($this->url, $certificationId);
    }
}
