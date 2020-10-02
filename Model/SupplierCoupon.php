<?php

namespace monsieurgourmand\Bundle\InterfaceBundle\Model;

/**
 * Class SupplierCoupon
 */
class SupplierCoupon extends Coupon
{
    /**
     * @var Supplier
     */
    private $supplier;

    /**
     * @var float
     *
     * @Assert\NotNull()
     * @Assert\Positive()
     */
    private $minAmount;

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
     * @return SupplierCoupon
     */
    public function setSupplier(Supplier $supplier): SupplierCoupon
    {
        $this->supplier = $supplier;

        return $this;
    }

    /**
     * @return float
     */
    public function getMinAmount(): ?float
    {
        return $this->minAmount;
    }

    /**
     * @param float $minAmount
     *
     * @return SupplierCoupon
     */
    public function setMinAmount(float $minAmount): SupplierCoupon
    {
        $this->minAmount = $minAmount;

        return $this;
    }
}
