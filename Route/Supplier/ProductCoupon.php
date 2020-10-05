<?php

namespace monsieurgourmand\Bundle\InterfaceBundle\Route\Supplier;

use monsieurgourmand\Bundle\InterfaceBundle\Model\Supplier;
use monsieurgourmand\Bundle\InterfaceBundle\Model\ProductCoupon as ProductCouponModel;
use monsieurgourmand\Bundle\InterfaceBundle\Service\MGD;

/**
 * Class ProductCoupon
 *
 * @author Alice Dahan <alice@monsieurgourmand.com>
 */
class ProductCoupon
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
        $this->entity = ProductCouponModel::class;
        $this->url = "/suppliers/" . $supplier->getIdSupplier() . "/productcoupons";
    }

    /**
     * @param array $params
     * @param string $format
     * @return ProductCouponModel[]
     */
    public function getAll(array $params = [], $format = MGD::FORMAT_OBJECT): array
    {
        return $this->master->getAll($this->url, $this->entity, $params, $format);
    }
}
