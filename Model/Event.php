<?php

namespace monsieurgourmand\Bundle\InterfaceBundle\Model;

use monsieurgourmand\Bundle\InterfaceBundle\Interfaces\EventInterface;
use DateTime;

class Event extends Master implements EventInterface
{
    /**
     * @var integer
     */
    private $idEvent;

    /**
     * @var Place
     */
    private $place;

    /**
     * @var Place
     */
    private $shippingPlace;

    /**
     * @var string
     */
    private $reservationNumber;

    /**
     * @var integer
     */
    private $shippingCode;

    /**
     * @var string
     */
    private $deliveryReference;

    /**
     * @var DateTime
     */
    private $created;

    /**
     * @var DateTime
     */
    private $deliveryDate;

    /**
     * @var DateTime
     */
    private $preparationDate;

    /**
     * @var DateTime
     */
    private $shippingDate;

    /**
     * @var DateTime
     */
    private $collectDate;

    /**
     * @var DateTime
     */
    private $recall;

    /**
     * @var DateTime
     */
    private $eventDate;

    /**
     * @var integer
     */
    private $status = 0;

    /**
     * @var string
     */
    private $step;

    /**
     * @var DateTime
     */
    private $updated;

    /**
     * @var string
     */
    private $name;

    /**
     * @var User
     */
    private $supportUser;

    /**
     * @var Operation
     */
    private $operation;

    /**
     * @var Document
     */
    private $document;

    private $orderReference;

    private $lastEvent;

    /**
     * @var integer
     */
    private $transport;

    /**
     * @var integer
     */
    private $service;

    /**
     * @var integer
     */
    private $documents;

    /**
     * @var integer
     */
    private $tDefrost;

    /**
     * @var \monsieurgourmand\Bundle\InterfaceBundle\Route\Event\EventProduct
     */
    public $eventProducts;

    /**
     * @var \monsieurgourmand\Bundle\InterfaceBundle\Route\Event\EventDiscount
     */
    public $eventDiscounts;

    /**
     * @var \monsieurgourmand\Bundle\InterfaceBundle\Route\Event\EventMoment
     */
    public $eventMoments;

    /**
     * @var \monsieurgourmand\Bundle\InterfaceBundle\Route\Event\Amount
     */
    public $amounts;

    /**
     * @var \monsieurgourmand\Bundle\InterfaceBundle\Route\Event\Package
     */
    public $package;

    /**
     * @var \monsieurgourmand\Bundle\InterfaceBundle\Route\Event\Activity
     */
    public $activities;

    /**
     * @var \monsieurgourmand\Bundle\InterfaceBundle\Route\Event\AddKits
     */
    public $addKits;

    /**
     * @var \monsieurgourmand\Bundle\InterfaceBundle\Route\Event\Channel
     */
    public $channels;

    /**
     * @var Package[]
     */
    public $packages;

    /**
     * @var Kit
     */
    private $format;

    /**
     * @var boolean
     */
    private $stockTrouble;

    /**
     * @var integer
     */
    private $discount;

    /**
     * @var integer
     */
    private $singleUpdate;

    /**
     * @var integer
     */
    private $pax;

    /**
     * @var float
     */
    private $sellingPrice;

    /**
     * @var float
     */
    private $realSellingPrice;

    /**
     * @var boolean
     */
    private $free;

    /**
     * @var float
     */
    private $shippingFees;

    /**
     * @var Cause
     */
    private $cause;

    /**
     * @var integer
     */
    private $marketingStatus;

    /**
     * @var integer
     *
     */
    private $saltPax;

    /**
     * @var integer
     *
     */
    private $sugarPax;

    /**
     * @var integer
     *
     */
    private $quoteNumber;

    /**
     * @var integer
     *
     */
    private $type;

    /**
     * @var integer
     */
    private $grade;

    /**
     * @var integer
     */
    private $productsGrade;

    /**
     * @var integer
     */
    private $shippingGrade;

    /**
     * @var \monsieurgourmand\Bundle\InterfaceBundle\Route\Event\Quote
     */
    public $quotes;

    /**
     * @var User
     */
    private $eventContact;

    /**
     * @var User
     */
    private $logisticsManager;

    /**
     * @var User
     */
    private $shippingContact;

