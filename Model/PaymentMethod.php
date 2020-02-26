<?php

namespace monsieurgourmand\Bundle\InterfaceBundle\Model;

/**
 * Class PaymentMethod
 */
class PaymentMethod extends Master
{
    /** @var int */
    private $id;

    /** @var string */
    private $name;

    /**
     * @return int
     */
    public function getId(): ?int
    {
        return $this->id;
    }

    /**
     * @param int $id
     *
     * @return PaymentMethod
     */
    public function setId(int $id): PaymentMethod
    {
        $this->id = $id;

        return $this;
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
     *
     * @return PaymentMethod
     */
    public function setName(string $name): PaymentMethod
    {
        $this->name = $name;

        return $this;
    }
}
