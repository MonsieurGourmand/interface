<?php

namespace monsieurgourmand\Bundle\InterfaceBundle\Model;

class EventProduct extends Master
{
    /**
     * @var integer
     */
    private $idEventProduct;

    /**
     * @var Product
     */
    private $product;

    /**
     * @var integer
     */
    private $quantity;

    /**
     * @var Event
     */
    private $event;

    /**
     * @var integer
     */
    private $estimatedStock;

    /**
     * @var integer
     */
    private $grade;

    /**
     * @var integer
     */
    private $estimatedStockSend;

    /**
     * @var string
     */
    private $comment;

    /**
     * @var integer
     */
    private $transport;

    /**
     * @var integer
     */
    private $storage;

    /**
     * @return int
     */
    public function getIdEventProduct()
    {
        return $this->idEventProduct;
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
     * @return EventProduct
     */
    public function setProduct($product)
    {
        $this->product = $product;
        return $this;
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
     * @return EventProduct
     */
    public function setQuantity($quantity)
    {
        $this->quantity = $quantity;
        return $this;
    }

    /**
     * @return Event
     */
    public function getEvent()
    {
        return $this->event;
    }

    /**
     * @param Event $event
     * @return EventProduct
     */
    public function setEvent($event)
    {
        $this->event = $event;
        return $this;
    }

    /**
     * @return int
     */
    public function getEstimatedStock()
    {
        return $this->estimatedStock;
    }

    /**
     * @param int $estimatedStock
     * @return EventProduct
     */
    public function setEstimatedStock($estimatedStock)
    {
        $this->estimatedStock = $estimatedStock;
        return $this;
    }

    /**
     * @return int
     */
    public function getEstimatedStockSend()
    {
        return $this->estimatedStockSend;
    }

    /**
     * @param int $estimatedStockSend
     * @return EventProduct
     */
    public function setEstimatedStockSend($estimatedStockSend)
    {
        $this->estimatedStockSend = $estimatedStockSend;
        return $this;
    }

    /**
     * @param int $idEventProduct
     * @return EventProduct
     */
    public function setIdEventProduct($idEventProduct)
    {
        $this->idEventProduct = $idEventProduct;
        return $this;
    }

    /**
     * @return string
     */
    public function getComment()
    {
        return $this->comment;
    }

    /**
     * @param string $comment
     * @return EventProduct
     */
    public function setComment($comment)
    {
        $this->comment = $comment;
        return $this;
    }

    /**
     * @return int
     */
    public function getGrade()
    {
        return $this->grade;
    }

    /**
     * @param int $grade
     * @return EventProduct
     */
    public function setGrade($grade)
    {
        $this->grade = $grade;
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
     * @return EventProduct
     */
    public function setTransport($transport): EventProduct
    {
        $this->transport = $transport;
        return $this;
    }

    /**
     * @return int
     */
    public function getStorage(): ?int
    {
        return $this->storage;
    }

    /**
     * @param int $storage
     * @return EventProduct
     */
    public function setStorage($storage): EventProduct
    {
        $this->storage = $storage;
        return $this;
    }
}
