<?php

namespace monsieurgourmand\Bundle\InterfaceBundle\Model;

use DateTime;
use monsieurgourmand\Bundle\InterfaceBundle\Interfaces\PurchaseInterface;

class Purchase extends Master implements PurchaseInterface
{
    /**
     * @var integer
     */
    private $idPurchase;

    /**
     * @var string
     */
    private $place;

    /**
     * @var DateTime
     */
    private $orderDate;

    /**
     * @var DateTime
     */
    private $deliveryDate;

    /**
     * @var DateTime
     */
    private $sendDate;

    /**
     * @var string
     */
    private $comment;


    /**
     * @var integer
     */
    private $status;

    /**
     * @var string
     */
    private $step;

    /**
     * @var DateTime
     */
    private $updated;

    /**
     * @var float
     */
    private $deliveryCharge;

    /**
     * @var float
     */
    private $discount;

    /**
     * @var integer
     */
    private $discountType;

    /**
     * @var integer
     */
    private $type;

    /**
     * @var string
     */
    private $orderReference;

    /**
     * @var float
     */
    private $suggestDiscount;

    /**
     * @var integer
     */
    private $suggestDiscountType;

    /**
     * @var float
     */
    private $suggestDeliveryCharge;

    /**
     * @var float
     */
    private $total;

    /**
     * @var float
     */
    private $totalHT;

    /**
     * @var float
     */
    private $totalHTR;

    /**
     * @var float
     */
    private $totalVAT;

    /**
     * @var float
     */
    private $totalTax;

    /**
     * @var float
     */
    private $billingCosts;

    /**
     * @var Document
     */
    private $document;

    /**
     * @var Supplier
     */
    private $supplier;

    /**
     * @var User
     */
    private $leadUser;

    /** @var string */
    private $fproInvoice;

    /**
     * @var \monsieurgourmand\Bundle\InterfaceBundle\Route\Purchase\PurchaseProduct
     */
    public $purchaseProducts;

    /**
     * @var \monsieurgourmand\Bundle\InterfaceBundle\Route\Purchase\Channel
     */
    public $channels;

    /**
     * @return int
     */
    public function getIdPurchase(): ?int
    {
        return $this->idPurchase;
    }

    /**
     * @return string
     */
    public function getPlace(): ?string
    {
        return $this->place;
    }

    /**
     * @param string $place
     * @return Purchase
     */
    public function setPlace(string$place): Purchase
    {
        $this->place = $place;

        return $this;
    }

    /**
     * @return DateTime
     */
    public function getOrderDate(): ?DateTime
    {
        return $this->orderDate;
    }

    /**
     * @param DateTime $orderDate
     * @return Purchase
     */
    public function setOrderDate(DateTime$orderDate): Purchase
    {
        $this->orderDate = $orderDate;

        return $this;
    }

    /**
     * @return DateTime
     */
    public function getDeliveryDate(): ?DateTime
    {
        return $this->deliveryDate;
    }

