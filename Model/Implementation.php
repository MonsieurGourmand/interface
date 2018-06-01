<?php

namespace monsieurgourmand\Bundle\InterfaceBundle\Model;

class Implementation extends Master
{
    /**
     * @var integer
     */
    private $idImplementation;

    /**
     * @var string
     */
    private $name;

    /**
     * @return int
     */
    public function getIdImplementation()
    {
        return $this->idImplementation;
    }

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

}
