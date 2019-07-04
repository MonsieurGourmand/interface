<?php

namespace monsieurgourmand\Bundle\InterfaceBundle\Model;

use DateTime;

class CustomerMenu extends Master
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var Customer
     */
    private $customer;

    /**
     * @var Kit
     */
    private $kit;

    /**
     * @var float
     */
    private $price;

    /**
     * @var DateTime
     */
    private $startDate;

    /**
     * @var DateTime
     */
    private $endDate;

    /**
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @return Customer
     */
    public function getCustomer()
    {
        return $this->customer;
    }

    /**
     * @param Customer $customer
     * @return CustomerMenu
     */
    public function setCustomer(Customer $customer): CustomerMenu
    {
        $this->customer = $customer;
        return $this;
    }

    /**
     * @return Kit
     */
    public function getKit()
    {
        return $this->kit;
    }

    /**
     * @param Kit $kit
     * @return CustomerMenu
     */
    public function setKit(Kit $kit): CustomerMenu
    {
        $this->kit = $kit;
        return $this;
    }

    /**
     * @return float
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * @param float $price
     * @return CustomerMenu
     */
    public function setPrice(float $price): CustomerMenu
    {
        $this->price = $price;
        return $this;
    }

    /**
     * @return DateTime
     */
    public function getStartDate()
    {
        return $this->startDate;
    }

    /**
     * @param DateTime $startDate
     * @return CustomerMenu
     */
    public function setStartDate(DateTime $startDate): CustomerMenu
    {
        $this->startDate = $startDate;
        return $this;
    }

    /**
     * @return DateTime
     */
    public function getEndDate()
    {
        return $this->endDate;
    }

    /**
     * @param DateTime $endDate
     * @return CustomerMenu
     */
    public function setEndDate(DateTime $endDate): CustomerMenu
    {
        $this->endDate = $endDate;
        return $this;
    }
}
