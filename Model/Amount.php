<?php

namespace monsieurgourmand\Bundle\InterfaceBundle\Model;

class Amount extends Master
{
    /**
     * @var integer
     */
    private $idAmount;

    /**
     * @var float
     */
    private $amount;


    /**
     * @var Event
     *
     */
    private $event;

    /**
     * @return int
     */
    public function getIdAmount()
    {
        return $this->idAmount;
    }


    /**
     * @return float
     */
    public function getAmount()
    {
        return $this->amount;
    }

    /**
     * @param float $amount
     * @return Amount
     */
    public function setAmount($amount)
    {
        $this->amount = $amount;
        return $this;
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
     * @return Amount
     */
    public function setEvent($event)
    {
        $this->event = $event;
        return $this;
    }

}
