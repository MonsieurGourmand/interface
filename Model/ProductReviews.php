<?php

namespace monsieurgourmand\Bundle\InterfaceBundle\Model;

/**
 * Class ProductReviews
 */
class ProductReviews extends Master
{
    /** @var int */
    private $productId;

    /** @var ProductReview[] */
    private $reviews;

    /** @var float */
    private $averageGrade;

    /**
     * @return int
     */
    public function getProductId(): ?int
    {
        return $this->productId;
    }

    /**
     * @param int $productId
     *
     * @return ProductReviews
     */
    public function setProductId(int $productId): ProductReviews
    {
        $this->productId = $productId;

        return $this;
    }

    /**
     * @return ProductReviews[]
     */
    public function getReviews(): ?array
    {
        return $this->reviews;
    }

    /**
     * @param ProductReviews[] $reviews
     *
     * @return ProductReviews
     */
    public function setReviews(array $reviews): ProductReviews
    {
        $this->reviews = $reviews;

        return $this;
    }

    /**
     * @return float
     */
    public function getAverageGrade(): ?float
    {
        return $this->averageGrade;
    }

    /**
     * @param float $averageGrade
     *
     * @return ProductReviews
     */
    public function setAverageGrade(float $averageGrade): ProductReviews
    {
        $this->averageGrade = $averageGrade;

        return $this;
    }
}
