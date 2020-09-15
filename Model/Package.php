<?php

namespace monsieurgourmand\Bundle\InterfaceBundle\Model;

use monsieurgourmand\Bundle\InterfaceBundle\Interfaces\PackageInterface;
use DateTime;

class Package extends Master implements PackageInterface
{
    /**
     * @var integer
     */
    private $idPackage;

    /**
     * @var string
     */
    private $trackingNumber;

    /**
     * @var integer
     */
    private $type;

    /**
     * @var DateTime
     */
    private $collectDate;

    /**
     * @var Event
     */
    private $event;

    /**
     * @var integer
     */
    private $shipperStatus;

    /**
     * @var float
     */
    private $weight;

    /**
     * @var integer
     */
    private $size;

    /**
     * @var bool
     */
    private $equipment;

    /**
     * @var \monsieurgourmand\Bundle\InterfaceBundle\Route\Package\Activity
     */
    public $activities;

    /**
     * @var \monsieurgourmand\Bundle\InterfaceBundle\Route\Package\Channel
     */
    public $channels;

    /**
     * @return int
     */
    public function getIdPackage(): ?int
    {
        return $this->idPackage;
    }

    /**
     * @return string
     */
    public function getTrackingNumber(): ?string
    {
        return $this->trackingNumber;
    }

    /**
     * @param string|null $trackingNumber
     * @return Package
     */
    public function setTrackingNumber(?string $trackingNumber): Package
    {
        $this->trackingNumber = $trackingNumber;

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
     * @return Package
     */
    public function setType(int $type): Package
    {
        $this->type = $type;

        return $this;
    }

    /**
     * @return int
     */
    public function getShipperStatus(): ?int
    {
        return $this->shipperStatus;
    }

    /**
     * @param int $shipperStatus
     * @return Package
     */
    public function setShipperStatus(int $shipperStatus): Package
    {
        $this->shipperStatus = $shipperStatus;

        return $this;
    }

    /**
     * @return float
     */
    public function getWeight(): ?float
    {
        return $this->weight;
    }

    /**
     * @param float $weight
     * @return Package
     */
    public function setWeight(float $weight): Package
    {
        $this->weight = $weight;

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
     * @return Package
     */
    public function setEvent(Event $event): Package
    {
        $this->event = $event;

        return $this;
    }

    /**
     * @return int
     */
    public function getSize(): ?int
    {
        return $this->size;
    }

    /**
     * @param int $size
     * @return Package
     */
    public function setSize(int $size): Package
    {
        $this->size = $size;

        return $this;
    }

    /**
     * @return DateTime
     */
    public function getCollectDate(): ?DateTime
    {
        return $this->collectDate;
    }

    /**
     * @param DateTime $collectDate
     * @return Package
     */
    public function setCollectDate(DateTime $collectDate): Package
    {
        $this->collectDate = $collectDate;

        return $this;
    }

    /**
     * @return bool
     */
    public function hasEquipment(): ?bool
    {
        return $this->equipment;
    }

    /**
     * @param bool $equipment
     *
     * @return Package
     */
    public function setEquipment(bool $equipment): Package
    {
        $this->equipment = $equipment;

        return $this;
    }
}
