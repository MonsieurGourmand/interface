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
    private $longDescription;

    /**
     * @var string
     */
    private $shortDescription;

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
