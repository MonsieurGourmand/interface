<?php

namespace monsieurgourmand\Bundle\InterfaceBundle\Model;

class FormatMoment extends Master
{
    /**
     * @var integer
     */
    private $idFormatMoment;

    /**
     * @var Format
     */
    private $format;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=255)
     */
    private $name;

    /**
     * @var \monsieurgourmand\Bundle\InterfaceBundle\Route\FormatMoment\FormatProduct
     */
    public $formatProducts;

    /**
     * @return int
     */
    public function getIdFormatMoment()
    {
        return $this->idFormatMoment;
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
     * @return FormatMoment
     */
    public function setFormat($format)
    {
        $this->format = $format;
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
     * @return FormatMoment
     */
    public function setName($name)
    {
        $this->name = $name;
        return $this;
    }
}
