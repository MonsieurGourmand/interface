<?php

namespace monsieurgourmand\Bundle\InterfaceBundle\Route\Product;

use monsieurgourmand\Bundle\InterfaceBundle\Model\Product;
use monsieurgourmand\Bundle\InterfaceBundle\Model\ProductPicture;

/**
 * Class Picture
 *
 * @author Alice Dahan <alice@monsieurgourmand.com>
 */
class Picture
{
    private $entity;
    private $url;
    private $master;

    public function __construct(Product $product)
    {
        $this->master = $product->getMaster();
        $this->entity = ProductPicture::class;
        if ($product->getSupplier()) {
            $this->url = "/suppliers/" . $product->getSupplier()->getIdSupplier() . "/products/" . $product->getIdProduct() . "/pictures";
        } else {
            $this->url = "/products/" . $product->getIdProduct() . "/pictures";
        }
    }

    public function post(ProductPicture $picture, $format = MGD::FORMAT_OBJECT)
    {
        return $this->master->post($this->url, $picture, $this->entity, $format);
    }

    public function delete(int $pictureId)
    {
        return $this->master->remove($this->url, $pictureId);
    }
}
