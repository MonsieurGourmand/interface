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
     * ProductReviews constructor.
     */
    public function __construct()
    {
        $this->averageGrade = 0;
        $this->reviews = [];
    }

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
     * @return ProductReview[]
     */
    public function getReviews(): ?array
    {
        return $this->reviews;
    }

    /**
     * @param ProductReview[] $reviews
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
