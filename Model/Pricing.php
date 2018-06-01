<?php

namespace monsieurgourmand\Bundle\InterfaceBundle\Model;

class Pricing extends Master
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var Format
     */
    private $format;

    /**
     * @var float
     */
    private $price;

    /**
     * @var Operation
     */
    private $operation;

    /**
     * @var float
     */
    private $discount;

    /**
     * @return float
     */
    public function getDiscount()
    {
        return $this->discount;
    }

    /**
     * @param float $discount
     * @return Pricing
     */
    public function setDiscount($discount)
    {
        $this->discount = $discount;
        return $this;
    }

    /**
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param int $id
     * @return Pricing
     */
    public function setId($id)
    {
        $this->id = $id;
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
     * @return Pricing
     */
    public function setPrice($price)
    {
        $this->price = $price;
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
     * @return Pricing
     */
    public function setFormat($format)
    {
        $this->format = $format;
        return $this;
    }

    /**
     * @return Operation
     */
    public function getOperation()
    {
        return $this->operation;
    }

    /**
     * @param Operation $operation
     * @return Pricing
     */
    public function setOperation($operation)
    {
        $this->operation = $operation;
        return $this;
    }


}
