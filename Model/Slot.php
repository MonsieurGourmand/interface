<?php

namespace monsieurgourmand\Bundle\InterfaceBundle\Model;

use DateTime;


class Slot
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var string
     */
    private $serviceCode;

    /**
     * @var string
     */
    private $productCode;

    /**
     * @var string
     */
    private $startHour;

    /**
     * @var string
     */
    private $endHour;

    /**
     * @var DateTime
     */
    private $date;

    /**
     * @var string
     */
    private $transactionId;

    /**
     * @var string
     */
    private $slotCode;

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @return string
     */
    public function getServiceCode(): string
    {
        return $this->serviceCode;
    }

    /**
     * @param string $serviceCode
     * @return Slot
     */
    public function setServiceCode(string $serviceCode): Slot
    {
        $this->serviceCode = $serviceCode;
        return $this;
    }

    /**
     * @return string
     */
    public function getProductCode(): string
    {
        return $this->productCode;
    }

    /**
     * @param string $productCode
     * @return Slot
     */
    public function setProductCode(string $productCode): Slot
    {
        $this->productCode = $productCode;
        return $this;
    }

    /**
     * @return string
     */
    public function getStartHour(): string
    {
        return $this->startHour;
    }

    /**
     * @param string $startHour
     * @return Slot
     */
    public function setStartHour(string $startHour): Slot
    {
        $this->startHour = $startHour;
        return $this;
    }

    /**
     * @return string
     */
    public function getEndHour(): string
    {
        return $this->endHour;
    }

    /**
     * @param string $endHour
     * @return Slot
     */
    public function setEndHour(string $endHour): Slot
    {
        $this->endHour = $endHour;
        return $this;
    }

    /**
     * @return DateTime
     */
    public function getDate(): DateTime
    {
        return $this->date;
    }

    /**
     * @param DateTime $date
     * @return Slot
     */
    public function setDate(DateTime $date): Slot
    {
        $this->date = $date;
        return $this;
    }

    /**
     * @return string
     */
    public function getTransactionId(): string
    {
        return $this->transactionId;
    }

    /**
     * @param string $transactionId
     * @return Slot
     */
    public function setTransactionId(string $transactionId): Slot
    {
        $this->transactionId = $transactionId;
        return $this;
    }

    /**
     * @return string
     */
    public function getSlotCode(): string
    {
        return $this->slotCode;
    }

    /**
     * @param string $slotCode
     * @return Slot
     */
    public function setSlotCode(string $slotCode): Slot
    {
        $this->slotCode = $slotCode;
        return $this;
    }
}
