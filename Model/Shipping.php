<?php

namespace monsieurgourmand\Bundle\InterfaceBundle\Model;

use DateTime;

class Shipping extends Master
{
    /**
     * @var int
     *
     */
    private $idShipping;

    /**
     * @var DateTime
     *
     */
    private $pickingDate;

    /**
     * @var DateTime
     *
     */
    private $shippingDate;

    /**
     * @var Package
     */
    private $package;

    /**
     * @var Place
     */
    private $pickingPlace;

    /**
     * @var Place
     */
    private $shippingPlace;

    /**
     * @var Shipper
     */
    private $shipper;

    /**
     * @var string
     */
    private $trackingNumber;

    /**
     * @return int
     */
    public function getIdShipping()
    {
        return $this->idShipping;
    }

    /**
     * @return DateTime
     */
    public function getPickingDate()
    {
        return $this->pickingDate;
    }

    /**
     * @param DateTime $pickingDate
     * @return Shipping
     */
    public function setPickingDate($pickingDate)
    {
        $this->pickingDate = $pickingDate;
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
     * @return Shipping
     */
    public function setShippingDate($shippingDate)
    {
        $this->shippingDate = $shippingDate;
        return $this;
    }

    /**
     * @return Package
     */
    public function getPackage()
    {
        return $this->package;
    }

    /**
     * @param Package $package
     * @return Shipping
     */
    public function setPackage($package)
    {
        $this->package = $package;
        return $this;
    }

    /**
     * @return Place
     */
    public function getPickingPlace()
    {
        return $this->pickingPlace;
    }

    /**
     * @param Place $pickingPlace
     * @return Shipping
     */
    public function setPickingPlace($pickingPlace)
    {
        $this->pickingPlace = $pickingPlace;
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
     * @param Place $shippingPlace
     * @return Shipping
     */
    public function setShippingPlace($shippingPlace)
    {
        $this->shippingPlace = $shippingPlace;
        return $this;
    }

    /**
     * @return Shipper
     */
    public function getShipper()
    {
        return $this->shipper;
    }

    /**
     * @param Shipper $shipper
     * @return Shipping
     */
    public function setShipper($shipper)
    {
        $this->shipper = $shipper;
        return $this;
    }

    /**
     * @return string
     */
    public function getTrackingNumber()
    {
        return $this->trackingNumber;
    }

    /**
     * @param string $trackingNumber
     * @return Shipping
     */
    public function setTrackingNumber($trackingNumber)
    {
        $this->trackingNumber = $trackingNumber;
        return $this;
    }
}
