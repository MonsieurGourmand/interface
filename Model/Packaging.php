<?php

namespace monsieurgourmand\Bundle\InterfaceBundle\Model;

class Packaging extends Master
{
    /**
     * @var integer
     */
    private $idPackaging;

    /**
     * @var string
     */
    private $name;

    /**
     * @return int
     */
    public function getIdPackaging()
    {
        return $this->idPackaging;
    }

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }
}
