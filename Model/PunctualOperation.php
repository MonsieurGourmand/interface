<?php

namespace monsieurgourmand\Bundle\InterfaceBundle\Model;

use DateTime;

class PunctualOperation extends Operation
{
    /** @var integer */
    private $shippingCode;

    /** @var string */
    private $deliveryReference;

    /** @var DateTime */
    private $deliveryDate;

    /** @var DateTime */
    private $preparationDate;

    /** @var DateTime */
    private $shippingDate;

    /** @var DateTime */
    private $collectDate;

    /** @var DateTime */
    private $recall;

    /** @var DateTime */
    private $eventDate;

    /** @var Kit */
    private $format;

    /** @var Kit[] */
    private $options;

    /** @var integer */
    private $pax;

    /** @var float */
    private $sellingPrice;

    /** @var boolean */
    private $free;

    /** @var Cause */
    private $cause;

    /** @var integer */
    private $saltPax;

    /** @var integer */
    private $sugarPax;

    /** @var integer */
    private $quoteNumber;

    /**
     * @return int
     */
    public function getShippingCode(): ?int
    {
        return $this->shippingCode;
    }

    /**
     * @param int $shippingCode
     * @return PunctualOperation
     */
    public function setShippingCode(int $shippingCode): PunctualOperation
    {
        $this->shippingCode = $shippingCode;
        return $this;
    }

    /**
     * @return string
     */
    public function getDeliveryReference(): ?string
    {
        return $this->deliveryReference;
    }

    /**
     * @param string $deliveryReference
     * @return PunctualOperation
     */
    public function setDeliveryReference(string $deliveryReference): PunctualOperation
    {
        $this->deliveryReference = $deliveryReference;
        return $this;
    }

    /**
     * @return DateTime
     */
    public function getDeliveryDate(): ?DateTime
    {
        return $this->deliveryDate;
    }

    /**
     * @param DateTime $deliveryDate
     * @return PunctualOperation
     */
    public function setDeliveryDate(DateTime $deliveryDate): PunctualOperation
    {
        $this->deliveryDate = $deliveryDate;
        return $this;
    }

    /**
     * @return DateTime
     */
    public function getPreparationDate(): ?DateTime
    {
        return $this->preparationDate;
    }

    /**
     * @param DateTime $preparationDate
     * @return PunctualOperation
     */
    public function setPreparationDate(DateTime $preparationDate): PunctualOperation
    {
        $this->preparationDate = $preparationDate;
        return $this;
    }

    /**
     * @return DateTime
     */
    public function getShippingDate(): ?DateTime
    {
        return $this->shippingDate;
    }

    /**
     * @param DateTime $shippingDate
     * @return PunctualOperation
     */
    public function setShippingDate(DateTime $shippingDate): PunctualOperation
    {
        $this->shippingDate = $shippingDate;
        return $this;
    }

    /**
     * @return DateTime
     */
    public function getCollectDate(): ?DateTime
    {
        return $this->collectDate;
    }

    /**
     * @param DateTime $collectDate
     * @return PunctualOperation
     */
    public function setCollectDate(DateTime $collectDate): PunctualOperation
    {
        $this->collectDate = $collectDate;
        return $this;
    }

    /**
     * @return DateTime
     */
    public function getRecall(): ?DateTime
    {
        return $this->recall;
    }

    /**
     * @param DateTime $recall
     * @return PunctualOperation
     */
    public function setRecall(DateTime $recall): PunctualOperation
    {
        $this->recall = $recall;
        return $this;
    }

    /**
     * @return DateTime
     */
    public function getEventDate(): ?DateTime
    {
        return $this->eventDate;
    }

    /**
     * @param DateTime $eventDate
     * @return PunctualOperation
     */
    public function setEventDate(DateTime $eventDate): PunctualOperation
    {
        $this->eventDate = $eventDate;
        return $this;
    }

    /**
     * @return Kit
     */
    public function getFormat(): ?Kit
    {
        return $this->format;
    }

    /**
     * @param Kit $format
     * @return PunctualOperation
     */
    public function setFormat(Kit $format): PunctualOperation
    {
        $this->format = $format;
        return $this;
    }

    /**
     * @return Kit[]
     */
    public function getOptions(): array
    {
        return $this->options;
    }

    /**
     * @param Kit[] $options
     * @return PunctualOperation
     */
    public function setOptions(array $options): PunctualOperation
    {
        $this->options = $options;
        return $this;
    }

    /**
     * @return int
     */
    public function getPax(): ?int
    {
        return $this->pax;
    }

    /**
     * @param int $pax
     * @return PunctualOperation
     */
    public function setPax(int $pax): PunctualOperation
    {
        $this->pax = $pax;
        return $this;
    }

    /**
     * @return float
     */
    public function getSellingPrice(): ?float
    {
        return $this->sellingPrice;
    }

    /**
     * @param float $sellingPrice
     * @return PunctualOperation
     */
    public function setSellingPrice(float $sellingPrice): PunctualOperation
    {
        $this->sellingPrice = $sellingPrice;
        return $this;
    }

    /**
     * @return bool
     */
    public function isFree(): ?bool
    {
        return $this->free;
    }

    /**
     * @param bool $free
     * @return PunctualOperation
     */
    public function setFree(bool $free): PunctualOperation
    {
        $this->free = $free;
        return $this;
    }

    /**
     * @return Cause
     */
    public function getCause(): ?Cause
    {
        return $this->cause;
    }

    /**
     * @param Cause $cause
     * @return PunctualOperation
     */
    public function setCause(Cause $cause): PunctualOperation
    {
        $this->cause = $cause;
        return $this;
    }

    /**
     * @return int
     */
    public function getSaltPax(): ?int
    {
        return $this->saltPax;
    }

    /**
     * @param int $saltPax
     * @return PunctualOperation
     */
    public function setSaltPax(int $saltPax): PunctualOperation
    {
        $this->saltPax = $saltPax;
        return $this;
    }

    /**
     * @return int
     */
    public function getSugarPax(): ?int
    {
        return $this->sugarPax;
    }

    /**
     * @param int $sugarPax
     * @return PunctualOperation
     */
    public function setSugarPax(int $sugarPax): PunctualOperation
    {
        $this->sugarPax = $sugarPax;
        return $this;
    }

    /**
     * @return int
     */
    public function getQuoteNumber(): ?int
    {
        return $this->quoteNumber;
    }

    /**
     * @param int $quoteNumber
     * @return PunctualOperation
     */
    public function setQuoteNumber(int $quoteNumber): PunctualOperation
    {
        $this->quoteNumber = $quoteNumber;
        return $this;
    }
}
