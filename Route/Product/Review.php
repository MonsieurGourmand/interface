<?php

namespace monsieurgourmand\Bundle\InterfaceBundle\Route\Product;

use monsieurgourmand\Bundle\InterfaceBundle\Model\ProductReview as ProductReviewEntity;
use monsieurgourmand\Bundle\InterfaceBundle\Model\Product;
use monsieurgourmand\Bundle\InterfaceBundle\Service\MGD;

class Review
{
    /** @var MGD */
    private $master;

    /** @var string */
    private $entity;

    /** @var string */
    private $url;

    /**
     * Review constructor.
     * @param Product $product
     */
    public function __construct(Product $product)
    {
        $this->master = $product->getMaster();
        $this->entity = ProductReviewEntity::class;
        $this->url = "/products/" . $product->getIdProduct() . '/reviews';
    }

    /**
     * @param array $params
     * @param string $format
     *
     * @return ProductReviewEntity
     */
    public function getAll($params = [], string $format = MGD::FORMAT_OBJECT)
    {
        return $this->master->getAll($this->url, $this->entity, $params, $format);
    }
}
