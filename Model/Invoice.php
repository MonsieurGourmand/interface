<?php

namespace monsieurgourmand\Bundle\InterfaceBundle\Model;

use DateTime;

class Invoice extends Master
{
    /** @var integer */
    private $id;

    /** @var integer */
    private $idFproInvoice;

    /** @var Quote */
    private $quote;

    /** @var Document */
    private $lastDocument;

    /** @var boolean */
    private $isPaid;

    /** @var boolean */
    private $isRefund;

    /** @var DateTime */
    private $created;

    /** @var string */
    private $mode = 'normal';

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
    public function getIdFproInvoice(): int
    {
        return $this->idFproInvoice;
    }

    /**
     * @param int $idFproInvoice
     * @return Invoice
     */
    public function setIdFproInvoice(int $idFproInvoice): Invoice
    {
        $this->idFproInvoice = $idFproInvoice;
        return $this;
    }

    /**
     * @return Quote
     */
    public function getQuote(): Quote
    {
        return $this->quote;
    }

    /**
     * @param Quote $quote
     * @return Invoice
     */
    public function setQuote(Quote $quote): Invoice
    {
        $this->quote = $quote;
        return $this;
    }

    /**
     * @return Document
     */
    public function getLastDocument(): Document
    {
        return $this->lastDocument;
    }

    /**
     * @param Document $lastDocument
     * @return Invoice
     */
    public function setLastDocument(Document $lastDocument): Invoice
    {
        $this->lastDocument = $lastDocument;
        return $this;
    }

    /**
     * @return bool
     */
    public function isPaid(): bool
    {
        return $this->isPaid;
    }

    /**
     * @param bool $isPaid
     * @return Invoice
     */
    public function setIsPaid(bool $isPaid): Invoice
    {
        $this->isPaid = $isPaid;
        return $this;
    }

    /**
     * @return bool
     */
    public function isRefund(): bool
    {
        return $this->isRefund;
    }

    /**
     * @param bool $isRefund
     * @return Invoice
     */
    public function setIsRefund(bool $isRefund): Invoice
    {
        $this->isRefund = $isRefund;
        return $this;
    }

    /**
     * @return DateTime
     */
    public function getCreated(): DateTime
    {
        return $this->created;
    }

    /**
     * @param DateTime $created
     * @return Invoice
     */
    public function setCreated(DateTime $created): Invoice
    {
        $this->created = $created;
        return $this;
    }

    /**
     * @param string $mode
     * @return Invoice
     */
    public function setMode(string $mode): Invoice
    {
        $this->mode = $mode;
        return $this;
    }
}
