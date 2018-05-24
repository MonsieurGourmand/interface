<?php

namespace monsieurgourmand\Bundle\InterfaceBundle\Model;

class Allergen extends Master
{
    /**
     * @var integer
     */
    private $idAllergen;

    /**
     * @var string
     */
    private $name;

    /**
     * @return int
     */
    public function getIdAllergen()
    {
        return $this->idAllergen;
    }

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }
}
