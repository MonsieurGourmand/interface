<?php

namespace monsieurgourmand\Bundle\InterfaceBundle\Model;



use monsieurgourmand\Bundle\InterfaceBundle\Interfaces\StockInterface;

class Stock extends Master implements StockInterface
{
    /**
     * @var Product
     */
    private $product;

    /**
     * @var \DateTime
     */
    private $expirationDate;

    /**
     * @var integer
     */
    private $idStock;

    /**
     * @var integer
     */
    private $quantity;

    /**
     * @var integer
     */
    private $quantityExpired;

    /**
     * @var float
     */
    private $value;

    /**
     * @var \monsieurgourmand\Bundle\InterfaceBundle\Route\Stock\Flux
     */
    public $fluxes;

    /**
     * @var integer
     */
    private $type;

    /**
     * @return bool
     */
    public function isAlert()
    {
        return $this->alert;
    }

    /**
     * @var boolean
     */
    private $alert;

    /**
     * @return int
     */
    public function getQuantity()
    {
        return $this->quantity;
    }

    /**
     * @param int $quantity
     */
    public function setQuantity($quantity)
    {
        $this->quantity = $quantity;
    }

    /**
     * @return Product
     */
    public function getProduct()
    {
        return $this->product;
    }

    /**
     * @param Product $product
     */
    public function setProduct($product)
    {
        $this->product = $product;
    }

    /**
     * @return \DateTime
     */
    public function getExpirationDate()
    {
        return $this->expirationDate;
    }

    /**
     * @param \DateTime $expirationDate
     */
    public function setExpirationDate($expirationDate)
    {
        $this->expirationDate = $expirationDate;
    }

    /**
     * @return int
     */
    public function getIdStock()
    {
        return $this->idStock;
    }

    /**
     * @param int $idStock
     */
    public function setIdStock($idStock)
    {
        $this->idStock = $idStock;
    }

    /**
     * @return float
     */
    public function getValue()
    {
        return $this->value;
    }

    /**
     * @param float $value
     * @return Stock
     */
    public function setValue($value)
    {
        $this->value = $value;
        return $this;
    }

    /**
     * @return int
     */
    public function getQuantityExpired()
    {
        return $this->quantityExpired;
    }

    /**
     * @param int $quantityExpired
     * @return Stock
     */
    public function setQuantityExpired($quantityExpired)
    {
        $this->quantityExpired = $quantityExpired;
        return $this;
    }

    /**
     * @return int
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * @param int $type
     * @return Stock
     */
    public function setType($type)
    {
        $this->type = $type;
        return $this;
    }
}
