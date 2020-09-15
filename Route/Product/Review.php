<?php

namespace monsieurgourmand\Bundle\InterfaceBundle\Route\Product;

use monsieurgourmand\Bundle\InterfaceBundle\Model\Product;
use monsieurgourmand\Bundle\InterfaceBundle\Model\ProductReview;
use monsieurgourmand\Bundle\InterfaceBundle\Service\MGD;

/**
 * Class Review
 *
 * @author Alice Dahan <alice@monsieurgourmand.com>
 */
class Review
{
    private $entity;
    private $url;
    private $master;

    /**
     * Review constructor.
     *
     * @param Product $product
     */
    public function __construct(Product $product)
    {
        $this->master = $product->getMaster();
        $this->entity = ProductReview::class;
        $this->url = "/products/" . $product->getIdProduct() . "/reviews";
    }

    /**
     * @param int $id
     * @param string $format
     * @return ProductReview
     */
    public function get(int $id, $format = MGD::FORMAT_OBJECT): ?ProductReview
    {
        return $this->master->get($this->url, $id, $this->entity, $format);
    }

    /**
     * @param ProductReview $productReview
     * @param string $format
     * @return ProductReview
     */
    public function post(ProductReview $productReview, $format = MGD::FORMAT_OBJECT): ProductReview
    {
        return $this->master->post($this->url, $productReview, $this->entity, $format);
    }

    /**
     * @param ProductReview $productReview
     * @param string $format
     * @return ProductReview
     */
    public function put(ProductReview $productReview, $format = MGD::FORMAT_OBJECT): ProductReview
    {
        return $this->master->put($this->url, $productReview->getId(), $productReview, $this->entity, $format);
    }
}
