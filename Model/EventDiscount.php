<?php

namespace monsieurgourmand\Bundle\InterfaceBundle\Model;

class EventDiscount extends Master
{
    /** @var int */
    private $id;

    /** @var float */
    private $value;

    /** @var Event */
    private $event;

    /** @var EventDiscountType */
    private $eventDiscountType;

    /**
     * @return int
     */
    public function getId(): ?int
    {
        return $this->id;
    }

    /**
     * @return float
     */
    public function getValue(): ?float
    {
        return $this->value;
    }

    /**
     * @param float $value
     * @return EventDiscount
     */
    public function setValue(float $value): EventDiscount
    {
        $this->value = $value;

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
     * @return EventDiscount
     */
    public function setEvent(Event $event): EventDiscount
    {
        $this->event = $event;

        return $this;
    }

    /**
     * @return EventDiscountType
     */
    public function getEventDiscountType(): ?EventDiscountType
    {
        return $this->eventDiscountType;
    }

    /**
     * @param EventDiscountType $eventDiscountType
     * @return EventDiscount
     */
    public function setEventDiscountType(EventDiscountType $eventDiscountType): EventDiscount
    {
        $this->eventDiscountType = $eventDiscountType;

        return $this;
    }
}
