<?php

namespace monsieurgourmand\Bundle\InterfaceBundle\Model;

class Kit extends Master
{
    /**
     * @var integer
     */
    private $idKit;

    /**
     * @var string
     */
    private $title;

    /**
     * @var integer
     */
    private $pax;

    /**
     * @var \monsieurgourmand\Bundle\InterfaceBundle\Route\Kit\KitProduct
     */
    public $kitProducts;

    /**
     * @return int
     */
    public function getIdKit()
    {
        return $this->idKit;
    }

    /**
     * @param int $idKit
     * @return Kit
     */
    public function setIdKit($idKit)
    {
        $this->idKit = $idKit;
        return $this;
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
     * @return Kit
     */
    public function setTitle($title)
    {
        $this->title = $title;
        return $this;
    }

    /**
     * @return int
     */
    public function getPax()
    {
        return $this->pax;
    }

    /**
     * @param int $pax
     * @return Kit
     */
    public function setPax($pax)
    {
        $this->pax = $pax;
        return $this;
    }
}
