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
     * @var string
     */
    private $comment;

    /**
     * @var Event
     *
     */
    private $event;

    /**
     * @var Bill
     *
     */
    private $bill;

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

    /**
     * @return Bill
     */
    public function getBill()
    {
        return $this->bill;
    }

    /**
     * @param Bill $bill
     * @return Amount
     */
    public function setBill($bill)
    {
        $this->bill = $bill;
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
     * @return Amount
     */
    public function setComment($comment)
    {
        $this->comment = $comment;
        return $this;
    }
}
