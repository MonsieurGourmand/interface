<?php

namespace monsieurgourmand\Bundle\InterfaceBundle\Model;


use monsieurgourmand\Bundle\InterfaceBundle\Interfaces\FormatInterface;

class Format extends Master implements FormatInterface
{

    public function __construct()
    {

    }

    /**
     * @var integer
     */
    private $idFormat;

    /**
     * @var integer
     */
    private $saltPax;

    /**
     * @var integer
     */
    private $sugarPax;

    /**
     * @var string
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
     * @var float
     */
    private $divers;

    /**
     * @var float
     */
    private $serviceCost;

    /**
     * @var float
     */
    private $price;

    /**
     * @var integer
     */
    private $type;

    /**
     * @var integer
     */
    private $discount;

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
    public function getQuoteNumber()
    {
        return $this->quoteNumber;
    }

    /**
     * @param string $quoteNumber
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
     * @return float
     */
    public function getDivers()
    {
        return $this->divers;
    }

    /**
     * @param float $divers
     * @return Format
     */
    public function setDivers($divers)
    {
        $this->divers = $divers;
        return $this;
    }

    /**
     * @return float
     */
    public function getServiceCost()
    {
        return $this->serviceCost;
    }

    /**
     * @param float $serviceCost
     * @return Format
     */
    public function setServiceCost($serviceCost)
    {
        $this->serviceCost = $serviceCost;
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
     * @return Format
     */
    public function setPrice($price)
    {
        $this->price = $price;
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
     * @return Format
     */
    public function setType($type)
    {
        $this->type = $type;
        return $this;
    }

    /**
     * @return int
     */
    public function getSaltPax()
    {
        return $this->saltPax;
    }

    /**
     * @param int $saltPax
     * @return Format
     */
    public function setSaltPax($saltPax)
    {
        $this->saltPax = $saltPax;
        return $this;
    }

    /**
     * @return int
     */
    public function getSugarPax()
    {
        return $this->sugarPax;
    }

    /**
     * @param int $sugarPax
     * @return Format
     */
    public function setSugarPax($sugarPax)
    {
        $this->sugarPax = $sugarPax;
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
     * @return Format
     */
    public function setDiscount($discount)
    {
        $this->discount = $discount;
        return $this;
    }

}
