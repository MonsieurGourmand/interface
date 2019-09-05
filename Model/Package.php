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
    private $status;

    /**
     * @var integer
     */
    private $weight;

    /**
     * @var integer
     */
    private $size;

    /**
     * @var \monsieurgourmand\Bundle\InterfaceBundle\Route\Package\Activity
     */
    public $activities;

    /**
     * @return int
     */
    public function getIdPackage()
    {
        return $this->idPackage;
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
     */
    public function setTrackingNumber($trackingNumber)
    {
        $this->trackingNumber = $trackingNumber;
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
     */
    public function setType($type)
    {
        $this->type = $type;
    }

    /**
     * @return mixed
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * @param mixed $status
     */
    public function setStatus($status)
    {
        $this->status = $status;
    }

    /**
     * @return int
     */
    public function getWeight()
    {
        return $this->weight;
    }

    /**
     * @param int $weight
     */
    public function setWeight($weight)
    {
        $this->weight = $weight;
    }

    /**
     * @return Event
     */
    public function getEvent()
    {
        return $this->event;
    }

    /**
     * @param Event $event
     * @return Package
     */
    public function setEvent($event)
    {
        $this->event = $event;
        return $this;
    }

    /**
     * @return int
     */
    public function getSize()
    {
        return $this->size;
    }

    /**
     * @param int $size
     * @return Package
     */
    public function setSize($size)
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
}