    /**
     * @param DateTime $deliveryDate
     * @return Purchase
     */
    public function setDeliveryDate(DateTime$deliveryDate): Purchase
    {
        $this->deliveryDate = $deliveryDate;

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
     * @return Purchase
     */
    public function setComment(string$comment): Purchase
    {
        $this->comment = $comment;

        return $this;
    }

    /**
     * @return int
     */
    public function getStatus(): ?int
    {
        return $this->status;
    }

    /**
     * @param int $status
     * @return Purchase
     */
    public function setStatus(int $status): Purchase
    {
        $this->status = $status;

        return $this;
    }

    /**
     * @return string
     */
    public function getStep(): ?string
    {
        return $this->step;
    }

    /**
     * @param string $step
     * @return Purchase
     */
    public function setStep(string $step): Purchase
    {
        $this->step = $step;

        return $this;
    }

    /**
     * @return DateTime
     */
    public function getUpdated(): ?DateTime
    {
        return $this->updated;
    }

    /**
     * @param DateTime $updated
     * @return Purchase
     */
    public function setUpdated(DateTime $updated): Purchase
    {
        $this->updated = $updated;

        return $this;
    }

    /**
     * @return float
     */
    public function getDeliveryCharge(): ?float
    {
        return $this->deliveryCharge;
    }

    /**
     * @param float $deliveryCharge
     * @return Purchase
     */
    public function setDeliveryCharge(float $deliveryCharge): Purchase
    {
        $this->deliveryCharge = $deliveryCharge;

        return $this;
    }

    /**
     * @return float
     */
    public function getDiscount(): ?float
    {
        return $this->discount;
    }

    /**
     * @param float $discount
     * @return Purchase
     */
    public function setDiscount(float $discount): Purchase
    {
        $this->discount = $discount;

        return $this;
    }

    /**
     * @return int
     */
    public function getDiscountType(): ?int
    {
        return $this->discountType;
    }

    /**
     * @param int $discountType
     * @return Purchase
     */
    public function setDiscountType(int $discountType): Purchase
    {
        $this->discountType = $discountType;

        return $this;
    }

    /**
     * @return string
     */
    public function getOrderReference(): ?string
    {
        return $this->orderReference;
    }

    /**
     * @param string $orderReference
     * @return Purchase
     */
    public function setOrderReference(string $orderReference): Purchase
    {
        $this->orderReference = $orderReference;

        return $this;
    }

    /**
     * @return float
     */
    public function getSuggestDiscount(): ?float
    {
        return $this->suggestDiscount;
    }

    /**
     * @param float $suggestDiscount
     * @return Purchase
     */
    public function setSuggestDiscount(float $suggestDiscount): Purchase
    {
        $this->suggestDiscount = $suggestDiscount;

        return $this;
    }

    /**
     * @return int
     */
    public function getSuggestDiscountType(): ?int
    {
        return $this->suggestDiscountType;
    }

    /**
     * @param int $suggestDiscountType
     * @return Purchase
     */
    public function setSuggestDiscountType(int $suggestDiscountType): Purchase
    {
        $this->suggestDiscountType = $suggestDiscountType;

        return $this;
    }

    /**
     * @return float
     */
    public function getSuggestDeliveryCharge(): ?float
    {
        return $this->suggestDeliveryCharge;
    }

    /**
     * @param float $suggestDeliveryCharge
     * @return Purchase
     */
    public function setSuggestDeliveryCharge(float $suggestDeliveryCharge): Purchase
    {
        $this->suggestDeliveryCharge = $suggestDeliveryCharge;

        return $this;
    }

    /**
     * @return float
     */
    public function getTotal(): ?float
    {
        return $this->total;
    }

    /**
     * @param float $total
     * @return Purchase
     */
    public function setTotal(float $total): Purchase
    {
        $this->total = $total;

        return $this;
    }

    /**
     * @return float
     */
    public function getTotalHT(): ?float
    {
        return $this->totalHT;
    }

    /**
     * @param float $totalHT
     * @return Purchase
     */
    public function setTotalHT(float $totalHT): Purchase
    {
        $this->totalHT = $totalHT;

        return $this;
    }

    /**
     * @return float
     */
    public function getTotalHTR(): ?float
    {
        return $this->totalHTR;
    }

    /**
     * @param float $totalHTR
     * @return Purchase
     */
    public function setTotalHTR(float $totalHTR): Purchase
    {
        $this->totalHTR = $totalHTR;

        return $this;
    }

    /**
     * @return float
     */
    public function getTotalVAT(): ?float
    {
        return $this->totalVAT;
    }

    /**
     * @param float $totalVAT
     * @return Purchase
     */
    public function setTotalVAT(float $totalVAT): Purchase
    {
        $this->totalVAT = $totalVAT;

        return $this;
    }

    /**
     * @return float
     */
    public function getTotalTax(): ?float
    {
        return $this->totalTax;
    }

    /**
     * @param float $totalTax
     * @return Purchase
     */
    public function setTotalTax(float $totalTax): Purchase
    {
        $this->totalTax = $totalTax;

        return $this;
    }

    /**
     * @return float
     */
    public function getBillingCosts(): ?float
    {
        return $this->billingCosts;
    }

    /**
     * @param float $billingCosts
     * @return Purchase
     */
    public function setBillingCosts(float $billingCosts): Purchase
    {
        $this->billingCosts = $billingCosts;

        return $this;
    }

    /**
     * @return Document
     */
    public function getDocument(): ?Document
    {
        return $this->document;
    }

    /**
     * @param Document $document
     * @return Purchase
     */
    public function setDocument(Document $document): Purchase
    {
        $this->document = $document;

        return $this;
    }

    /**
     * @return Supplier
     */
    public function getSupplier(): ?Supplier
    {
        return $this->supplier;
    }

    /**
     * @param Supplier $supplier
     * @return Purchase
     */
    public function setSupplier(Supplier $supplier): Purchase
    {
        $this->supplier = $supplier;

        return $this;
    }

    /**
     * @return User
     */
    public function getLeadUser(): ?User
    {
        return $this->leadUser;
    }

    /**
     * @param User $leadUser
     * @return Purchase
     */
    public function setLeadUser(User $leadUser): Purchase
    {
        $this->leadUser = $leadUser;

        return $this;
    }

    /**
     * @return DateTime
     */
    public function getSendDate(): ?DateTime
    {
        return $this->sendDate;
    }

    /**
     * @param DateTime $sendDate
     * @return Purchase
     */
    public function setSendDate(DateTime $sendDate): Purchase
    {
        $this->sendDate = $sendDate;

        return $this;
    }

    /**
     * @return int
     */
    public function getType(): ?int
    {
        return $this->type;
    }

    /**
     * @param int $type
     * @return Purchase
     */
    public function setType(int $type): Purchase
    {
        $this->type = $type;

        return $this;
    }

    /**
     * @return string
     */
    public function getFproInvoice(): ?string
    {
        return $this->fproInvoice;
    }

    /**
     * @param string $fproInvoice
     *
     * @return Purchase
     */
    public function setFproInvoice(string $fproInvoice): Purchase
    {
        $this->fproInvoice = $fproInvoice;

        return $this;
    }
}
