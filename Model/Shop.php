<?php

namespace monsieurgourmand\Bundle\InterfaceBundle\Model;

class Shop extends Place
{
    /** @var string */
    private $name;

    /** @var ShopType */
    private $type;

    /**
     * @var \monsieurgourmand\Bundle\InterfaceBundle\Route\Shop\Billing
     */
    public $billings;

    /**
     * @var \monsieurgourmand\Bundle\InterfaceBundle\Route\Shop\AddBilling
     */
    public $addBillings;

    /**
     * @return string
     */
    public function getName(): ?string
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

    /**
     * @return ShopType
     */
    public function getType(): ?ShopType
    {
        return $this->type;
    }

    /**
     * @param ShopType $type
     *
     * @return Shop
     */
    public function setType(ShopType $type): Shop
    {
        $this->type = $type;

        return $this;
    }
}
