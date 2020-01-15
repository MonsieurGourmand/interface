<?php

namespace monsieurgourmand\Bundle\InterfaceBundle\Model;

use DateTime;

class OperationMenu extends Master
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var Operation
     */
    private $operation;

    /**
     * @var Format
     */
    private $format;

    /**
     * @var float
     */
    private $price;

    /**
     * @var DateTime
     */
    private $startDate;

    /**
     * @var DateTime
     */
    private $endDate;

    /**
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @return Operation|null
     */
    public function getOperation(): ?Operation
    {
        return $this->operation;
    }

    /**
     * @param OperationMenu $operation
     * @return OperationMenu
     */
    public function setOperation(OperationMenu $operation): OperationMenu
    {
        $this->operation = $operation;
        return $this;
    }

    /**
     * @return Format
     */
    public function getFormat()
    {
        return $this->format;
    }

    /**
     * @param Format $format
     * @return OperationMenu
     */
    public function setFormat(Format $format): OperationMenu
    {
        $this->format = $format;
        return $this;
    }

    /**
     * @return float
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * @param float $price
     * @return OperationMenu
     */
    public function setPrice(float $price): OperationMenu
    {
        $this->price = $price;
        return $this;
    }

    /**
     * @return DateTime
     */
    public function getStartDate()
    {
        return $this->startDate;
    }

    /**
     * @param DateTime $startDate
     * @return OperationMenu
     */
    public function setStartDate(DateTime $startDate): OperationMenu
    {
        $this->startDate = $startDate;
        return $this;
    }

    /**
     * @return DateTime
     */
    public function getEndDate()
    {
        return $this->endDate;
    }

    /**
     * @param DateTime $endDate
     * @return OperationMenu
     */
    public function setEndDate(DateTime $endDate): OperationMenu
    {
        $this->endDate = $endDate;
        return $this;
    }
}
