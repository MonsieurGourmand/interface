<?php

namespace monsieurgourmand\Bundle\InterfaceBundle\Model;

use monsieurgourmand\Bundle\InterfaceBundle\Model\Document;
use monsieurgourmand\Bundle\InterfaceBundle\Model\Product;

/**
 * Class ProductPicture
 *
 * @author Alice Dahan <alice@monsieurgourmand.com>
 */
class ProductPicture extends Master
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var Product
     */
    private $product;

    /**
     * @var Document
     */
    private $document;

    /**
     * @var bool
     */
    private $default = false;

    /**
     * @return int
     */
    public function getId(): ?int
    {
        return $this->id;
    }

    /**
     * @return Product
     */
    public function getProduct(): ?Product
    {
        return $this->product;
    }

    /**
     * @param Product $product
     *
     * @return ProductPicture
     */
    public function setProduct(Product $product): ProductPicture
    {
        $this->product = $product;

        return $this;
    }

    /**
     * @return Document
     */
    public function getDocument(): ?Document
    {
        return $this->document;
    }

    /**
     * @param Document $document
     *
     * @return ProductPicture
     */
    public function setDocument(Document $document): ProductPicture
    {
        $this->document = $document;

        return $this;
    }

    /**
     * @return bool
     */
    public function isDefault(): bool
    {
        return $this->default;
    }

    /**
     * @param bool $default
     *
     * @return ProductPicture
     */
    public function setDefault(bool $default): ProductPicture
    {
        $this->default = $default;

        return $this;
    }
}
