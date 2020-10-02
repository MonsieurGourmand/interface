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
     * @Assert\Positive()
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
     *     "(!value and !this.getStartDate()) or this.getStartDate() <= value",
     *     message="La date de fin de validité doit être supérieure ou égale à la date de début."
     * )
     */
    private $endDate;

    /**
     * @var bool
     */
    private $active;

    /**
     * Array of emails for which the Coupon will be reserved
     * In POST request, emails must be a string of comma-separated emails
     *
     * @var array
     *
     * @Assert\Type('array')
     * @Assert\All([
     *     @Assert\Email(),
     * ])
     */
    private $emails;

    /**
     * Coupon constructor.
     */
    public function __construct()
    {
        $this->emails = [];
    }

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
     * @return array
     */
    public function getEmails(): ?array
    {
        return $this->emails;
    }

    /**
     * @param array $emails
     *
     * @return Coupon
     */
    public function setEmails(array $emails): Coupon
    {
        $this->emails = $emails;

        return $this;
    }
}
