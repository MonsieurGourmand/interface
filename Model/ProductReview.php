<?php

namespace monsieurgourmand\Bundle\InterfaceBundle\Model;

use DateTime;

/**
 * Class ProductReview
 */
class ProductReview extends Master
{
    /** @var int */
    private $id;

    /** @var Product */
    private $product;

    /** @var int */
    private $grade;

    /** @var string */
    private $comment;

    /** @var DateTime */
    private $createdAt;

    /** @var User */
    private $author;

    /** @var Event */
    private $event;

    /**
     * @return int
     */
    public function getId(): ?int
    {
        return $this->id;
    }

    /**
     * @param int $id
     *
     * @return ProductReview
     */
    public function setId(int $id): ProductReview
    {
        $this->id = $id;

        return $this;
    }

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
     * @return ProductReview
     */
    public function setProduct(Product $product): ProductReview
    {
        $this->product = $product;

        return $this;
    }

    /**
     * @return int
     */
    public function getGrade(): ?int
    {
        return $this->grade;
    }

    /**
     * @param int $grade
     *
     * @return ProductReview
     */
    public function setGrade(int $grade): ProductReview
    {
        $this->grade = $grade;

        return $this;
    }

    /**
     * @return string
     */
    public function getComment(): ?string
    {
        return $this->comment;
    }

    /**
     * @param string $comment
     *
     * @return ProductReview
     */
    public function setComment(?string $comment): ProductReview
    {
        $this->comment = $comment;

        return $this;
    }

    /**
     * @return DateTime
     */
    public function getCreatedAt(): ?DateTime
    {
        return $this->createdAt;
    }

    /**
     * @param DateTime $createdAt
     *
     * @return ProductReview
     */
    public function setCreatedAt(DateTime $createdAt): ProductReview
    {
        $this->createdAt = $createdAt;

        return $this;
    }

    /**
     * @return User
     */
    public function getAuthor(): ?User
    {
        return $this->author;
    }

    /**
     * @param User $author
     *
     * @return ProductReview
     */
    public function setAuthor(User $author): ProductReview
    {
        $this->author = $author;

        return $this;
    }

    /**
     * @return Event
     */
    public function getEvent(): ?Event
    {
        return $this->event;
    }

    /**
     * @param Event $event
     *
     * @return ProductReview
     */
    public function setEvent(Event $event): ProductReview
    {
        $this->event = $event;

        return $this;
    }
}
