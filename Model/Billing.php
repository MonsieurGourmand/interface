<?php

namespace monsieurgourmand\Bundle\InterfaceBundle\Model;

use Symfony\Component\Validator\Constraints as Assert;

class Billing extends Place
{
    /** @var string */
    private $name;

    /**
     * @var string
     */
    private $email;

    /**
     * @var string
     *
     * @Assert\Length(min=14, max=14)
     */
    private $siret;

    /**
     * @var string
     *
     * @Assert\Length(min=13, max=13)
     */
    private $vatNumber;

    /**
     * @var integer
     */
    private $idFacturationPro;

    /**
     * @var Shop
     */
    private $shop;

    /**
     * @var int
     */
    private $nbrEvents;

    /**
     * @return string
     */
    public function getName(): ?string
    {
        return $this->name;
    }

    /**
     * @param string $name
     *
     * @return Billing
     */
    public function setName(?string $name): Billing
    {
        $this->name = $name;

        return $this;
    }

    /**
     * @return string
     */
    public function getEmail(): ?string
    {
        return $this->email;
    }

    /**
     * @param string $email
     * @return Billing
     */
    public function setEmail(string $email): Billing
    {
        $this->email = $email;

        return $this;
    }

    /**
     * @return string
     */
    public function getSiret(): ?string
    {
        return $this->siret;
    }

    /**
     * @param string $siret
     * @return Billing
     */
    public function setSiret(string $siret): Billing
    {
        $this->siret = $siret;

        return $this;
    }

    /**
     * @return string
     */
    public function getVatNumber(): ?string
    {
        return $this->vatNumber;
    }

    /**
     * @param string $vatNumber
     * @return Billing
     */
    public function setVatNumber(string $vatNumber): Billing
    {
        $this->vatNumber = $vatNumber;

        return $this;
    }

    /**
     * @return int
     */
    public function getIdFacturationPro(): ?int
    {
        return $this->idFacturationPro;
    }

    /**
     * @param int $idFacturationPro
     * @return Billing
     */
    public function setIdFacturationPro(int $idFacturationPro): Billing
    {
        $this->idFacturationPro = $idFacturationPro;

        return $this;
    }

    /**
     * @return Shop
     */
    public function getShop(): ?Shop
    {
        return $this->shop;
    }

    /**
     * @param Shop $shop
     *
     * @return Billing
     */
    public function setShop(?Shop $shop): Billing
    {
        $this->shop = $shop;

        return $this;
    }

    /**
     * @return int
     */
    public function getNbrEvents(): ?int
    {
        return $this->nbrEvents;
    }
}
