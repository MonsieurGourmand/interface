<?php

namespace monsieurgourmand\Bundle\InterfaceBundle\Model;

use DateTime;

class Supplier extends Master
{
    /**
     * @var integer
     */
    private $idSupplier;

    /**
     * @var string
     */
    private $name;

    /**
     * @var string
     */
    private $postageDetail;

    /**
     * @var string
     */
    private $comment;

    /**
     * @var float
     */
    private $postagePaid;

    /**
     * @var float
     */
    private $deliveryCharge;

    /**
     * @var float
     */
    private $billingCosts;

    /**
     * @var string
     */
    private $reference;

    /**
     * @var array
     */
    private $deliveryDays;

    /**
     * @var string
     */
    private $deliveryTime;

    /**
     * @var string
     */
    private $paymentCondition;

    /**
     * @var string
     */
    private $customerReference;

    /**
     * @var Document
     */
    private $logo;

    /**
     * @var string
     */
    private $shortDescription;

    /**
     * @var string
     */
    private $longDescription;

    /**
     * @var string
     */
    private $contactEmail;

    /**
     * @var string
     */
    private $websiteUrl;

    /**
     * @var SupplierPicture[]
     */
    private $pictures;

    /**
     * @var string
     */
    private $videoUrl;

    /**
     * @var DateTime
     */
    private $sendingTime;

    /**
     * @var bool
     */
    private $marketplace;

    /**
     * @var bool
     */
    private $premium;

    /**
     * @var SupplierCertification[]
     */
    private $certifications;

    /**
     * @var Accounting
     */
    private $accounting;

    /**
     * @var \monsieurgourmand\Bundle\InterfaceBundle\Route\Supplier\User
     */
    public $users;

    /**
     * @var \monsieurgourmand\Bundle\InterfaceBundle\Route\Supplier\Product
     */
    public $products;

    /**
     * @var \monsieurgourmand\Bundle\InterfaceBundle\Route\Supplier\EventProduct
     */
    public $eventProducts;

    /**
     * @var \monsieurgourmand\Bundle\InterfaceBundle\Route\Supplier\Event
     */
    public $events;

    /**
     * @var \monsieurgourmand\Bundle\InterfaceBundle\Route\Supplier\Picture
     */
    public $supplierPictures;

    /**
     * @var \monsieurgourmand\Bundle\InterfaceBundle\Route\Supplier\SponsoredSales
     */
    public $sponsoredSales;

    /**
     * @var \monsieurgourmand\Bundle\InterfaceBundle\Route\Supplier\SponsoredUsers
     */
    public $sponsoredUsers;

    /**
     * @var \monsieurgourmand\Bundle\InterfaceBundle\Route\Supplier\Certification
     */
    public $supplierCertifications;

    /**
     * @var \monsieurgourmand\Bundle\InterfaceBundle\Route\Supplier\Accounting
     */
    public $accountingRoute;

    /**
     * @var \monsieurgourmand\Bundle\InterfaceBundle\Route\Supplier\AccountingContact
     */
    public $accountingContact;

    /**
     * @return int
     */
    public function getIdSupplier()
    {
        return $this->idSupplier;
    }

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param string $name
     * @return Supplier
     */
    public function setName($name)
    {
        $this->name = $name;
        return $this;
    }

    /**
     * @return string
     */
    public function getComment()
    {
        return $this->comment;
    }

    /**
     * @param string $comment
     * @return Supplier
     */
    public function setComment($comment)
    {
        $this->comment = $comment;
        return $this;
    }

    /**
     * @return float
     */
    public function getPostagePaid()
    {
        return $this->postagePaid;
    }

    /**
     * @param float $postagePaid
     * @return Supplier
     */
    public function setPostagePaid($postagePaid)
    {
        $this->postagePaid = $postagePaid;
        return $this;
    }

    /**
     * @return float
     */
    public function getDeliveryCharge()
    {
        return $this->deliveryCharge;
    }

    /**
     * @param float $deliveryCharge
     * @return Supplier
     */
    public function setDeliveryCharge($deliveryCharge)
    {
        $this->deliveryCharge = $deliveryCharge;
        return $this;
    }

    /**
     * @return float
     */
    public function getBillingCosts()
    {
        return $this->billingCosts;
    }

    /**
     * @param float $billingCosts
     * @return Supplier
     */
    public function setBillingCosts($billingCosts)
    {
        $this->billingCosts = $billingCosts;
        return $this;
    }

    /**
     * @return string
     */
    public function getReference()
    {
        return $this->reference;
    }

    /**
     * @param string $reference
     * @return Supplier
     */
    public function setReference($reference)
    {
        $this->reference = $reference;
        return $this;
    }

    /**
     * @return array
     */
    public function getDeliveryDays()
    {
        return $this->deliveryDays;
    }

    /**
     * @param array $deliveryDays
     * @return Supplier
     */
    public function setDeliveryDays($deliveryDays)
    {
        $this->deliveryDays = $deliveryDays;
        return $this;
    }

