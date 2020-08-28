<?php

namespace monsieurgourmand\Bundle\InterfaceBundle\Model;

class Shop extends Place
{
    /** @var string */
    private $name;

    /** @var ShopType */
    private $type;

    /**
     * @var string
     */
    private $accessCode;

    /**
     * @var string
     */
    private $intercom;

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

    /**
     * @return string
     */
    public function getAccessCode(): ?string
    {
        return $this->accessCode;
    }

    /**
     * @param string $accessCode
     *
     * @return Shop
     */
    public function setAccessCode(?string $accessCode): Shop
    {
        $this->accessCode = $accessCode;
        return $this;
    }

    /**
     * @return string
     */
    public function getIntercom(): ?string
    {
        return $this->intercom;
    }

    /**
     * @param string $intercom
     *
     * @return Shop
     */
    public function setIntercom(?string $intercom): Shop
    {
        $this->intercom = $intercom;
        return $this;
    }
}
