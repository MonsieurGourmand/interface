<?php

namespace monsieurgourmand\Bundle\InterfaceBundle\Model;


class Customer extends Master
{
    const DEFAULT_MARGIN = 45;

    /** @var integer */
    private $idCustomer;

    /** @var string */
    private $name;

    /** @var string */
    private $slideShare;

    /** @var string */
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

    /** @var integer */
    private $nbrMenus;

    /**
     * @var \monsieurgourmand\Bundle\InterfaceBundle\Route\Customer\FproCustomer
     */
    public $fproCustomers;

    /** @var string */
    private $slug;

    /** @var string */
    private $password;

    /** @var Document */
    private $logo;

    /** @var Document */
    private $logoMixed;
  
    /** @var boolean */
    private $billable;

    /** @var string */
    private $welcome;

    /** @var int */
    private $margin;

    /** @var User */
    private $logisticsManager;

    /** @var User */
    private $salesManager;

    /**
     * @return int
     */
    public function getIdCustomer(): ?int
    {
        return $this->idCustomer;
    }

    /**
     * @return string
     */
    public function getName(): ?string
    {
        return $this->name;
    }

    /**
     * @param string $name
     * @return Customer
     */
    public function setName(string $name): Customer
    {
        $this->name = $name;

        return $this;
    }

    /**
     * @return string
     */
    public function getReference(): ?string
    {
        return $this->reference;
    }

    /**
     * @param string $reference
     * @return Customer
     */
    public function setReference(string $reference): Customer
    {
        $this->reference = $reference;

        return $this;
    }

    /**
     * @return string
     */
    public function getSlideShare(): ?string
    {
        return $this->slideShare;
    }

    /**
     * @param string $slideShare
     * @return Customer
     */
    public function setSlideShare(string $slideShare): Customer
    {
        $this->slideShare = $slideShare;

        return $this;
    }

    /**
     * @return int
     */
    public function getNbrMenus(): ?int
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
     * @param string|null $welcome
     * @return Customer
     */
    public function setWelcome(?string $welcome): Customer
    {
        $this->welcome = $welcome;

        return $this;
    }

    /**
     * @return int
     */
    public function getMargin(): ?int
    {
        return $this->margin;
    }

    /**
     * @param int $margin
     *
     * @return Customer
     */
    public function setMargin(?int $margin): Customer
    {
        $this->margin = $margin;

        return $this;
    }

    /**
     * @return User
     */
    public function getLogisticsManager(): ?User
    {
        return $this->logisticsManager;
    }

    /**
     * @param User $logisticsManager
     *
     * @return Customer
     */
    public function setLogisticsManager(?User $logisticsManager): Customer
    {
        $this->logisticsManager = $logisticsManager;

        return $this;
    }

    /**
     * @return User
     */
    public function getSalesManager(): ?User
    {
        return $this->salesManager;
    }

    /**
     * @param User $salesManager
     *
     * @return Customer
     */
    public function setSalesManager(?User $salesManager): Customer
    {
        $this->salesManager = $salesManager;

        return $this;
    }
}
