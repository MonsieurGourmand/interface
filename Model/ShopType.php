<?php

namespace monsieurgourmand\Bundle\InterfaceBundle\Model;

/**
 * Class ShopType
 */
class ShopType extends Master
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
     * @return ShopType
     */
    public function setId(int $id): ShopType
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
     * @return ShopType
     */
    public function setName(string $name): ShopType
    {
        $this->name = $name;

        return $this;
    }
}
