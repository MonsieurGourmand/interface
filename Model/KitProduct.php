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
     * @var string
     */
    private $comment;

    /**
     * @var integer
     */
    private $transport;

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

    /**
     * @return string
     */
    public function getComment()
    {
        return $this->comment;
    }

    /**
     * @param string $comment
     *
     * @return KitProduct
     */
    public function setComment($comment)
    {
        $this->comment = $comment;

        return $this;
    }

    /**
     * @return int
     */
    public function getTransport(): ?int
    {
        return $this->transport;
    }

    /**
     * @param int $transport
     * @return KitProduct
     */
    public function setTransport($transport): KitProduct
    {
        $this->transport = $transport;
        return $this;
    }
}
