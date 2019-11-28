<?php

namespace monsieurgourmand\Bundle\InterfaceBundle\Model;

class Shop extends Place
{
    /** @var string */
    private $name;

    /**
     * @var \monsieurgourmand\Bundle\InterfaceBundle\Route\Shop\Billing
     */
    public $billings;

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @param string $name
     * @return Shop
     */
    public function setName(string $name): Shop
    {
        $this->name = $name;
        return $this;
    }
}
