<?php

namespace monsieurgourmand\Bundle\InterfaceBundle\Model;

/**
 * Class ProductCoupon
 */
class ProductCoupon extends Coupon
{
    /**
     * @var Product
     */
    private $product;

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
     * @return ProductCoupon
     */
    public function setProduct(Product $product): ProductCoupon
    {
        $this->product = $product;

        return $this;
    }
}
