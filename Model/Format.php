<?php

namespace monsieurgourmand\Bundle\InterfaceBundle\Model;

class Format extends Master
{
    /**
     * @var integer
     */
    private $idFormat;

    /**
     * @var \monsieurgourmand\Bundle\InterfaceBundle\Route\Format\FormatProduct
     */
    public $formatProducts;

    /**
     * @var string
     */
    private $name;

    /**
     * @var string
     */
    private $step;

    /**
     * @var integer
     */
    private $status;

    /**
     * @var integer
     */
    private $pax;

    /**
     * @var integer
     */
    private $quoteNumber;

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
     * @var Customer
     */
    private $customer;

    /**
     * @return int
     */
    public function getIdFormat()
    {
        return $this->idFormat;
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
     * @return Format
     */
    public function setName($name)
    {
        $this->name = $name;
        return $this;
    }

    /**
     * @return string
     */
    public function getStep()
    {
        return $this->step;
    }

    /**
     * @param string $step
     * @return Format
     */
    public function setStep($step)
    {
        $this->step = $step;
        return $this;
    }

    /**
     * @return int
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * @param int $status
     * @return Format
     */
    public function setStatus($status)
    {
        $this->status = $status;
        return $this;
    }

    /**
     * @return int
     */
    public function getPax()
    {
        return $this->pax;
    }

    /**
     * @param int $pax
     * @return Format
     */
    public function setPax($pax)
    {
        $this->pax = $pax;
        return $this;
    }

    /**
     * @return int
     */
    public function getQuoteNumber()
    {
        return $this->quoteNumber;
    }

    /**
     * @param int $quoteNumber
     * @return Format
     */
    public function setQuoteNumber($quoteNumber)
    {
        $this->quoteNumber = $quoteNumber;
        return $this;
    }

    /**
     * @return int
     */
    public function getTransport()
    {
        return $this->transport;
    }

    /**
     * @param int $transport
     * @return Format
     */
    public function setTransport($transport)
    {
        $this->transport = $transport;
        return $this;
    }

    /**
     * @return int
     */
    public function getService()
    {
        return $this->service;
    }

    /**
     * @param int $service
     * @return Format
     */
    public function setService($service)
    {
        $this->service = $service;
        return $this;
    }

    /**
     * @return int
     */
    public function getDocuments()
    {
        return $this->documents;
    }

    /**
     * @param int $documents
     * @return Format
     */
    public function setDocuments($documents)
    {
        $this->documents = $documents;
        return $this;
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
     * @return Format
     */
    public function setCustomer($customer)
    {
        $this->customer = $customer;
        return $this;
    }
}
