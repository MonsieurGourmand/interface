<?php

namespace monsieurgourmand\Bundle\InterfaceBundle\Model;

use DateTime;

class Flux extends Master
{
    /**
     * @var Stock
     */
    private $stock;

    /**
     * @var integer
     */
    private $id;

    /**
     * @var integer
     */
    private $incoming;

    /**
     * @var integer
     */
    private $outComing;

    /**
     * @var DateTime
     */
    private $created;

    /**
     * @var float
     */
    private $unitPrice;

    /**
     * @return Stock
     */
    public function getStock()
    {
        return $this->stock;
    }

    /**
     * @param Stock $stock
     */
    public function setStock($stock)
    {
        $this->stock = $stock;
    }

    /**
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @return int
     */
    public function getIncoming()
    {
        return $this->incoming;
    }

    /**
     * @param int $incoming
     */
    public function setIncoming($incoming)
    {
        $this->incoming = $incoming;
    }

    /**
     * @return int
     */
    public function getOutComing()
    {
        return $this->outComing;
    }

    /**
     * @param int $outComing
     */
    public function setOutComing($outComing)
    {
        $this->outComing = $outComing;
    }

    /**
     * @return DateTime
     */
    public function getCreated()
    {
        return $this->created;
    }

    /**
     * @param DateTime $created
     */
    public function setCreated($created)
    {
        $this->created = $created;
    }

    /**
     * @return float
     */
    public function getUnitPrice()
    {
        return $this->unitPrice;
    }

    /**
     * @param float $unitPrice
     * @return Flux
     */
    public function setUnitPrice($unitPrice)
    {
        $this->unitPrice = $unitPrice;
        return $this;
    }
}
