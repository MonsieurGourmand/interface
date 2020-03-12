<?php

namespace monsieurgourmand\Bundle\InterfaceBundle\Model;

use monsieurgourmand\Bundle\InterfaceBundle\Interfaces\FormatInterface;

class Format extends Kit implements FormatInterface
{
    /**
     * @var integer
     */
    private $saltPax;

    /**
     * @var integer
     */
    private $sugarPax;

    /**
     * @var string
     */
    private $quoteNumber;

    /**
     * @var integer
     */
    private $transport;

    /**
     * @var integer
     */
    private $service;

    /**
     * @var integer
     */
    private $documents;

    /**
     * @var float
     */
    private $divers;

    /**
     * @var float
     */
    private $serviceCost;

    /**
     * @var float
     */
    private $price;

    /**
     * @var integer
     */
    private $type;

    /**
     * @var integer
     */
    private $discount;

    /** @var bool */
    private $public;

    /** @var bool */
    private $fixedPrice;

    /**
     * @return int
     */
    public function getSaltPax()
    {
        return $this->saltPax;
    }

    /**
     * @param int $saltPax
     * @return Format
     */
    public function setSaltPax(int $saltPax): Format
    {
        $this->saltPax = $saltPax;
        return $this;
    }

    /**
     * @return int
     */
    public function getSugarPax()
    {
        return $this->sugarPax;
    }

    /**
     * @param int $sugarPax
     * @return Format
     */
    public function setSugarPax(int $sugarPax): Format
    {
        $this->sugarPax = $sugarPax;
        return $this;
    }

    /**
     * @return string
     */
    public function getQuoteNumber(): ?string
    {
        return $this->quoteNumber;
    }

    /**
     * @param string $quoteNumber
     * @return Format
     */
    public function setQuoteNumber(string $quoteNumber): Format
    {
        $this->quoteNumber = $quoteNumber;

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
     * @return Format
     */
    public function setTransport(int $transport): Format
    {
        $this->transport = $transport;

        return $this;
    }

    /**
     * @return int
     */
    public function getService(): ?int
    {
        return $this->service;
    }

    /**
     * @param int $service
     * @return Format
     */
    public function setService(int $service): Format
    {
        $this->service = $service;

        return $this;
    }

    /**
     * @return int
     */
    public function getDocuments(): ?int
    {
        return $this->documents;
    }

    /**
     * @param int $documents
     * @return Format
     */
    public function setDocuments(int $documents): Format
    {
        $this->documents = $documents;

        return $this;
    }

    /**
     * @return float
     */
    public function getDivers(): ?float
    {
        return $this->divers;
    }

    /**
     * @param float $divers
     * @return Format
     */
    public function setDivers(float $divers): Format
    {
        $this->divers = $divers;

        return $this;
    }

    /**
     * @return float
     */
    public function getServiceCost(): ?float
    {
        return $this->serviceCost;
    }

    /**
     * @param float $serviceCost
     * @return Format
     */
    public function setServiceCost(float $serviceCost): Format
    {
        $this->serviceCost = $serviceCost;

        return $this;
    }

    /**
     * @return float
     */
    public function getPrice(): ?float
    {
        return $this->price;
    }

    /**
     * @param float $price
     * @return Format
     */
    public function setPrice(float $price): Format
    {
        $this->price = $price;

        return $this;
    }

    /**
     * @return int
     */
    public function getType(): ?int
    {
        return $this->type;
    }

    /**
     * @param int $type
     * @return Format
     */
    public function setType(int $type): Format
    {
        $this->type = $type;

        return $this;
    }

    /**
     * @return int
     */
    public function getDiscount(): ?int
    {
        return $this->discount;
    }

    /**
     * @param int $discount
     * @return Format
     */
    public function setDiscount(int $discount): Format
    {
        $this->discount = $discount;

        return $this;
    }

    /**
     * @return bool
     */
    public function isPublic(): ?bool
    {
        return $this->public;
    }

    /**
     * @param bool $public
     *
     * @return Format
     */
    public function setPublic(bool $public): Format
    {
        $this->public = $public;

        return $this;
    }

    /**
     * @return bool
     */
    public function hasFixedPrice(): ?bool
    {
        return $this->fixedPrice;
    }

    /**
     * @param bool $fixedPrice
     *
     * @return Format
     */
    public function setFixedPrice(bool $fixedPrice): Format
    {
        $this->fixedPrice = $fixedPrice;

        return $this;
    }
}
