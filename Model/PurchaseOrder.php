<?php

namespace monsieurgourmand\Bundle\InterfaceBundle\Model;

/**
 * Class PurchaseOrder
 */
class PurchaseOrder extends Master
{
    /** @var integer */
    private $id;

    /** @var string */
    private $reference;

    /** @var Document */
    private $document;

    /**
     * @return int
     */
    public function getId(): ?int
    {
        return $this->id;
    }

    /**
     * @param int $id
     *
     * @return PurchaseOrder
     */
    public function setId(int $id): PurchaseOrder
    {
        $this->id = $id;

        return $this;
    }

    /**
     * @return string
     */
    public function getReference(): ?string
    {
        return $this->reference;
    }

    /**
     * @param string $reference
     *
     * @return PurchaseOrder
     */
    public function setReference(string $reference): PurchaseOrder
    {
        $this->reference = $reference;

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
     * @return PurchaseOrder
     */
    public function setDocument(Document $document): PurchaseOrder
    {
        $this->document = $document;

        return $this;
    }
}
