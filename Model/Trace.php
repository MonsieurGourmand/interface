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
    private $name;

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
    public function getName()
    {
        return $this->name;
    }
}
