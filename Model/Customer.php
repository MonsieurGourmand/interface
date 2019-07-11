<?php

namespace monsieurgourmand\Bundle\InterfaceBundle\Model;


class Customer extends Master
{
    /**
     * @var integer
     */
    private $idCustomer;

    /**
     * @var string
     */
    private $name;

    /**
     * @var string
     */
    private $slideShare;

    /**
     * @var string
     */
    private $reference;

    /**
     * @var \monsieurgourmand\Bundle\InterfaceBundle\Route\Customer\User
     */
    public $users;

    /**
     * @var \monsieurgourmand\Bundle\InterfaceBundle\Route\Customer\Place
     */
    public $places;

    /**
     * @var \monsieurgourmand\Bundle\InterfaceBundle\Route\Customer\Menu
     */
    public $menus;

    /**
     * @var integer
     */
    private $nbrMenus;

    /**
     * @var \monsieurgourmand\Bundle\InterfaceBundle\Route\Customer\FproCustomer
     */
    public $fproCustomers;

    /**
     * @var boolean
     */
    private $billable;

    /**
     * @return int
     */
    public function getIdCustomer()
    {
        return $this->idCustomer;
    }

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param string $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * @return string
     */
    public function getReference()
    {
        return $this->reference;
    }

    /**
     * @param string $reference
     */
    public function setReference($reference)
    {
        $this->reference = $reference;
    }

    /**
     * @return string
     */
    public function getSlideShare()
    {
        return $this->slideShare;
    }

    /**
     * @param string $slideShare
     * @return Customer
     */
    public function setSlideShare($slideShare)
    {
        $this->slideShare = $slideShare;
        return $this;
    }

    /**
     * @return int
     */
    public function getNbrMenus()
    {
        return $this->nbrMenus;
    }

    /**
     * @param int $nbrMenus
     * @return Customer
     */
    public function setNbrMenus(int $nbrMenus): Customer
    {
        $this->nbrMenus = $nbrMenus;
        return $this;
    }

    /**
     * @return bool
     */
    public function isBillable(): ?bool
    {
        return $this->billable;
    }
}
