<?php

namespace monsieurgourmand\Bundle\InterfaceBundle\Model;

/**
 * Class SupplierPicture
 *
 * @author Alice Dahan <alice@monsieurgourmand.com>
 */
class SupplierPicture extends Master
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var int
     */
    private $supplier;

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
    public function getSupplier(): ?int
    {
        if ($this->supplier instanceof Supplier) {
            return $this->supplier->getIdSupplier();
        } elseif (is_int($this->supplier)) {
            return $this->supplier;
        }

        return null;
    }

    /**
     * @param Supplier $supplier
     *
     * @return SupplierPicture
     */
    public function setSupplier(Supplier $supplier): SupplierPicture
    {
        $this->supplier = $supplier;

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
     * @return SupplierPicture
     */
    public function setDocument(Document $document): SupplierPicture
    {
        $this->document = $document;

        return $this;
    }
}
