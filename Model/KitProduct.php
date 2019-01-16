<?php

namespace monsieurgourmand\Bundle\InterfaceBundle\Model;

class KitProduct extends Master
{
    /**
     * @var integer
     */
    private $idKitProduct;

    /**
     * @var Product
     */
    private $product;

    /**
     * @var integer
     */
    private $quantity;

    /**
     * @var Kit
     */
    private $kit;

    /**
     * @return int
     */
    public function getIdKitProduct()
    {
        return $this->idKitProduct;
    }

    /**
     * @param int $idKitProduct
     * @return KitProduct
     */
    public function setIdKitProduct($idKitProduct)
    {
        $this->idKitProduct = $idKitProduct;
        return $this;
    }

    /**
     * @return Product
     */
    public function getProduct()
    {
        return $this->product;
    }

    /**
     * @param Product $product
     * @return KitProduct
     */
    public function setProduct($product)
    {
        $this->product = $product;
        return $this;
    }

    /**
     * @return int
     */
    public function getQuantity()
    {
        return $this->quantity;
    }

    /**
     * @param int $quantity
     * @return KitProduct
     */
    public function setQuantity($quantity)
    {
        $this->quantity = $quantity;
        return $this;
    }

    /**
     * @return Kit
     */
    public function getKit()
    {
        return $this->kit;
    }

    /**
     * @param Kit $kit
     * @return KitProduct
     */
    public function setKit($kit)
    {
        $this->kit = $kit;
        return $this;
    }
}
