<?php

namespace monsieurgourmand\Bundle\InterfaceBundle\Route\Supplier\Product;

use monsieurgourmand\Bundle\InterfaceBundle\Model\Product;
use monsieurgourmand\Bundle\InterfaceBundle\Model\ProductTechnicalForm;

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
            $this->url = "/suppliers/" . $product->getSupplier()->getIdSupplier() . "/products/" . $product->getIdProduct() . "/technical_forms";
        } else {
            $this->url = "/products/" . $product->getIdProduct() . "/technical_forms";
        }
    }

    public function post(ProductTechnicalForm $technicalForm, $format = MGD::FORMAT_OBJECT)
    {
        return $this->master->post($this->url, $technicalForm, $this->entity, $format);
    }

    public function delete(int $technicalFormId)
    {
        return $this->master->remove($this->url, $technicalFormId);
    }
}
