<?php

namespace monsieurgourmand\Bundle\InterfaceBundle\Route\Supplier;

use monsieurgourmand\Bundle\InterfaceBundle\Model\Supplier;
use monsieurgourmand\Bundle\InterfaceBundle\Model\SupplierCoupon;
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
     * @param Supplier $supplier
     */
    public function __construct(Supplier $supplier)
    {
        $this->master = $supplier->getMaster();
        $this->entity = SupplierCoupon::class;
        $this->url = "/suppliers/" . $supplier->getIdSupplier() . "/coupons";
    }

    /**
     * @param array $params
     * @param string $format
     * @return SupplierCoupon[]
     */
    public function getAll(array $params = [], $format = MGD::FORMAT_OBJECT): array
    {
        return $this->master->getAll($this->url, $this->entity, $params, $format);
    }

    /**
     * @param int $id
     * @param array $params
     * @param string $format
     * @return SupplierCoupon
     */
    public function get(int $id, array $params = [], $format = MGD::FORMAT_OBJECT): ?SupplierCoupon
    {
        return $this->master->get($this->url, $id, $this->entity, $format, $params);
    }

    /**
     * @param SupplierCoupon $productCoupon
     * @param string $format
     * @return SupplierCoupon
     */
    public function post(SupplierCoupon $productCoupon, $format = MGD::FORMAT_OBJECT): SupplierCoupon
    {
        return $this->master->post($this->url, $productCoupon, $this->entity, $format);
    }

    /**
     * @param SupplierCoupon $productCoupon
     * @param string $format
     * @return SupplierCoupon
     */
    public function put(SupplierCoupon $productCoupon, $format = MGD::FORMAT_OBJECT): SupplierCoupon
    {
        return $this->master->put($this->url, $productCoupon->getId(), $productCoupon, $this->entity, $format);
    }
}
