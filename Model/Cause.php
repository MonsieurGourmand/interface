<?php

namespace monsieurgourmand\Bundle\InterfaceBundle\Model;

class Cause extends Master
{
    /**
     * @var integer
     */
    private $idCause;

    /**
     * @var string
     */
    private $title;

    /**
     * @return int
     */
    public function getIdCause()
    {
        return $this->idCause;
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
     * @return Cause
     */
    public function setTitle($title)
    {
        $this->title = $title;
        return $this;
    }


}
