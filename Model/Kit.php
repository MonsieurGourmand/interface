<?php

namespace monsieurgourmand\Bundle\InterfaceBundle\Model;

class Kit extends Master
{
    /**
     * @var integer
     */
    private $idKit;

    /**
     * @var string
     */
    private $title;

    /**
     * @var integer
     */
    private $pax;

    /**
     * @var Format
     */
    private $format;

    /**
     * @var \monsieurgourmand\Bundle\InterfaceBundle\Route\Kit\KitProduct
     */
    public $kitProducts;

    /**
     * @var \monsieurgourmand\Bundle\InterfaceBundle\Route\Format\Event
     */
    public $events;

    /**
     * @var \monsieurgourmand\Bundle\InterfaceBundle\Route\Kit\AddKit
     */
    public $addKits;

    /**
     * @return int
     */
    public function getIdKit()
    {
        return $this->idKit;
    }

    /**
     * @param int $idKit
     * @return Kit
     */
    public function setIdKit($idKit)
    {
        $this->idKit = $idKit;
        return $this;
    }

    /**
     * @return string
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * @param string $title
     * @return Kit
     */
    public function setTitle($title)
    {
        $this->title = $title;
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
     * @return Kit
     */
    public function setPax($pax)
    {
        $this->pax = $pax;
        return $this;
    }

    /**
     * @return Format
     */
    public function getFormat()
    {
        return $this->format;
    }

    /**
     * @param Format $format
     * @return Kit
     */
    public function setFormat($format)
    {
        $this->format = $format;
        return $this;
    }
}