    /**
     * @var User
     */
    private $salesManager;

    /**
     * @var string
     */
    private $recipient;

    /**
     * @var \monsieurgourmand\Bundle\InterfaceBundle\Route\Event\AddPackages
     */
    public $addPackages;

    /**
     * @var bool
     */
    public $packed;

    /** @var float */
    private $supplierSales;

    /** @var float */
    private $totalSales;

    /** @var EventProduct[] */
    private $eventsProducts;

    /** @var User */
    private $creator;

    /** @var Billing */
    private $billing;

    /** @var PushEmail */
    private $reminder;

    /** @var PushEmail */
    private $shipped;

    /**
     * @var \monsieurgourmand\Bundle\InterfaceBundle\Route\Event\ProductReview
     */
    public $productReviews;

    /**
     * @return int
     */
    public function getIdEvent()
    {
        return $this->idEvent;
    }

    /**
     * @param int $idEvent
     *
     * @return Event
     */
    public function setIdEvent(int $idEvent): Event
    {
        $this->idEvent = $idEvent;

        return $this;
    }

    /**
     * @return Place
     */
    public function getPlace()
    {
        return $this->place;
    }

    /**
     * @param Place|null $place
     * @return Event
     */
    public function setPlace($place)
    {
        $this->place = $place;
        return $this;
    }

    /**
     * @return string
     */
    public function getReservationNumber()
    {
        return $this->reservationNumber;
    }

    /**
     * @param string $reservationNumber
     * @return Event
     */
    public function setReservationNumber($reservationNumber)
    {
        $this->reservationNumber = $reservationNumber;
        return $this;
    }

    /**
     * @return DateTime
     */
    public function getCreated(): ?DateTime
    {
        return $this->created;
    }

    /**
     * @param DateTime $created
     *
     * @return Event
     */
    public function setCreated(DateTime $created): Event
    {
        $this->created = $created;
        return $this;
    }

    /**
     * @return DateTime
     */
    public function getDeliveryDate()
    {
        return $this->deliveryDate;
    }

    /**
     * @param DateTime $deliveryDate
     * @return Event
     */
    public function setDeliveryDate($deliveryDate)
    {
        $this->deliveryDate = $deliveryDate;
        return $this;
    }

    /**
     * @return int
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * @param int $status
     * @return Event
     */
    public function setStatus($status)
    {
        $this->status = $status;
        return $this;
    }

    /**
     * @return string
     */
    public function getStep()
    {
        return $this->step;
    }

    /**
     * @param string $step
     * @return Event
     */
    public function setStep($step)
    {
        $this->step = $step;
        return $this;
    }

    /**
     * @return DateTime
     */
    public function getUpdated()
    {
        return $this->updated;
    }

