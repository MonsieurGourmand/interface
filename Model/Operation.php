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
     * @var \monsieurgourmand\Bundle\InterfaceBundle\Route\Operation\Quote
     */
    public $quotes;

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
    private $tPreparation;

    /**
     * @var integer
     */
    private $tTransport;

    /**
     * @var integer
     */
    private $tDefrost;

    /**
     * @var Document
     */
    private $document;

    /**
     * @var User
     */
    private $leadUser;

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
    public function getTPreparation()
    {
        return $this->tPreparation;
    }

    /**
     * @param mixed $tPreparation
     * @return Operation
     */
    public function setTPreparation($tPreparation)
    {
        $this->tPreparation = $tPreparation;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getTTransport()
    {
        return $this->tTransport;
    }

    /**
     * @param mixed $tTransport
     * @return Operation
     */
    public function setTTransport($tTransport)
    {
        $this->tTransport = $tTransport;
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
     * @return User
     */
    public function getLeadUser()
    {
        return $this->leadUser;
    }

    /**
     * @param User $leadUser
     * @return Operation
     */
    public function setLeadUser($leadUser)
    {
        $this->leadUser = $leadUser;
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
}
