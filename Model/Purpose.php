<?php

namespace monsieurgourmand\Bundle\InterfaceBundle\Model;

class Purpose extends Master
{
    /**
     * @var integer
     */
    private $idPurpose;

    /**
     * @var string
     */
    private $name;

    /**
     * @return int
     */
    public function getIdPurpose()
    {
        return $this->idPurpose;
    }

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }
}
