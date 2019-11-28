<?php

namespace monsieurgourmand\Bundle\InterfaceBundle\Model;

class Billing extends Place
{
    /**
     * @var string
     */
    private $name;

    /**
     * @var string
     */
    private $siret;

    /**
     * @var string
     */
    private $vatNumber;

    /**
     * @var integer
     */
    private $idFacturationPro;

    /**
     * @return string
     */
    public function getName(): ?string
    {
        return $this->name;
    }

    /**
     * @param string $name
     * @return Billing
     */
    public function setName(string $name): Billing
    {
        $this->name = $name;

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
}
