<?php

namespace monsieurgourmand\Bundle\InterfaceBundle\Model;

class EventMoment extends Master
{
    /**
     * @var integer
     */
    private $idEventMoment;

    /**
     * @var Event
     */
    private $event;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=255)
     */
    private $name;

    /**
     * @var \DateTime
     */
    private $momentDate;

    /**
     * @var \monsieurgourmand\Bundle\InterfaceBundle\Route\EventMoment\EventProduct
     */
    public $eventProducts;

    /**
     * @return int
     */
    public function getIdEventMoment()
    {
        return $this->idEventMoment;
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
     * @return EventMoment
     */
    public function setEvent($event)
    {
        $this->event = $event;
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
     * @return EventMoment
     */
    public function setName($name)
    {
        $this->name = $name;
        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getMomentDate()
    {
        return $this->momentDate;
    }

    /**
     * @param \DateTime $momentDate
     * @return EventMoment
     */
    public function setMomentDate($momentDate)
    {
        $this->momentDate = $momentDate;
        return $this;
    }
}
