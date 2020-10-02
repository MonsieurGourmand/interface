<?php

namespace monsieurgourmand\Bundle\InterfaceBundle\Route\Product;

use monsieurgourmand\Bundle\InterfaceBundle\Model\Product;
use monsieurgourmand\Bundle\InterfaceBundle\Model\ProductCoupon;
use monsieurgourmand\Bundle\InterfaceBundle\Service\MGD;

/**
 * Class Coupon
 *
 * @author Alice Dahan <alice@monsieurgourmand.com>
 */
class Coupon
{
    /** @var string */
    private $entity;
    /** @var string */
    private $url;
    /** @var MGD */
    private $master;

    /**
     * Coupon constructor.
     *
     * @param Product $product
     */
    public function __construct(Product $product)
    {
        $this->master = $product->getMaster();
        $this->entity = ProductCoupon::class;
        $this->url = "/products/" . $product->getIdProduct() . "/coupons";
    }

    /**
     * @param array $params
     * @param string $format
     * @return ProductCoupon[]
     */
    public function getAll(array $params = [], $format = MGD::FORMAT_OBJECT): array
    {
        return $this->master->getAll($this->url, $this->entity, $params, $format);
    }

    /**
     * @param int $id
     * @param array $params
     * @param string $format
     * @return ProductCoupon
     */
    public function get(int $id, array $params = [], $format = MGD::FORMAT_OBJECT): ?ProductCoupon
    {
        return $this->master->get($this->url, $id, $this->entity, $format, $params);
    }

    /**
     * @param ProductCoupon $productCoupon
     * @param string $format
     * @return ProductCoupon
     */
    public function post(ProductCoupon $productCoupon, $format = MGD::FORMAT_OBJECT): ProductCoupon
    {
        return $this->master->post($this->url, $productCoupon, $this->entity, $format);
    }

    /**
     * @param ProductCoupon $productCoupon
     * @param string $format
     * @return ProductCoupon
     */
    public function put(ProductCoupon $productCoupon, $format = MGD::FORMAT_OBJECT): ProductCoupon
    {
        return $this->master->put($this->url, $productCoupon->getId(), $productCoupon, $this->entity, $format);
    }
}
