<?php

namespace monsieurgourmand\Bundle\InterfaceBundle\Model;

use DateTime;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Class Coupon
 */
class Coupon extends Master
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var float
     *
     * @Assert\NotNull()
     * @Assert\GreaterThan(value = 0)
     */
    private $amount;

    /**
     * For a ProductCoupon : whether the Coupon applies only to the 1st unit of Product bought or to all units
     * For a SupplierCoupon : whether this Coupon can be used several times by the same User
     *
     * @var bool
     */
    private $singleUse;

    /**
     * @var DateTime|null
     */
    private $startDate;

    /**
     * @var DateTime|null
     *
     * @Assert\Expression(
     *     "((!value and !this.getStartDate())) or (this.getStartDate() and value)",
     *     message="Vous ne pouvez pas remplir qu'un seul des deux champs."
     * )
     * @Assert\Expression(
     *     "(!value or this.getStartDate() <= value)",
     *     message="La date de fin de validité doit être supérieure ou égale à la date de début."
     * )
     */
    private $endDate;

    /**
     * @var bool
     */
    private $active;

    /**
     * @var string|null
     */
    private $code;

    /**
     * @var bool
     */
    private $forAll;

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
     * @return Coupon
     */
    public function setId(int $id): Coupon
    {
        $this->id = $id;

        return $this;
    }

    /**
     * @return float
     */
    public function getAmount(): ?float
    {
        return $this->amount;
    }

    /**
     * @param float $amount
     *
     * @return Coupon
     */
    public function setAmount(float $amount): Coupon
    {
        $this->amount = $amount;

        return $this;
    }

    /**
     * @return bool
     */
    public function isSingleUse(): ?bool
    {
        return $this->singleUse;
    }

    /**
     * @param bool $singleUse
     *
     * @return Coupon
     */
    public function setSingleUse(bool $singleUse): Coupon
    {
        $this->singleUse = $singleUse;

        return $this;
    }

    /**
     * @return DateTime|null
     */
    public function getStartDate(): ?DateTime
    {
        return $this->startDate;
    }

    /**
     * @param DateTime|null $startDate
     *
     * @return Coupon
     */
    public function setStartDate(?DateTime $startDate): Coupon
    {
        $this->startDate = $startDate;

        return $this;
    }

    /**
     * @return DateTime|null
     */
    public function getEndDate(): ?DateTime
    {
        return $this->endDate;
    }

    /**
     * @param DateTime|null $endDate
     *
     * @return Coupon
     */
    public function setEndDate(?DateTime $endDate): Coupon
    {
        $this->endDate = $endDate;

        return $this;
    }

    /**
     * @return bool
     */
    public function isActive(): ?bool
    {
        return $this->active;
    }

    /**
     * @param bool $active
     *
     * @return Coupon
     */
    public function setActive(bool $active): Coupon
    {
        $this->active = $active;

        return $this;
    }

    /**
     * @return string
     */
    public function getCode(): ?string
    {
        return $this->code;
    }

    /**
     * @param string $code
     *
     * @return Coupon
     */
    public function setCode(?string $code): Coupon
    {
        $this->code = $code;

        return $this;
    }

    /**
     * @return bool
     */
    public function isForAll(): ?bool
    {
        return $this->forAll;
    }

    /**
     * @param bool $forAll
     *
     * @return Coupon
     */
    public function setForAll(bool $forAll): Coupon
    {
        $this->forAll = $forAll;

        return $this;
    }
}
