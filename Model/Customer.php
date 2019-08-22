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
     * @var string
     */
    private $slug;

    /**
     * @var string
     */
    private $password;

    /**
     * @var Document
     */
    private $logo;

    /**
     * @var Document
     */
    private $logoMixed;
  
    /**
     * @var boolean
     */
    private $billable;

    /**
     * @var string
     */
    private $welcome;

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
     * @return string
     */
    public function getSlug(): ?string
    {
        return $this->slug;
    }

    /**
     * @param string $slug
     * @return Customer
     */
    public function setSlug(string $slug): Customer
    {
        $this->slug = $slug;
        return $this;
    }

    /**
     * @return string
     */
    public function getPassword(): ?string
    {
        return $this->password;
    }

    /**
     * @param string $password
     * @return Customer
     */
    public function setPassword(string $password): Customer
    {
        $this->password = $password;
        return $this;
    }

    /**
     * @return Document
     */
    public function getLogo(): ?Document
    {
        return $this->logo;
    }

    /**
     * @param Document $logo
     * @return Customer
     */
    public function setLogo(Document $logo): Customer
    {
        $this->logo = $logo;
        return $this;
    }

    /**
     * @return Document
     */
    public function getLogoMixed(): ?Document
    {
        return $this->logoMixed;
    }

    /**
     * @param Document $logoMixed
     * @return Customer
     */
    public function setLogoMixed(Document $logoMixed): Customer
    {
        $this->logoMixed = $logoMixed;
        return $this;
    }

     /**
     * @return bool
     */
    public function isBillable(): ?bool
    {
        return $this->billable;
    }

    /**
     * @return string
     */
    public function getWelcome(): ?string
    {
        return $this->welcome;
    }

    /**
     * @param string $welcome
     * @return Customer
     */
    public function setWelcome(string $welcome): Customer
    {
        $this->welcome = $welcome;
        return $this;
    }
}
