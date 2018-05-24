<?php

namespace monsieurgourmand\Bundle\InterfaceBundle\Model;

class Diet extends Master
{
    /**
     * @var integer
     */
    private $idDiet;

    /**
     * @var string
     */
    private $name;

    /**
     * @return int
     */
    public function getIdDiet()
    {
        return $this->idDiet;
    }

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }
}
