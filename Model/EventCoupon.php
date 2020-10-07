<?php

namespace monsieurgourmand\Bundle\InterfaceBundle\Model;

/**
 * Class EventCoupon
 */
class EventCoupon extends Master
{
    /** @var int */
    private $id;

    /** @var float */
    private $amount;

    /** @var int */
    private $quantity;

    /** @var Event */
    private $event;

    /** @var ProductCoupon|SupplierCoupon */
    private $coupon;

    /** @var Supplier */
    private $supplier;

    /** @var Product */
    private $product;

    /**
     * @return int
     */
    public function getId(): ?int
    {
        return $this->id;
    }

    /**
     * @param int $id
     *
     * @return EventCoupon
     */
    public function setId(int $id): EventCoupon
    {
        $this->id = $id;

        return $this;
    }

    /**
     * @return float
     */
    public function getAmount(): ?float
    {
        return $this->amount;
    }

    /**
     * @param float $amount
     *
     * @return EventCoupon
     */
    public function setAmount(float $amount): EventCoupon
    {
        $this->amount = $amount;

        return $this;
    }

    /**
     * @return int
     */
    public function getQuantity(): ?int
    {
        return $this->quantity;
    }

    /**
     * @param int $quantity
     *
     * @return EventCoupon
     */
    public function setQuantity(int $quantity): EventCoupon
    {
        $this->quantity = $quantity;

        return $this;
    }

    /**
     * @return Event
     */
    public function getEvent(): ?Event
    {
        return $this->event;
    }

    /**
     * @param Event $event
     *
     * @return EventCoupon
     */
    public function setEvent(Event $event): EventCoupon
    {
        $this->event = $event;

        return $this;
    }

    /**
     * @return ProductCoupon|SupplierCoupon
     */
    public function getCoupon()
    {
        return $this->coupon;
    }

    /**
     * @param ProductCoupon|SupplierCoupon $coupon
     *
     * @return EventCoupon
     */
    public function setCoupon($coupon): EventCoupon
    {
        $this->coupon = $coupon;

        return $this;
    }

    /**
     * @return Supplier
     */
    public function getSupplier(): ?Supplier
    {
        return $this->supplier;
    }

    /**
     * @param Supplier $supplier
     *
     * @return EventCoupon
     */
    public function setSupplier(Supplier $supplier): EventCoupon
    {
        $this->supplier = $supplier;

        return $this;
    }

    /**
     * @return Product
     */
    public function getProduct(): ?Product
    {
        return $this->product;
    }

    /**
     * @param Product $product
     *
     * @return EventCoupon
     */
    public function setProduct(Product $product): EventCoupon
    {
        $this->product = $product;

        return $this;
    }
}
