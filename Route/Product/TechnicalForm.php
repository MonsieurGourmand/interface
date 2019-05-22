<?php

namespace monsieurgourmand\Bundle\InterfaceBundle\Route\Product;

use monsieurgourmand\Bundle\InterfaceBundle\Model\Product;
use monsieurgourmand\Bundle\InterfaceBundle\Model\ProductTechnicalForm;
use monsieurgourmand\Bundle\InterfaceBundle\Service\MGD;

/**
 * Class TechnicalForm
 *
 * @author Alice Dahan <alice@monsieurgourmand.com>
 */
class TechnicalForm
{
    private $entity;
    private $url;
    private $master;

    public function __construct(Product $product)
    {
        $this->master = $product->getMaster();
        $this->entity = ProductTechnicalForm::class;
        if ($product->getSupplier()) {
            $this->url = "/suppliers/" . $product->getSupplier()->getIdSupplier() . "/products/" . $product->getIdProduct() . "/technicalforms";
        } else {
            $this->url = "/products/" . $product->getIdProduct() . "/technicalforms";
        }
    }

    public function get(int $technicalFormId, $format = MGD::FORMAT_OBJECT): ProductTechnicalForm
    {
        return $this->master->get($this->url, $technicalFormId, $this->entity, $format);
    }

    public function post(ProductTechnicalForm $technicalForm, $format = MGD::FORMAT_OBJECT)
    {
        return $this->master->post($this->url, $technicalForm, $this->entity, $format);
    }

    public function patch(ProductTechnicalForm $technicalForm, $format = MGD::FORMAT_OBJECT)
    {
        return $this->master->patch($this->url, $technicalForm->getId(), $technicalForm, $this->entity, $format);
    }

    public function delete(int $technicalFormId)
    {
        return $this->master->remove($this->url, $technicalFormId);
    }
}
