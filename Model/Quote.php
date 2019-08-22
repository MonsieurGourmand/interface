<?php

namespace monsieurgourmand\Bundle\InterfaceBundle\Model;

use DateTime;

class Quote extends Master
{
    /** @var integer */
    private $id;

    /** @var integer */
    private $idFproQuote;

    /** @var bool */
    private $archived;

    /** @var DateTime */
    private $created;

    /** @var DateTime */
    private $updated;

    /** @var Operation */
    private $operation;

    /** @var Document */
    private $validatedQuote;

    /** @var bool */
    private $validated;

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
    public function getIdFproQuote(): ?int
    {
        return $this->idFproQuote;
    }

    /**
     * @param int $idFproQuote
     * @return Quote
     */
    public function setIdFproQuote(int $idFproQuote): Quote
    {
        $this->idFproQuote = $idFproQuote;
        return $this;
    }

    /**
     * @return bool
     */
    public function isArchived(): ?bool
    {
        return $this->archived;
    }

    /**
     * @param bool $archived
     * @return Quote
     */
    public function setArchived(bool $archived): Quote
    {
        $this->archived = $archived;
        return $this;
    }

    /**
     * @return DateTime
     */
    public function getCreated(): ?DateTime
    {
        return $this->created;
    }

    /**
     * @param DateTime $created
     * @return Quote
     */
    public function setCreated(DateTime $created): Quote
    {
        $this->created = $created;
        return $this;
    }

    /**
     * @return DateTime
     */
    public function getUpdated(): ?DateTime
    {
        return $this->updated;
    }

    /**
     * @param DateTime $updated
     * @return Quote
     */
    public function setUpdated(DateTime $updated): Quote
    {
        $this->updated = $updated;
        return $this;
    }

    /**
     * @return Operation
     */
    public function getOperation(): ?Operation
    {
        return $this->operation;
    }

    /**
     * @param Operation $operation
     * @return Quote
     */
    public function setOperation(Operation $operation): Quote
    {
        $this->operation = $operation;
        return $this;
    }

    /**
     * @return Document
     */
    public function getValidatedQuote(): ?Document
    {
        return $this->validatedQuote;
    }

    /**
     * @param Document $validatedQuote
     * @return Quote
     */
    public function setValidatedQuote(Document $validatedQuote): Quote
    {
        $this->validatedQuote = $validatedQuote;
        return $this;
    }

    /**
     * @return bool
     */
    public function isValidated(): ?bool
    {
        return $this->validated;
    }

    /**
     * @param bool $validated
     * @return Quote
     */
    public function setValidated(bool $validated): Quote
    {
        $this->validated = $validated;
        return $this;
    }
}