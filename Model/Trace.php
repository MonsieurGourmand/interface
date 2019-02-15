<?php

namespace monsieurgourmand\Bundle\InterfaceBundle\Model;

class Trace extends Master
{
    /**
     * @var integer
     */
    private $idTrace;

    /**
     * @var string
     */
    private $longDescription;

    /**
     * @var string
     */
    private $shortDescription;

    /**
     * @return int
     */
    public function getIdTrace()
    {
        return $this->idTrace;
    }

    /**
     * @return string
     */
    public function getLongDescription()
    {
        return $this->longDescription;
    }

    /**
     * @return string
     */
    public function getShortDescription()
    {
        return $this->shortDescription;
    }
}
