<?php

namespace monsieurgourmand\Bundle\InterfaceBundle\Route\Supplier;

use monsieurgourmand\Bundle\InterfaceBundle\Model\SupplierPicture;
use monsieurgourmand\Bundle\InterfaceBundle\Model\Supplier;
use monsieurgourmand\Bundle\InterfaceBundle\Service\MGD;

class Picture
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
        $this->entity = SupplierPicture::class;
        $this->url = "/suppliers/" . $supplier->getIdSupplier() . "/pictures";
    }

    public function get(int $pictureId, $format = MGD::FORMAT_OBJECT): SupplierPicture
    {
        return $this->master->get($this->url, $pictureId, $this->entity, $format);
    }

    public function post(SupplierPicture $picture, $format = MGD::FORMAT_OBJECT)
    {
        return $this->master->post($this->url, $picture, $this->entity, $format);
    }

    public function patch(SupplierPicture $picture, $format = MGD::FORMAT_OBJECT)
    {
        return $this->master->patch($this->url, $picture->getId(), $picture, $this->entity, $format);
    }

    public function delete(int $pictureId)
    {
        return $this->master->remove($this->url, $pictureId);
    }
}
