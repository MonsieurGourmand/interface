<?php

namespace monsieurgourmand\Bundle\InterfaceBundle\Model;


use monsieurgourmand\Bundle\InterfaceBundle\Interfaces\PriceInterface;

class Price extends Master implements PriceInterface
{
    /**
     * @var integer
     */
    private $idPrice;

    /**
     * @var boolean
     */
    private $active;
    /**
     * @var integer
     */
    private $cost;

    /**
     * @var integer
     */
    private $baseCost;

    /**
     * @var integer
     */
    private $negotiate;

    /**
     * @var integer
     */
    private $baseNegotiate;
    /**
     * @var integer
     */
    private $vat;

    /**
     * @var \DateTime
     */
    private $startDate;

    /**
     * @var \DateTime
     */
    private $endDate;

    /**
     * @param int $idPrice
     * @return Price
     */
    public function setIdPrice($idPrice)
    {
        $this->idPrice = $idPrice;
        return $this;
    }

    /**
     * @return int
     */
    public function getIdPrice()
    {
        return $this->idPrice;
    }

    /**
     * @return bool
     */
    public function isActive()
    {
        return $this->active;
    }

    /**
     * @param bool $active
     * @return Price
     */
    public function setActive($active)
    {
        $this->active = $active;
        return $this;
    }

    /**
     * @return int
     */
    public function getCost()
    {
        return $this->cost;
    }

    /**
     * @param int $cost
     * @return Price
     */
    public function setCost($cost)
    {
        $this->cost = $cost;
        return $this;
    }

    /**
     * @return int
     */
    public function getBaseCost()
    {
        return $this->baseCost;
    }

    /**
     * @param int $baseCost
     * @return Price
     */
    public function setBaseCost($baseCost)
    {
        $this->baseCost = $baseCost;
        return $this;
    }

    /**
     * @return int
     */
    public function getNegotiate()
    {
        return $this->negotiate;
    }

    /**
     * @param int $negotiate
     * @return Price
     */
    public function setNegotiate($negotiate)
    {
        $this->negotiate = $negotiate;
        return $this;
    }

    /**
     * @return int
     */
    public function getBaseNegotiate()
    {
        return $this->baseNegotiate;
    }

    /**
     * @param int $baseNegotiate
     * @return Price
     */
    public function setBaseNegotiate($baseNegotiate)
    {
        $this->baseNegotiate = $baseNegotiate;
        return $this;
    }

    /**
     * @return int
     */
    public function getVat()
    {
        return $this->vat;
    }

    /**
     * @param int $vat
     * @return Price
     */
    public function setVat($vat)
    {
        $this->vat = $vat;
        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getStartDate()
    {
        return $this->startDate;
    }

    /**
     * @param \DateTime $startDate
     * @return Price
     */
    public function setStartDate($startDate)
    {
        $this->startDate = $startDate;
        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getEndDate()
    {
        return $this->endDate;
    }

    /**
     * @param \DateTime $endDate
     * @return Price
     */
    public function setEndDate($endDate)
    {
        $this->endDate = $endDate;
        return $this;
    }
}
