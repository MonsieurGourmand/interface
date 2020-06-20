<?php

namespace monsieurgourmand\Bundle\InterfaceBundle\Model;

/**
 * Class ProductReview
 */
class ProductReview
{
    /** @var int */
    private $productId;

    /** @var Review[] */
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
     * @return ProductReview
     */
    public function setProductId(int $productId): ProductReview
    {
        $this->productId = $productId;
        return $this;
    }

    /**
     * @return Review[]
     */
    public function getReviews(): ?array
    {
        return $this->reviews;
    }

    /**
     * @param Review[] $reviews
     *
     * @return ProductReview
     */
    public function setReviews(array $reviews): ProductReview
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
     * @return ProductReview
     */
    public function setAverageGrade(float $averageGrade): ProductReview
    {
        $this->averageGrade = $averageGrade;
        return $this;
    }
}
