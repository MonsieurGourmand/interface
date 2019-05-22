<?php

namespace monsieurgourmand\Bundle\InterfaceBundle\Model;

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
     * @var int
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
     * @return int
     */
    public function getProduct(): ?int
    {
        if ($this->product instanceof Product) {
            return $this->product->getIdProduct();
        } elseif (is_int($this->product)) {
            return $this->product;
        }

        return null;
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
