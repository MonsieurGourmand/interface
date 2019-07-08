<?php

namespace monsieurgourmand\Bundle\InterfaceBundle\Model;


class FproCustomer extends Master
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $name;

    /**
     * @var integer
     */
    private $idFacturationPro;

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
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
     * @return FproCustomer
     */
    public function setName(string $name): FproCustomer
    {
        $this->name = $name;
        return $this;
    }

    /**
     * @return int
     */
    public function getIdFacturationPro()
    {
        return $this->idFacturationPro;
    }

    /**
     * @param int $idFacturationPro
     * @return FproCustomer
     */
    public function setIdFacturationPro(int $idFacturationPro): FproCustomer
    {
        $this->idFacturationPro = $idFacturationPro;
        return $this;
    }
}