    /**
     * @param DateTime $updated
     * @return Event
     */
    public function setUpdated($updated)
    {
        $this->updated = $updated;
        return $this;
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
     * @return Event
     */
    public function setName($name)
    {
        $this->name = $name;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getSupportUser()
    {
        return $this->supportUser;
    }

    /**
     * @param mixed $supportUser
     * @return Event
     */
    public function setSupportUser($supportUser)
    {
        $this->supportUser = $supportUser;
        return $this;
    }

    /**
     * @return Operation
     */
    public function getOperation()
    {
        return $this->operation;
    }

    /**
     * @param mixed $operation
     * @return Event
     */
    public function setOperation($operation)
    {
        $this->operation = $operation;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getDocument()
    {
        return $this->document;
    }

    /**
     * @param mixed $document
     * @return Event
     */
    public function setDocument($document)
    {
        $this->document = $document;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getOrderReference()
    {
        return $this->orderReference;
    }

    /**
     * @param mixed $orderReference
     * @return Event
     */
    public function setOrderReference($orderReference)
    {
        $this->orderReference = $orderReference;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getLastEvent()
    {
        return $this->lastEvent;
    }

    /**
     * @param mixed $lastEvent
     * @return Event
     */
    public function setLastEvent($lastEvent)
    {
        $this->lastEvent = $lastEvent;
        return $this;
    }

    /**
     * @return int
     */
    public function getTransport()
    {
        return $this->transport;
    }

    /**
     * @param int $transport
     * @return Event
     */
    public function setTransport($transport)
    {
        $this->transport = $transport;
        return $this;
    }

    /**
     * @return int
     */
    public function getService()
    {
        return $this->service;
    }

    /**
     * @param int $service
     * @return Event
     */
    public function setService($service)
    {
        $this->service = $service;
        return $this;
    }

    /**
     * @return int
     */
    public function getDocuments()
    {
        return $this->documents;
    }

    /**
     * @param int $documents
     * @return Event
     */
    public function setDocuments($documents)
    {
        $this->documents = $documents;
        return $this;
    }

    /**
     * @return int
     */
    public function getTDefrost()
    {
        return $this->tDefrost;
    }

    /**
     * @param int $tDefrost
     * @return Event
     */
    public function setTDefrost($tDefrost)
    {
        $this->tDefrost = $tDefrost;
        return $this;
    }

    /**
     * @return Kit
     */
    public function getFormat()
    {
        return $this->format;
    }

    /**
     * @param Kit $format
     * @return Event
     */
    public function setFormat($format)
    {
        $this->format = $format;
        return $this;
    }

    /**
     * @return bool
     */
    public function isStockTrouble()
    {
        return $this->stockTrouble;
    }

    /**
     * @param bool $stockTrouble
     * @return Event
     */
    public function setStockTrouble($stockTrouble)
    {
        $this->stockTrouble = $stockTrouble;
        return $this;
    }

    /**
     * @return DateTime
     */
    public function getEventDate()
    {
        return $this->eventDate;
    }

    /**
     * @param DateTime $eventDate
     * @return Event
     */
    public function setEventDate($eventDate)
    {
        $this->eventDate = $eventDate;
        return $this;
    }

    /**
     * @return int
     */
    public function getSingleUpdate()
    {
        return $this->singleUpdate;
    }

    /**
     * @param int $singleUpdate
     * @return Event
     */
    public function setSingleUpdate($singleUpdate)
    {
        $this->singleUpdate = $singleUpdate;
        return $this;
    }

    /**
     * @return Package[]
     */
    public function getPackages()
    {
        return $this->packages;
    }

    /**
     * @param Package[] $packages
     * @return Event
     */
    public function setPackages($packages)
    {
        $this->packages = $packages;
        return $this;
    }

    /**
     * @return DateTime
     */
    public function getRecall()
    {
        return $this->recall;
    }

    /**
     * @param DateTime $recall
     * @return Event
     */
    public function setRecall($recall)
    {
        $this->recall = $recall;
        return $this;
    }

    /**
     * @return int
     */
    public function getDiscount()
    {
        return $this->discount;
    }

    /**
     * @param int $discount
     * @return Event
     */
    public function setDiscount($discount)
    {
        $this->discount = $discount;
        return $this;
    }

    /**
     * @return int
     */
    public function getPax()
    {
        return $this->pax;
    }

    /**
     * @param int $pax
     * @return Event
     */
    public function setPax($pax)
    {
        $this->pax = $pax;
        return $this;
    }

    /**
     * @return float
     */
    public function getSellingPrice()
    {
        return $this->sellingPrice;
    }

    /**
     * @param float $sellingPrice
     * @return Event
     */
    public function setSellingPrice($sellingPrice)
    {
        $this->sellingPrice = $sellingPrice;
        return $this;
    }

    /**
     * @return float
     */
    public function getRealSellingPrice(): ?float
    {
        return $this->realSellingPrice;
    }

    /**
     * @param float $realSellingPrice
     *
     * @return Event
     */
    public function setRealSellingPrice(float $realSellingPrice): Event
    {
        $this->realSellingPrice = $realSellingPrice;

        return $this;
    }

    public function isStatusPricing()
    {
        if ($this->status === $this::STATUS_SEND || $this->status === $this::STATUS_VALIDATE || $this->status === $this::STATUS_DONE)
            return true;
        else
            return false;
    }

    /**
     * @return bool
     */
    public function isFree()
    {
        return $this->free;
    }

    /**
     * @param bool $free
     * @return Event
     */
    public function setFree($free)
    {
        $this->free = $free;
        return $this;
    }

    /**
     * @return float
     */
    public function getShippingFees(): ?float
    {
        return $this->shippingFees;
    }

    /**
     * @param float $shippingFees
     *
     * @return Event
     */
    public function setShippingFees(float $shippingFees): Event
    {
        $this->shippingFees = $shippingFees;
        return $this;
    }

    /**
     * @return Cause
     */
    public function getCause()
    {
        return $this->cause;
    }

    /**
     * @param Cause $cause
     * @return Event
     */
    public function setCause($cause)
    {
        $this->cause = $cause;
        return $this;
    }

    /**
     * @return int
     */
    public function getMarketingStatus()
    {
        return $this->marketingStatus;
    }

    /**
     * @param int $marketingStatus
     * @return Event
     */
    public function setMarketingStatus($marketingStatus)
    {
        $this->marketingStatus = $marketingStatus;
        return $this;
    }

    /**
     * @return DateTime
     */
    public function getPreparationDate()
    {
        return $this->preparationDate;
    }

    /**
     * @param DateTime $preparationDate
     * @return Event
     */
    public function setPreparationDate($preparationDate)
    {
        $this->preparationDate = $preparationDate;
        return $this;
    }

    /**
     * @return int
     */
    public function getSaltPax()
    {
        return $this->saltPax;
    }

    /**
     * @param int $saltPax
     * @return Event
     */
    public function setSaltPax($saltPax)
    {
        $this->saltPax = $saltPax;
        return $this;
    }

    /**
     * @return int
     */
    public function getSugarPax()
    {
        return $this->sugarPax;
    }

    /**
     * @param int $sugarPax
     * @return Event
     */
    public function setSugarPax($sugarPax)
    {
        $this->sugarPax = $sugarPax;
        return $this;
    }

    /**
     * @return int
     */
    public function getQuoteNumber()
    {
        return $this->quoteNumber;
    }

    /**
     * @param int $quoteNumber
     * @return Event
     */
    public function setQuoteNumber($quoteNumber)
    {
        $this->quoteNumber = $quoteNumber;
        return $this;
    }

    /**
     * @return int
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * @param int $type
     * @return Event
     */
    public function setType($type)
    {
        $this->type = $type;
        return $this;
    }

    /**
     * @return int
     */
    public function getGrade()
    {
        return $this->grade;
    }

    /**
     * @param int $grade
     * @return Event
     */
    public function setGrade($grade)
    {
        $this->grade = $grade;
        return $this;
    }

    /**
     * @return int
     */
    public function getProductsGrade()
    {
        return $this->productsGrade;
    }

    /**
     * @param int $productsGrade
     * @return Event
     */
    public function setProductsGrade($productsGrade)
    {
        $this->productsGrade = $productsGrade;
        return $this;
    }

    /**
     * @return int
     */
    public function getShippingGrade()
    {
        return $this->shippingGrade;
    }

    /**
     * @param int $shippingGrade
     * @return Event
     */
    public function setShippingGrade($shippingGrade)
    {
        $this->shippingGrade = $shippingGrade;
        return $this;
    }

    /**
     * @return DateTime
     */
    public function getShippingDate()
    {
        return $this->shippingDate;
    }

    /**
     * @param DateTime $shippingDate
     * @return Event
     */
    public function setShippingDate($shippingDate)
    {
        $this->shippingDate = $shippingDate;
        return $this;
    }

    /**
     * @return DateTime
     */
    public function getCollectDate()
    {
        return $this->collectDate;
    }

    /**
     * @param DateTime $collectDate
     * @return Event
     */
    public function setCollectDate($collectDate)
    {
        $this->collectDate = $collectDate;
        return $this;
    }

    /**
     * @return Place
     */
    public function getShippingPlace()
    {
        return $this->shippingPlace;
    }

    /**
     * @param Place|null $shippingPlace
     * @return Event
     */
    public function setShippingPlace(?Place $shippingPlace)
    {
        $this->shippingPlace = $shippingPlace;
        return $this;
    }

    /**
     * @return string
     */
    public function getDeliveryReference(): ?string
    {
        return $this->deliveryReference;
    }

    /**
     * @param string $deliveryReference
     * @return Event
     */
    public function setDeliveryReference(?string $deliveryReference): Event
    {
        $this->deliveryReference = $deliveryReference;
        return $this;
    }

    /**
     * @return int
     */
    public function getShippingCode()
    {
        return $this->shippingCode;
    }

    /**
     * @param int $shippingCode
     * @return Event
     */
    public function setShippingCode(int $shippingCode): Event
    {
        $this->shippingCode = $shippingCode;

        return $this;
    }

    /**
     * @return User
     */
    public function getLogisticsManager(): ?User
    {
        return $this->logisticsManager;
    }

    /**
     * @param User $logisticsManager
     *
     * @return Event
     */
    public function setLogisticsManager(?User $logisticsManager): Event
    {
        $this->logisticsManager = $logisticsManager;

        return $this;
    }

    /**
     * @return User
     */
    public function getSalesManager(): ?User
    {
        return $this->salesManager;
    }

    /**
     * @param User $salesManager
     *
     * @return Event
     */
    public function setSalesManager(?User $salesManager): Event
    {
        $this->salesManager = $salesManager;

        return $this;
    }

    /**
     * @return User|null
     */
    public function getEventContact(): ?User
    {
        return $this->eventContact;
    }

    /**
     * @param User|null $eventContact
     * @return Event
     */
    public function setEventContact(?User $eventContact): Event
    {
        $this->eventContact = $eventContact;
        return $this;
    }

    /**
     * @return User|null
     */
    public function getShippingContact(): ?User
    {
        return $this->shippingContact;
    }

    /**
     * @param User|null $shippingContact
     * @return Event
     */
    public function setShippingContact(?User $shippingContact): Event
    {
        $this->shippingContact = $shippingContact;
        return $this;
    }

    /**
     * @return string
     */
    public function getRecipient(): ?string
    {
        return $this->recipient;
    }

    /**
     * @param string $recipient
     * @return Event
     */
    public function setRecipient(string $recipient): Event
    {
        $this->recipient = $recipient;
        return $this;
    }

    /**
     * @return bool
     */
    public function isPacked(): bool
    {
        return $this->packed;
    }

    /**
     * @param bool $packed
     * @return Event
     */
    public function setPacked(bool $packed): Event
    {
        $this->packed = $packed;
        return $this;
    }

    /**
     * @return float
     */
    public function getSupplierSales(): ?float
    {
        return $this->supplierSales;
    }

    /**
     * @param float $supplierSales
     *
     * @return Event
     */
    public function setSupplierSales(float $supplierSales): Event
    {
        $this->supplierSales = $supplierSales;
        return $this;
    }

    /**
     * @return float
     */
    public function getTotalSales(): ?float
    {
        return $this->totalSales;
    }

    /**
     * @param float $totalSales
     *
     * @return Event
     */
    public function setTotalSales(float $totalSales): Event
    {
        $this->totalSales = $totalSales;
        return $this;
    }

    /**
     * @return EventProduct[]
     */
    public function getEventsProducts(): ?array
    {
        return $this->eventsProducts;
    }

    /**
     * @param EventProduct[] $eventsProducts
     *
     * @return Event
     */
    public function setEventsProducts(array $eventsProducts): Event
    {
        $this->eventsProducts = $eventsProducts;

        return $this;
    }

    /**
     * @return User
     */
    public function getCreator(): ?User
    {
        return $this->creator;
    }

    /**
     * @param User $creator
     *
     * @return Event
     */
    public function setCreator(User $creator): Event
    {
        $this->creator = $creator;

        return $this;
    }

    /**
     * @return Billing
     */
    public function getBilling(): ?Billing
    {
        return $this->billing;
    }

    /**
     * @param Billing $billing
     *
     * @return Event
     */
    public function setBilling(Billing $billing): Event
    {
        $this->billing = $billing;

        return $this;
    }

    /**
     * @return PushEmail|null
     */
    public function getReminder(): ?PushEmail
    {
        return $this->reminder;
    }

    /**
     * @param PushEmail|null $reminder
     * @return Event
     */
    public function setReminder(?PushEmail $reminder): Event
    {
        $this->reminder = $reminder;
        return $this;
    }

    /**
     * @return PushEmail|null
     */
    public function getShipped(): ?PushEmail
    {
        return $this->shipped;
    }

    /**
     * @param PushEmail|null $shipped
     * @return Event
     */
    public function setShipped(?PushEmail $shipped): Event
    {
        $this->shipped = $shipped;
        return $this;
    }
}
