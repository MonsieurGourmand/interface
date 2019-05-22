<?php

namespace monsieurgourmand\Bundle\InterfaceBundle\Model;

/**
 * Class ProductTechnicalForm
 *
 * @author Alice Dahan <alice@monsieurgourmand.com>
 */
class ProductTechnicalForm extends Master
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
     * @return ProductTechnicalForm
     */
    public function setProduct(Product $product): ProductTechnicalForm
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
     * @return ProductTechnicalForm
     */
    public function setDocument(Document $document): ProductTechnicalForm
    {
        $this->document = $document;

        return $this;
    }
}