    /**
     * @return string
     */
    public function getDeliveryTime()
    {
        return $this->deliveryTime;
    }

    /**
     * @param string $deliveryTime
     * @return Supplier
     */
    public function setDeliveryTime($deliveryTime)
    {
        $this->deliveryTime = $deliveryTime;
        return $this;
    }

    /**
     * @return string
     */
    public function getPaymentCondition()
    {
        return $this->paymentCondition;
    }

    /**
     * @param string $paymentCondition
     * @return Supplier
     */
    public function setPaymentCondition($paymentCondition)
    {
        $this->paymentCondition = $paymentCondition;
        return $this;
    }

    /**
     * @return string
     */
    public function getCustomerReference()
    {
        return $this->customerReference;
    }

    /**
     * @param string $customerReference
     * @return Supplier
     */
    public function setCustomerReference($customerReference)
    {
        $this->customerReference = $customerReference;
        return $this;
    }

    /**
     * @return string
     */
    public function getPostageDetail()
    {
        return $this->postageDetail;
    }

    /**
     * @param string $postageDetail
     * @return Supplier
     */
    public function setPostageDetail($postageDetail)
    {
        $this->postageDetail = $postageDetail;
        return $this;
    }

    /**
     * @return DateTime
     */
    public function getSendingTime()
    {
        return $this->sendingTime;
    }

    /**
     * @param DateTime $sendingTime
     * @return Supplier
     */
    public function setSendingTime($sendingTime)
    {
        $this->sendingTime = $sendingTime;
        return $this;
    }

    /**
     * @return Document
     */
    public function getLogo(): ?Document
    {
        return $this->logo;
    }

    /**
     * @param Document $logo
     *
     * @return Supplier
     */
    public function setLogo(Document $logo): Supplier
    {
        $this->logo = $logo;
        return $this;
    }

    /**
     * @return string
     */
    public function getShortDescription(): ?string
    {
        return $this->shortDescription;
    }

    /**
     * @param string $shortDescription
     *
     * @return Supplier
     */
    public function setShortDescription(string $shortDescription): Supplier
    {
        $this->shortDescription = $shortDescription;
        return $this;
    }

    /**
     * @return string
     */
    public function getLongDescription(): ?string
    {
        return $this->longDescription;
    }

    /**
     * @param string $longDescription
     *
     * @return Supplier
     */
    public function setLongDescription(string $longDescription): Supplier
    {
        $this->longDescription = $longDescription;
        return $this;
    }

    /**
     * @return string
     */
    public function getContactEmail(): ?string
    {
        return $this->contactEmail;
    }

    /**
     * @param string $contactEmail
     *
     * @return Supplier
     */
    public function setContactEmail(string $contactEmail): Supplier
    {
        $this->contactEmail = $contactEmail;
        return $this;
    }

    /**
     * @return string
     */
    public function getWebsiteUrl(): ?string
    {
        return $this->websiteUrl;
    }

    /**
     * @param string $websiteUrl
     *
     * @return Supplier
     */
    public function setWebsiteUrl(string $websiteUrl): Supplier
    {
        $this->websiteUrl = $websiteUrl;
        return $this;
    }

    /**
     * @return SupplierPicture[]
     */
    public function getPictures(): ?array
    {
        return $this->pictures;
    }

    /**
     * @param SupplierPicture[] $pictures
     *
     * @return Supplier
     */
    public function setPictures(array $pictures): Supplier
    {
        $this->pictures = $pictures;
        return $this;
    }

    /**
     * @return string
     */
    public function getVideoUrl(): ?string
    {
        return $this->videoUrl;
    }

    /**
     * @param string $videoUrl
     *
     * @return Supplier
     */
    public function setVideoUrl(string $videoUrl): Supplier
    {
        $this->videoUrl = $videoUrl;
        return $this;
    }

    /**
     * @return bool
     */
    public function isMarketplace(): ?bool
    {
        return $this->marketplace;
    }

    /**
     * @param bool $marketplace
     *
     * @return Supplier
     */
    public function setMarketplace(bool $marketplace): Supplier
    {
        $this->marketplace = $marketplace;
        return $this;
    }

    /**
     * @return bool
     */
    public function isPremium(): ?bool
    {
        return $this->premium;
    }

    /**
     * @param bool $premium
     *
     * @return Supplier
     */
    public function setPremium(bool $premium): Supplier
    {
        $this->premium = $premium;
        return $this;
    }

    /**
     * @return SupplierCertification[]
     */
    public function getCertifications(): ?array
    {
        return $this->certifications;
    }

    /**
     * @param SupplierCertification[] $certifications
     *
     * @return Supplier
     */
    public function setCertifications(array $certifications): Supplier
    {
        $this->certifications = $certifications;

        return $this;
    }

    /**
     * @return Accounting
     */
    public function getAccounting(): ?Accounting
    {
        return $this->accounting;
    }

    /**
     * @param Accounting $accounting
     *
     * @return Supplier
     */
    public function setAccounting(Accounting $accounting): Supplier
    {
        $this->accounting = $accounting;

        return $this;
    }
}
