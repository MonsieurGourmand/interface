<?php

namespace monsieurgourmand\Bundle\InterfaceBundle\Route\Product;

use monsieurgourmand\Bundle\InterfaceBundle\Model\Product;
use monsieurgourmand\Bundle\InterfaceBundle\Model\ProductPicture;
use monsieurgourmand\Bundle\InterfaceBundle\Service\MGD;

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

    public function get(int $pictureId, $format = MGD::FORMAT_OBJECT): ProductPicture
    {
        return $this->master->get($this->url, $pictureId, $this->entity, $format);
    }

    public function post(ProductPicture $picture, $format = MGD::FORMAT_OBJECT)
    {
        return $this->master->post($this->url, $picture, $this->entity, $format);
    }

    public function patch(ProductPicture $picture, $format = MGD::FORMAT_OBJECT)
    {
        return $this->master->patch($this->url, $picture->getId(), $picture, $this->entity, $format);
    }

    public function delete(int $pictureId)
    {
        return $this->master->remove($this->url, $pictureId);
    }
}
