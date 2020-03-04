<?php

namespace monsieurgourmand\Bundle\InterfaceBundle\Model;

use DateTime;
use monsieurgourmand\Bundle\InterfaceBundle\Interfaces\StockInterface;

class Stock extends Master implements StockInterface
{
    /**
     * @var integer
     */
    private $idStock;

    /**
     * @var Product
     */
    private $product;

    /**
     * @var DateTime
     */
    private $expirationDate;

    /**
     * @var integer
     */
    private $quantity;

    /**
     * @var float
     */
    private $value;

    /**
     * @var boolean
     */
    private $alert;

    /**
     * @var int
     */
    private $bookedQuantity;

    /**
     * @var int
     */
    private $pickedQuantity;

    /**
     * @var int
     */
    private $preparedQuantity;

    /**
     * @var int
     */
    private $availableQuantity;

    /**
     * @return bool
     */
    public function isAlert()
    {
        return $this->alert;
    }

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
     * @return DateTime
     */
    public function getExpirationDate()
    {
        return $this->expirationDate;
    }

    /**
     * @param DateTime $expirationDate
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
    public function getBookedQuantity(): ?int
    {
        return $this->bookedQuantity;
    }

    /**
     * @param int $bookedQuantity
     * @return Stock
     */
    public function setBookedQuantity(int $bookedQuantity): Stock
    {
        $this->bookedQuantity = $bookedQuantity;
        return $this;
    }

    /**
     * @return int
     */
    public function getPickedQuantity(): ?int
    {
        return $this->pickedQuantity;
    }

    /**
     * @param int $pickedQuantity
     * @return Stock
     */
    public function setPickedQuantity(int $pickedQuantity): Stock
    {
        $this->pickedQuantity = $pickedQuantity;
        return $this;
    }

    /**
     * @return int
     */
    public function getPreparedQuantity(): ?int
    {
        return $this->preparedQuantity;
    }

    /**
     * @param int $preparedQuantity
     * @return Stock
     */
    public function setPreparedQuantity(int $preparedQuantity): Stock
    {
        $this->preparedQuantity = $preparedQuantity;
        return $this;
    }

    /**
     * @return int
     */
    public function getAvailableQuantity(): ?int
    {
        return $this->availableQuantity;
    }

    /**
     * @param int $availableQuantity
     * @return Stock
     */
    public function setAvailableQuantity(int $availableQuantity): Stock
    {
        $this->availableQuantity = $availableQuantity;
        return $this;
    }
}
