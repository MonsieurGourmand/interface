<?php

namespace monsieurgourmand\Bundle\InterfaceBundle\Model;

use monsieurgourmand\Bundle\InterfaceBundle\Interfaces\EventInterface;

class Operation extends Master implements EventInterface
{
    /**
     * @var integer
     */
    private $idOperation;

    /**
     * @var Customer
     *
     */
    private $customer;

    /**
     * @var \monsieurgourmand\Bundle\InterfaceBundle\Route\Operation\Event
     */
    public $events;

    /**
     * @var \monsieurgourmand\Bundle\InterfaceBundle\Route\Operation\Format
     */
    public $formats;

    /**
     * @var \monsieurgourmand\Bundle\InterfaceBundle\Route\Operation\Activity
     */
    public $activities;

    /**
     * @var \monsieurgourmand\Bundle\InterfaceBundle\Route\Operation\Amount
     */
    public $amounts;

    /**
     * @var \monsieurgourmand\Bundle\InterfaceBundle\Route\Operation\Channel
     */
    public $channels;

    /**
     * @var string
     */
    private $name;

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
     * @var Document
     */
    private $document;

    /**
     * @var integer
     */
    private $discount;

    /**
     * @var integer
     */
    private $type;

    /**
     * @var bool
     */
    private $toValidate;

    /**
     * @var User
     */
    private $logisticsManager;

    /**
     * @var User
     */
    private $salesManager;

    /**
     * @var \monsieurgourmand\Bundle\InterfaceBundle\Route\Operation\Menu
     */
    public $menus;

    /**
     * @var \monsieurgourmand\Bundle\InterfaceBundle\Route\Operation\AddFormat
     */
    public $addFormats;

    /**
     * @var \monsieurgourmand\Bundle\InterfaceBundle\Route\Operation\AddPackages
     */
    public $addPackages;


    /**
     * @return int
     */
    public function getIdOperation()
    {
        return $this->idOperation;
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
     * @return Operation
     */
    public function setCustomer($customer)
    {
        $this->customer = $customer;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param mixed $name
     * @return Operation
     */
    public function setName($name)
    {
        $this->name = $name;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getTransport()
    {
        return $this->transport;
    }

    /**
     * @param mixed $transport
     * @return Operation
     */
    public function setTransport($transport)
    {
        $this->transport = $transport;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getService()
    {
        return $this->service;
    }

    /**
     * @param mixed $service
     * @return Operation
     */
    public function setService($service)
    {
        $this->service = $service;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getDocuments()
    {
        return $this->documents;
    }

    /**
     * @param mixed $documents
     * @return Operation
     */
    public function setDocuments($documents)
    {
        $this->documents = $documents;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getTDefrost()
    {
        return $this->tDefrost;
    }

    /**
     * @param mixed $tDefrost
     * @return Operation
     */
    public function setTDefrost($tDefrost)
    {
        $this->tDefrost = $tDefrost;
        return $this;
    }

    /**
     * @return Document
     */
    public function getDocument()
    {
        return $this->document;
    }

    /**
     * @param Document $document
     * @return Operation
     */
    public function setDocument($document)
    {
        $this->document = $document;
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
     * @return Operation
     */
    public function setDiscount($discount)
    {
        $this->discount = $discount;
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
     * @return Operation
     */
    public function setType($type)
    {
        $this->type = $type;
        return $this;
    }

    /**
     * @return bool
     */
    public function isToValidate(): ?bool
    {
        return $this->toValidate;
    }

    /**
     * @param bool $toValidate
     * @return Operation
     */
    public function setToValidate(bool $toValidate): Operation
    {
        $this->toValidate = $toValidate;

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
     * @return Operation
     */
    public function setLogisticsManager(?User $logisticsManager): Operation
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
     * @return Operation
     */
    public function setSalesManager(?User $salesManager): Operation
    {
        $this->salesManager = $salesManager;

        return $this;
    }
}
